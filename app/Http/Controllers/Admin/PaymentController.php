<?php

namespace App\Http\Controllers\Admin;

use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use App\product;
use App\Order;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['payments'] = Payment::all();
        return view('admin.payments.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $arr['order'] = Order::find($id);
        return view('admin.payments.create')->with($arr);
        

    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Payment $payment)
    {
        if($request->image->getClientOriginalExtension()){
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;
            $request->image->storeAs('public/payments',$file);

        }
        else
        {
            $file = '';
        }
        $payments->image = $file;
        $payments->id = $request->id;
        $payments->quantity = $request->quantity;
        $payments->status = $request->status;
        $payments->save();
        return redirect()->route('admin.payments.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        if(isset($request->image) && $request->image->getClientOriginalExtension()){
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;
            $request->image->storeAs('public/payments',$file);

        }
        else
        {
            if(!$payments->image)
                $file = '';
            else
                $file = $payments->image;
        }
        $payments->image = $file;
        $payments->id = $request->id;
        $payments->quantity = $request->quantity;
        $payments->status = $request->status;
        $payments->save();
        return redirect()->route('admin.payments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
