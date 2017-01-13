<?php
namespace App\Http\Controllers;
use App\User;
use App\Product;
use App\Role;
use App\Order;
use Illuminate\Http\Request;
class AppController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
    
    public function getstaffpage()
    {
        return view('staff');
    }
    public function getAdminPage()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }
    
    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_staff']) {
            $user->roles()->attach(Role::where('name', 'staff')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }
	 public function staffcancelticket(Request $request)
    {
	$id=$request->input('id');
	$order=\App\Order::find($id);
	$order->status=3;
	$order->payment_id=1;
	$order->save();
	return redirect()->route('staffcancelticket2')->with('success','Successfully Cancel Ticket');
	/*	Order::where('id', $request['id'])->delete();
       
        return redirect()->back();*/
    }
	 public function staffcancelticket2(Request $request)
    {
	$id=$request->input('id');
	$order=\App\Order::find($id);
	$order->status=3;
	$order->payment_id=1;
	$order->save();
	return redirect()->route('staffcancelticket2')->with('success','Successfully Cancel Ticket');
	
	
       
    }
	 public function getstaffcancelpage()
    {
         $orders = Order::all();
        return view('staffcancelticket', ['orders' => $orders]);
    }
	 public function getstaffcancelpage2()
    {
         $orders = Order::where('status',0 )->get();
        return view('staffcancelticket2', ['orders' => $orders]);
    }
}