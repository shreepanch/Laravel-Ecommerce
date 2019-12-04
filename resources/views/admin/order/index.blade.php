@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Order</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <section class="content">
  <div class="container-fluid">
    <p>
      <a href="{{ route('admin.order.create') }}" class="btn btn-primary">Add New order</a>
              </p>
              <table class="table table-bordered table-striped">
              <tr>
                <th>ID</th>
                <th>grand_total</th>
                <th>order_date</th>
                <th>status</th>
                <th>Product</th>
                <th>Action</th>
              </tr>
        @if(count($order))
        @foreach($order as $o)
        <tr>
    <td>{{ $o->id }}</td>
    <td>{{ $o->grand_total }}</td>
    <td>{{ $o->order_date }}</td>
            <td>{{ $o->status }}</td>
       <td>{{ $o->product ? $o->product->name : '' }}</td>
        <td>
          <form action="{{ route('admin.order.destroy', $o->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('admin.order.edit', $o->id) }}">Edit</a>
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a class="btn btn-primary" href="{{ route('admin.payment.create', $o->id) }}">Add payment</a>
              </div>
          </div>
          </form>
        </td>
        </tr>
        @endforeach
        @else
        <tr><td colspan="3">No order Found</td></tr>
        @endif
      </table>
     {{ $order->links() }}  

    </div>
    </section>


@endsection


