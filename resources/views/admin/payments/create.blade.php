@extends('layouts.admin')
@section('content')

<!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
 <form method="POST" action="{{ route('admin.payments.store') }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <div class="row">
            <label class="col-md-3">ID</label>
            <div class="col-md-3"><input type="#" name="order_id" value="{{ $order->id }}"></div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <label class="col-md-3">Quantity</label>
            <div class="col-md-3"><input name="quantity" value="{{ $order->grand_total }}" class="form-control"></div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <label class="col-md-3">Status</label>
                <div class="col-md-3"><input name="status" value="{{ $order->status }}" class="form-control"></div>
                <select name="status" class="form-control">
                    <option value="1">Completed</option>
                    <option value="0">Not Completed</option>
                </select>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <label class="col-md-3">Image</label>
                <div class="col-md-3"><input type="file" name="image"></div>
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