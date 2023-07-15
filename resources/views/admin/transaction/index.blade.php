@extends('mainAdmin')
@section('contentAdmin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang di Data Pesanan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/pesanan">Home</a></li>
                        <li class="breadcrumb-item active">Data Pesanan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Tanggal</th>
                                        <th>Quantity</th>
                                        <th>Total Harga</th>
                                        <th>Nama Pemesan</th>
                                        <th>Alamat Pemesan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $nomor  = 1 @endphp
                                    @foreach ($menus as $item)
            
                                        <tr>
                                            <td><?= $nomor ?></td>
                                            <td><?= $item['nama_produk'] ?></td>
                                            <td><?= $item['tanggal'] ?></td>
                                            <td><?= $item['qty'] ?></td>
                                            <td><?= $item['total_price'] ?></td>
                                            <td><?= $item['nama_pemesan'] ?></td>
                                            <td><?= $item['alamat_pemesan'] ?></td>
                                            <td>
                                                <a class="btn btn-primary" href="pesanan_view.php?id=<?= $item['id'] ?>">Lihat</a>
                                                <a class="btn btn-danger" href="pesanan_delete.php?iddel=<?= $item['id'] ?>" onclick="if(!confirm('Anda Yakin Membatalkan Pesanan <?= $item['nama_pemesan'] ?>?')) {return false}">Batalkan</a>
                                            </td>
                                        </tr>
                                    @php $nomor++; @endphp
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