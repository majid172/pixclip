<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Invoice;
use App\Models\Media;
use App\Models\Order;
use App\Models\PathService;
use App\Notifications\Order as NotificationsOrder;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        $title  = 'Orders List';
        $orders = Order::checkUser()->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function tracking()
    {
        $title  = 'In Review Orders';
        $orders = Order::status('In Review')->checkUser()->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function pending()
    {
        $title  = 'Pending Orders';
        $orders = Order::status('Pending')->checkUser()->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function received()
    {
        $title  = 'Received Orders';
        $orders = Order::status('Received')->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function invoiced()
    {
        $title  = 'Invoiced Orders';
        $orders = Order::status('Invoiced')->checkUser()->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function processing()
    {
        $title  = 'Processing Orders';
        $orders = Order::status('Processing')->checkUser()->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function finalized()
    {
        $title  = 'Finalized Orders';
        $orders = Order::status('Finalizing')->checkUser()->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function completed()
    {
        $title  = 'Completed Orders';
        $orders = Order::status('Completed')->checkUser()->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function downloaded()
    {
        $title  = 'Downloaded Orders';
        $orders = Order::status('Downloaded')->checkUser()->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function canceled()
    {
        $title  = 'Canceled Orders';
        $orders = Order::status('Canceled')->checkUser()->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function paid()
    {
        $title  = 'Paid Orders';
        $orders = Order::where('is_paid', 1)->checkUser()->get();

        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function orderPlace()
    {
        $pathservices = PathService::where('status', 1)->get();

        return view('panel.orders.create', compact('pathservices'));
    }

    public function orderStore(Request $request)
    {
        $data = $request->except('_token');

        $create = Order::create([
            'job_title'             => $data['title'],
            'user_id'               => auth()->user()->id,
            'service_id'            => json_encode($data['service_id']),
            'image_quantity'        => $data['image_quantity'],
            'instruction'           => $data['instruction'],
            'image_complexity'      => $data['complexity'],
            'return_file_extension' => json_encode($data['return_file_extension']),
            'turnaround'            => $data['turnaround'],
            // 'image_link'            => json_encode($data["image_link"])??"",
        ]);

        if ($create) {
            $create->order_id = 'PIXC-' . date('ym') . '-' . sprintf('%04d', $create->id);
            $create->save();
        }

        $media_ids = [];

        // Handle File Uploads - Save to filesystem
        if ($request->hasFile('upload_files')) {
            $files           = $request->file('upload_files');
            $destinationPath = base_path('../assets/order/' . $create->order_id . '/uploads/');

            if (! file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            foreach ($files as $file) {
                if (! $file->isValid()) {
                    continue; // skip invalid uploads
                }

                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($destinationPath, $fileName);

                $media_create = Media::create([
                    'user_id'   => auth()->id(),
                    'file_name' => $file->getClientOriginalName(),
                    'file'      => 'assets/order/' . $create->order_id . '/uploads/' . $fileName,
                    'extension' => $file->getClientOriginalExtension(),
                ]);

                if ($media_create) {
                    $media_ids[] = $media_create->id;
                }
            }
        }

        if ($create && $media_ids) {
            $create->media_id = json_encode($media_ids);
            $create->save();

            // send mail to user
            $body                  = 'Greeting From PIX Clipping Ltd. Your order #PIXC-' . date('ym') . '-' . sprintf('%04d', $create->id) . ' has submitted successfully. Your order status in now Received. Please wait while our team will review your order soon.';
            $details['subject']    = 'Order Submitted';
            $details['greeting']   = 'Hello ' . auth()->user()->name;
            $details['body']       = $body;
            $details['actionText'] = 'View Order';
            $details['actionUrl']  = url('/order/' . $create->id . '/');
            $details['endText']    = '';

            $user = auth()->user();
            $user->notify(new NotificationsOrder($create));

            // Notification::send(auth()->user(), new SendEmailNotification($details));

            // //send mail to admin
            // $admin_user                  = User::where('is_admin', 1)->first();
            // $admin_body                  = 'New order #PIXC-' . date('ym') . '-' . sprintf('%04d', $create->id) . ' has submitted. Please review the order soon.';
            // $admin_details['subject']    = 'Submitted New Order';
            // $admin_details['greeting']   = 'Hello ' . $admin_user->name;
            // $admin_details['body']       = $admin_body;
            // $admin_details['actionText'] = 'View Order';
            // $admin_details['actionUrl']  = url('/admin/order/' . $create->id);
            // $admin_details['endText']    = '';
            // Notification::send($admin_user, new SendEmailNotification($admin_details));
            return redirect()->route('order.list')
                ->with('success', 'Transaction updated successfully');

            // return view('user.order.order-success', compact('create'));
        } else {
            return view('user.order.order-success', compact('create'));
        }
    }

    public function details(Order $order)
    {
        $selected_services = PathService::whereIn('id', json_decode($order->service_id))->get();
        $services          = PathService::where('status', '1')->get();
        $total_orders      = $order->where('id', $order->id)->count();
        $total_unpaid      = $order->where(['id' => $order->id, 'is_paid' => 0])->count();
        // $order_details = $order;
        $invoice = Invoice::where('order_id', $order->id)->first();
        $images  = null;
        if ($order->media_id) {
            $images = Media::whereIn('id', json_decode($order->media_id))->get();
        }

        // Fetch Output Images
        $output_images = null;
        if ($order->output_media_id && $order->output_media_id != 'null' && $order->output_media_id != '[]') {
            $output_images = Media::whereIn('id', json_decode($order->output_media_id))->get();
        }

        // Fetch Redo Output Images
        $output_redo_images = null;
        if ($order->output_redo_media_id && $order->output_redo_media_id != 'null' && $order->output_redo_media_id != '[]') {
            $output_redo_images = Media::whereIn('id', json_decode($order->output_redo_media_id))->get();
        }

        $billing_address = BillingAddress::where('user_id', $order->user_id)->first();

        return view('panel.orders.details', compact(
            'order',
            'total_orders',
            'total_unpaid',
            'selected_services',
            'services',
            'invoice',
            'images',
            'output_images',
            'output_redo_images',
            'billing_address'
        ));
    }

    public function finalizeView(Order $order)
    {
        return view('panel.orders.finalize', compact('order'));
    }

    public function finalizeStore(Request $request, Order $order)
    {
        $request->validate([
            'output_files.*' => 'nullable|file|max:10240',
            'output_link'    => 'nullable|string',
        ]);

        $media_ids = [];

        // Handle File Uploads
        if ($request->hasFile('output_files')) {
            $files           = $request->file('output_files');
            $destinationPath = base_path('../assets/order/' . $order->order_id . '/finalize');

            if (! file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true); // safer permissions
            }

            foreach ($files as $file) {
                if (! $file->isValid()) {
                    continue; // skip invalid uploads
                }
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($destinationPath, $fileName);
                $media_create = Media::create([
                    'user_id'   => $order->user_id,
                    'file_name' => $file->getClientOriginalName(),
                    'file'      => 'assets/order/' . $fileName,
                    'extension' => $file->getClientOriginalExtension(),
                    // 'type' => $file->getMimeType(),
                    // 'file_size' => $file->getSize(),
                ]);

                if ($media_create) {
                    $media_ids[] = $media_create->id;
                }
            }
        }

        // Determine if this is a correction/redo finalization
        // If order is marked as redo OR if we already have a main output, treat as redo output
        $is_redo_delivery = $order->is_redo == 1 || (! empty($order->output_media_id) && $order->output_media_id != 'null' && $order->output_media_id != '[]');

        $target_media_col = $is_redo_delivery ? 'output_redo_media_id' : 'output_media_id';
        $target_link_col  = $is_redo_delivery ? 'output_redo_link' : 'output_link';

        // Update Order status
        $order->status = 'Finalizing';

        // Merge new media IDs with existing ones
        $existing_media = ! empty($order->{$target_media_col}) ? json_decode($order->{$target_media_col}, true) : [];
        if (! empty($media_ids)) {
            $order->{$target_media_col} = json_encode(array_merge($existing_media, $media_ids));
        }

        // Update output link if provided
        if ($request->filled('output_link')) {
            $order->{$target_link_col} = $request->output_link;
        }

        $order->save();

        return redirect()->route('order.list')->with('success', 'Order finalized successfully');
    }

    public function updateStatus(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'status'   => 'required|in:In Review,Pending,Processing,Received,Finalizing,Completed,Invoiced,Downloaded,Canceled',
        ]);

        $order = Order::find($request->order_id);
        $order->update([
            'status' => $request->status,
        ]);

        // Send logic notification if needed (commented out for now as per similar existing methods)

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Order status updated successfully']);
        }

        return back()->with('success', 'Order status updated successfully');
    }
}
