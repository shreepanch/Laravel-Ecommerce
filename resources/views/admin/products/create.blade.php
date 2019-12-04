@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<section class="content">
  <div class="container-fluid">
  	 <form method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Name</label>
          <div class="col-md-6"><input type="text" name="name" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Code</label>
          <div class="col-md-6"><input type="number" name="code" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Image</label>
          <div class="col-md-6"><input type="file" name="image"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Price</label>
          <div class="col-md-6"><input type="number" name="price" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Quantity</label>
          <div class="col-md-6"><input type="number" name="quantity" class="form-control"></div>
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


