<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Customer;
use App\Product;

class UsersController extends Controller
{
	 public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, Customer $customer)
    {
    	$data = $request->all();

        $this->validate($request, [
            'name' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->save();

        return redirect()->route('user_register');   	
    }


    public function register()
    {    	
    	return view('auth/users/register');
    }


    public function authenticate(Request $request)
    {
        $data = $request->all();

        $email = $data['email'];
        $password = $data['password'];

        if (Auth::guard('customer')->attempt(['email' => $email, 'password' => $password])){
            // Authentication passed...

            return redirect()->route('home');
        }

        return redirect()->back();
    }
   

    public function login()
    {
   
    	return view('auth/users/login');
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
       
        return redirect('user/login');
    }

    public function order_create($id)
    {  
        $arr['product'] = Product::find($id);
        return view('site/order/create')->with($arr);
    }

}
       
 
