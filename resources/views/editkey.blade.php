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
            <h1>Edit Key</h1>
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
              <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Information Form</h3>
              </div>
                  
              <!-- /.card-header -->              
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Item Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="itemname" name="itemname" placeholder="Item Name" value="{{ $data[0]['item_name'] }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{ $data[0]['description'] }}">
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-10 input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">$</span>
                          </div>
                          <input type="text" class="form-control" id="price" name="price" value="{{ $data[0]['price'] }}">
                          <div class="input-group-append">
                              <span class="input-group-text">.00</span>
                          </div>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Edit</button>
                  <a href="{{ $url }}/listkeys">
                  <button type="button" class="btn btn-default float-right">Back</button>
                  </a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
              
           
             
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