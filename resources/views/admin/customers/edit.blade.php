@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Customers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Customers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<section class="content">
  <div class="container-fluid">
       <form action="{{ route('admin.customers.update',$customer->id) }}" method="post">
 {{ csrf_field() }}
 <input type="hidden" name="_method" value="PUT">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Name</label>
          <div class="col-md-6"><input type="text" name="name" class="form-control" value="{{ $customer->name }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Address</label>
          <div class="col-md-6"><input type="text" name="address" class="form-control" value="{{ $customer->address }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>
     


      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Phone</label>
          <div class="col-md-6"><input type="number" name="phone" class="form-control" value="{{ $customer->phone }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>


      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Email</label>
          <div class="col-md-6"><input type="text" name="email" class="form-control" value="{{ $customer->email }}"></div>
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


