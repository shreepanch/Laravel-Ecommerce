@extends('layouts.admin')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Payments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Payments</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <table class="table table-bordered table-striped">
    <tr>
      <th>ID</th>
      <th>Quantity</th>
      <th>Status</th>
    </tr>

    @foreach($payments as $pay)
    <tr>
      <td>{{ $pay->id }}</td>
      <td>{{ $pay->quantity }}</td>
      <td>{{ $pay->status }}</td>
      <td>
    </td>
    </tr>
    @endforeach
  </table>  
</div>
</section>
@endsection

