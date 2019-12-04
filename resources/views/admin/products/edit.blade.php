@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<section class="content">
  <div class="container-fluid">
  	 <form method="post" action="{{ route('admin.products.update',$product->id) }}" enctype="multipart/form-data">
      {{ csrf_field() }}
 <input type="hidden" name="_method" value="PUT">

      

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Name</label>
          <div class="col-md-6"><input type="text" name="name" class="form-control" value="{{ $product->name }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Code</label>
          <div class="col-md-6"><input type="number" name="code" class="form-control" value="{{ $product->code }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Image</label>
          <div class="col-md-9"><input type="file" name="image"></div>
          <div class="clearfix"></div>
          @if($product->image)
          <div class="col-md-3"></div>
            <div class="col-md-9">
              <img src="{{ asset('storage/app/products'.$product->image) }}" style="width:150px;">
            </div>
          <div class="clearfix"></div>
          @endif
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Price</label>
          <div class="col-md-6"><input type="number" name="price" class="form-control" value="{{ $product->price }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

       <div class="form-group">
        <div class="row">
          <label class="col-md-3">Quantity</label>
          <div class="col-md-6"><input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Save">
      </div>
    </form>
  </div>
</section>

@endsection


