@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<section class="content">
  <div class="container-fluid">
  	<p>
  		<a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add New Category</a>
  	</p>
  	<table class="table table-bordered table-striped">
  	<tr>
  		<th>ID</th>
  		<th>Title</th>
  		<th>Action</th>
  	</tr>
  	@foreach($categories as $c)
      	<tr>
      		<td>{{ $c->id }}</td>
      		<td>{{ $c->title }}</td>
         
    <td>
      <form action="{{ route('admin.categories.destroy',$c->id) }}" method="POST">
        <a class="btn btn-primary" href="{{ route('admin.categories.edit',$c->id) }}">Edit</a>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      <!-- <form action="{{ route('admin.categories.destroy',$c->id) }}" method="POST">
      <a class="btn btn-primary" href="{{ route('admin.categories.edit',$c->id) }}">Edit</a>
       {{ csrf_field() }}
     <input type="hidden" name="_method" value="  DELETE">
      <button type="submit" class="btn btn-danger">Delete</button>
  </form> -->
    </td>
      	</tr>

    @endforeach
      </table>
      {{ $categories->links() }}
     </div>
    </section>

    @endsection


