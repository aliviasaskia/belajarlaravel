@extends('layout.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Kategori</h1>
<br>
     
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              
            <table class="table table-bordered table-striped">
                <tr>
                <th>ID</th>
			          <th>Nama Kategori</th>
			          <th>SLUG</th>
			          <th>Tanggal Input</th>
                <th>Created At</th>
                <th>Updated At</th>
			          <th>Opsi</th>
                </tr>

                @foreach($hasil as $data)
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_kategory}}</td>
                <td>{{$data->slug}}</td>
                <td>{{$data->tanggal_input_data}}</td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->updated_at}}</td>
                <td><a href="/edit/edit/{{ $kategori->id }}">Edit</a> | <a href="/hapus/destroy/{{ $data->id }}">Hapus</a></td>
                </tr>
                @endforeach
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  @else
   <div class="card-panel red darken-3 white-text">Oops.. Data Tidak Ditemukan</div>
@endif
    <!-- /.content -->
@endsection