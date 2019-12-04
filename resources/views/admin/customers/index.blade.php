@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Customers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Customers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <section class="content">
  <div class="container-fluid">
    <p>
      <a href="{{ route('admin.customers.create') }}" class="btn btn-primary">Add New Customers</a>
    </p>
    <table class="table table-bordered table-striped">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Action</th>
    </tr>

    @foreach($customers as $c)
    <tr>
      <td>{{ $c->id }}</td>
      <td>{{ $c->name }}</td>
      <td>{{ $c->address }}</td>
      <td>{{ $c->phone }}</td>
      <td>{{ $c->email }}</td>
      <td>
        <form action="{{ route('admin.customers.destroy', $c->id) }}" method="POST">
          <a class="btn btn-primary" href="{{ route('admin.customers.edit', $c->id) }}">Edit</a>
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
    </tr>



    @endforeach
  </table>

    
    {{ $customers->links() }}

</div>
</section>


@endsection


