@extends('layout.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Kategori</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($kategori as $p)
            <form class="form-horizontal" action="/datakategori/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id" value="{{ $p->id }}"> <br/>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kategory" value="{{ $p->nama_kategory }}" placeholder="Nama Kategori">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Slug</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="slug" value="{{ $p->slug }}" placeholder="Slug">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Input Data</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_input_data" value="{{ $p->tanggal_input_data }}" placeholder="Tanggal Input Data">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Created At</label>
                  <div class="col-sm-10">
                    <input type="varchar" class="form-control" name="created_at" value="{{ $p->created_at }}" placeholder="Created At">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Updated At</label>
                  <div class="col-sm-10">
                    <input type="datetime" class="form-control" name="updated_at" value="{{ $p->updated_at }}" placeholder="Updated At">
                  </div>
                </div>
                
                </div>
      
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </section>
        @endforeach

    <!-- /.content -->
  
    <!-- /.content -->
@endsection