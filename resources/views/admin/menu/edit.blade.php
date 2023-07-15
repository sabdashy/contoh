@extends('mainAdmin')
@section('contentAdmin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang di Update Menu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Menu</li>
                        <li class="breadcrumb-item active">Update Menu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-danger" href="/admin/menu" role="button">Kembali</a>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- form start -->
                        <form method="POST" action="/admin/menu/{{$menu->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name" class="col-4 col-form-label">Nama Menu</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <input id="name" name="name" type="text" class="form-control" value="{{ $menu->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-4 col-form-label">Deskripsi Produk</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <input id="description" name="description" type="text" class="form-control" value="{{ $menu->description }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="price" class="col-4 col-form-label">Harga</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <input id="price" name="price" value="{{ $menu->price }}" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image" class="col-4 col-form-label">Image</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <input id="image" name="image" value="{{ $menu->image }}" type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="type_id" class="col-4 col-form-label">Jenis Produk</label>
                                    <div class="col-8">
                                        <select name="type_id" id="type_id" class="form-control" aria-label="Default select example">
                                            @foreach ($types as $type)
                                            <option value="{{$type->id}}" {{ $type->id == $menu->type_id ? 'selected' : ''}}>{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <input type="submit" name="proses" type="submit" class="btn btn-success" value="Simpan" />
                                    </div>
                                </div>
                            </div>
                        </form>
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