<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function list()
    {
        $users = User::get();
        return view("panel.users.list", compact("users"));
    }
    public function edit(User $user)
    {
$countries =Country::orderBy('short_name','asc')->get();
        return view('panel.users.account', compact('user','countries'));
    }

    public function update(User $user, Request $request)
    {
        $data = $request->all();
        dd($user);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'User removed successfully');
    }

}
