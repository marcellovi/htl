@extends('layouts.admin')
<?php 
$url = URL::to("/");
?>
@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of Keys</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">KEYS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              @if(Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
              @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Total of Keys: {{ count($data) }} </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                    <th></th>
                    <th>Item Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td><?php $i=1; echo $i++; ?>
                    <td>{{ $item['item_name'] }}</td>
                    <td>{{ $item['description'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>
                        <a class="btn btn-lg" href="{{ $url }}/editkey/{{ $item['id'] }}"> <i class="fas fa-edit"></i></a> 
                        <a class="btn btn-lg" href="{{ $url }}/deketekey/{{ $item['id'] }}"> <i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>     
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection