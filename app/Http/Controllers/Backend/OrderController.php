<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Order;
use App\Models\PathService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list()
    {
        $title  = "Orders List";
        $orders = Order::get();
        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function tracking()
    {
        $title  = "Tracking Orders";
        $orders = Order::status('In Review')->get();
        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function pending()
    {
        $title  = "Pending Orders";
        $orders = Order::status('Pending')->get();
        return view('panel.orders.list', compact('orders', 'title'));
    }
    public function received()
    {
        $title  = "Received Orders";
        $orders = Order::status('Received')->get();
        return view('panel.orders.list', compact('orders', 'title'));
    }
    public function invoiced()
    {
        $title  = "Invoiced Orders";
        $orders = Order::status('Invoiced')->get();
        return view('panel.orders.list', compact('orders', 'title'));
    }
    public function processing()
    {
        $title  = "Processing Orders";
        $orders = Order::status('Processing')->get();
        return view('panel.orders.list', compact('orders', 'title'));
    }
    public function finalized()
    {
        $title  = "Finalized Orders";
        $orders = Order::status('Finalizing')->get();
        return view('panel.orders.list', compact('orders', 'title'));
    }
    public function completed()
    {
        $title  = "Completed Orders";
        $orders = Order::status('Completed')->get();
        return view('panel.orders.list', compact('orders', 'title'));
    }
    public function downloaded()
    {
        $title  = "Downloaded Orders";
        $orders = Order::status('Downloaded')->get();
        return view('panel.orders.list', compact('orders', 'title'));
    }
    public function canceled()
    {
        $title  = "Canceled Orders";
        $orders = Order::status('Canceled')->get();
        return view('panel.orders.list', compact('orders', 'title'));
    }

    public function paid()
    {
        $title  = "Paid Orders";
        $orders = Order::where('is_paid', 1)->get();
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
            'job_title'             => $data["title"],
            'user_id'               => auth()->user()->id,
            'service_id'            => json_encode($data["service_id"]),
            'image_quantity'        => $data["image_quantity"],
            'instruction'           => $data["instruction"],
            'image_complexity'      => $data["complexity"],
            'return_file_extension' => json_encode($data["return_file_extension"]),
            'turnaround'            => $data["turnaround"],
            // 'image_link'            => json_encode($data["image_link"])??"",
        ]);

        $media_ids = [];

        if ($request->hasFile('upload_files')) {

            $files = $request->file('upload_files');

            foreach ($files as $file) {

                $media_create = Media::create([
                    'user_id'   => auth()->id(),
                    'file_name' => $file->getClientOriginalName(),
                    'file'      => file_get_contents($file->getRealPath()),
                    'extension' => $file->getClientOriginalExtension(),
                    'type'      => $file->getMimeType(),
                    'file_size' => $file->getSize(),
                ]);

                if ($media_create) {
                    $media_ids[] = $media_create->id;
                }
            }
        }

        if ($create) {
            $create->order_id = 'PIXC-' . date('ym') . '-' . sprintf('%04d', $create->id);
            if ($media_ids) {
                $create->media_id = json_encode($media_ids);
            }
            $create->save();

            //send mail to user
            $body                  = 'Greeting From PIX Clipping Ltd. Your order #PIXC-' . date('ym') . '-' . sprintf('%04d', $create->id) . ' has submitted successfully. Your order status in now Received. Please wait while our team will review your order soon.';
            $details['subject']    = 'Order Submitted';
            $details['greeting']   = 'Hello ' . auth()->user()->name;
            $details['body']       = $body;
            $details['actionText'] = 'View Order';
            $details['actionUrl']  = url('/order/' . $create->id . '/');
            $details['endText']    = '';
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
            return back();
            // return view('user.order.order-success', compact('create'));
        } else {
            return view('user.order.order-success', compact('create'));
        }
    }

    public function details(Order $order)
    {
        $services = PathService::whereIn('id', json_decode($order->service_id))->get();
         $total_orders = $order->where('id', $order->id)->count();
        $total_unpaid = $order->where(['id' => $order->id, 'is_paid' => 0])->count();
        return view ('panel.orders.details',compact('order','services','total_orders','total_unpaid'));
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
