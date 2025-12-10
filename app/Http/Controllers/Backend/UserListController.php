<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserListController extends Controller
{
    public function list()
    {
        $users = User::get();
        return view("panel.users.list", compact("users"));
    }
    public function edit(User $user)
    {
        $countries = Country::orderBy('short_name', 'asc')->get();
        return view('panel.users.account', compact('user', 'countries'));
    }

    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone'     => 'nullable|string|max:30',
            'address'    => 'nullable|string|max:255',
            'city'       => 'nullable|string|max:100',
            'state'      => 'nullable|string|max:100',
            'post_code'  => 'nullable|string|max:10',
            'country_id' => 'required|exists:countries,id',
            'status'     => 'required|in:0,1,2',
        ]);

       
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $validator->validated();
        $user->update([
            'name'   => $data['name'],
            'email'  => $data['email'],
            'status' => $data['status'],
        ]);

        $user->userDetail()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'phone'      => $data['phone'] ?? null,
                'address'    => $data['address'] ?? null,
                'city'       => $data['city'] ?? null,
                'state'      => $data['state'] ?? null,
                'post_code'  => $data['post_code'] ?? null,
                'country_id' => $data['country_id'],
                'country_id' => $data['country_id'],
                
                // 'uuid' => 'PIXU-'.date('ym').'-'.sprintf('%04d',$user->id)
            ]
        );

        return redirect()
            ->back()
            ->with('success', 'User updated successfully ');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'User removed successfully');
    }

}
