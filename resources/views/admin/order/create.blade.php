@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Order</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <section class="content">
  <div class="container-fluid">
     <form method="post" action="{{ route('admin.order.store') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <div class="row">
            <label class="col-md-3">ID</label>
            <div class="col-md-6"><input type="number" name="ID" class="form-control"></div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="form-group">
        <div class="row">
          <label class="col-md-3">Product</label>
          <div class="col-md-6">
            <select name="product_id" class="form-control">
              <option value="">Choose Product</option>
              @foreach($products as $p)
                <option value="{{ $p->id }}">{{ $p->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

       <div class="form-group">
        <div class="row">
          <label class="col-md-3">grand_total</label>
          <div class="col-md-6"><input type="number" name="grand_total" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">order_date</label>
          <div class="col-md-6"><input type="text" name="order_date" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">status</label>
          <div class="col-md-6"><input type="text" name="status" class="form-control"></div>
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


