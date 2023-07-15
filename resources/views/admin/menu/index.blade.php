@extends('mainAdmin')
@section('contentAdmin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang di Data Menu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/menu">Home</a></li>
                        <li class="breadcrumb-item active">Data Menu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-success" href="/admin/menu/create" role="button">Tambah Produk</a>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Price</th>
                                        <th>Jenis Menu</th>
                                        <th>Nama Pemesan</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $iteration  = 1 @endphp
                                    @foreach ($menus as $item)        
                                        <tr>
                                            <td>{{ $iteration }}</td>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ $item['price'] }}</td>
                                            <td>{{ $item->type->name }}</td>
                                            <td>{{ $item->users->name }}</td>
                                            <td>
                                                <img src="{{asset('storage')}}/images/{{$item->image}}" height="40px" width="40px" alt="">
                                            </td>
                                            <td>
                                                <a class="btn btn-warning btn-sm" href="/admin/menu/edit/{{$item->id}}">Edit</a>
                                                <form action="/admin/menu" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="hidden" value='{{$item->id}}' name='id'>
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @php $iteration++ @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->
@endsection