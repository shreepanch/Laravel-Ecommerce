@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit order</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <section class="content">
  <div class="container-fluid">
       <form action="{{ route('admin.order.update',$order->id) }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
 <input type="hidden" name="_method" value="PUT">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">ID</label>
          <div class="col-md-6"><input type="text" name="ID" class="form-control" value="{{ $order->id }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

       <div class="form-group">
        <div class="row">
          <label class="col-md-3">product</label>
          <div class="col-md-6">
            <select name="product_id" class="form-control">
              <option value="">Choose product</option>
              @foreach($products as $p)
                <option value="{{ $p->id }}" 

                  @if($p->id == $order->product_id)
                  selected
                  @endif

                  >{{ $p->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>



      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Grand_total</label>
          <div class="col-md-6"><input type="number" name="Grand_total" class="form-control" value="{{ $order->Grand_total }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

    

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Status</label>
          <div class="col-md-6"><input type="text" name="Status" class="form-control" value="{{ $order->Status }}"></div>
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


