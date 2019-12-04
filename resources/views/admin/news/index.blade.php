@extends('layouts.admin')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">News</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">News</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<section class="content">
  <div class="container-fluid">
  	<p>
  		<a href="{{ route('admin.news.create') }}" class="btn btn-primary">Add New News</a>
  	</p>
  	<table class="table table-bordered table-striped">
  	<tr>
  		<th>ID</th>
  		<th>Title</th>
      <th>Category</th>
  		<th>Action</th>
  	</tr>
    @if(count($news))
  	@foreach($news as $n)
  	<tr>
  		<td>{{ $n->id }}</td>
  		<td>{{ $n->title }}</td>
      <td>{{ $n->category ? $n->category->title : '' }}</td>
  		<td>
        <form action="{{ route('admin.news.destroy', $n->id) }}" method="POST">
          <a class="btn btn-primary" href="{{ route('admin.news.edit', $n->id) }}">Edit</a>
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
  	</tr>



  	@endforeach
    @else
    <tr><td colspan="3">No News Found</td></tr>
    @endif
  </table>

    {{ $news->links() }}
    

</div>
</section>


@endsection


