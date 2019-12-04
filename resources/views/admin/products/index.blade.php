@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<section class="content">
  <div class="container-fluid">
  	<p>
  		<a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add New Product</a>
  	</p>
  	<table class="table table-bordered table-striped">
  	<tr>
  		<th>ID</th>
  		<th>Name</th>
      <th>Code</th>
      <th>Price</th>
      <th>Quantity</th>
  		<th>Action</th>
  	</tr>
  	@foreach($products as $p)
      	<tr>
      		<td>{{ $p->id }}</td>
      		<td>{{ $p->name }}</td>
          <td>{{ $p->code }}</td>
          <td>{{ $p->price }}</td>
          <td>{{ $p->quantity }}</td>
         
    <td>
      <form action="{{ route('admin.products.destroy',$p->id) }}" method="POST">
        <a class="btn btn-primary" href="{{ route('admin.products.edit',$p->id) }}">Edit</a>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </td>
      	</tr>

    @endforeach
    </table>

    {{ $products->links() }}
    </div>
    </section>

    @endsection


