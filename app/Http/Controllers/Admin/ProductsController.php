<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['products'] = Product::all();
        $arr['products'] = Product::paginate(2);
        return view('admin.products.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {

        if($request->image->getClientOriginalName()){
            $ext =  $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;
            $request->image->storeAs('public/products',$file);
        }
        else
        {
            $file = '';
        }
        $product->image = $file;
        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect()->route('admin.products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $arr['product'] = $product;
        return view('admin.products.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
            if(isset($request->image) && $request->image->getClientOriginalExtension()){
            $ext =  $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;
            $request->image->storeAs('public/products',$file);
        }
        else
        {
            if(!$product->image)
                $file = '';
            else
                $file = $product->image;
        }
        $product->image = $file;
        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
