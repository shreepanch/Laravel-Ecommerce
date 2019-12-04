@extends('layouts.app')
@section('content')
<section class="login_box_area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
                    <div class="login_form_inner">
                        <form class="row login_form" action="{{ route('user.order.create', $product->id) }}" method="post" id="contactForm" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="col-md-12 form-group">                               
                                <input type="id" class="form-control" id="name" name="id" value="{{ $product->id }}" placeholder="ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Id'">
                            </div>

                            <div class="col-md-12 form-group">                              
                                <input type="product" class="form-control" id="product" name="product" value="{{ $product->name }}" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Product'">
                            </div>

                             <div class="col-md-12 form-group">                              
                                <input type="price" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="Price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Price'">
                            </div>

                               <div class="col-md-12 form-group">                              
                                <input type="quantity" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" placeholder="Quantity" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Quantity'">
                            </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Order</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection