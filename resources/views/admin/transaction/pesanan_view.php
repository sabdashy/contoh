<?php
include_once '../templates/head.php';
include_once '../templates/sidebar.php';
include_once '../templates/navbar.php';
require_once '../../dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM pesanan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang di View Pesanan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Pesanan</li>
                        <li class="breadcrumb-item active">View Pesanan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-danger" href="pesanan_index.php" role="button">Kembali</a>

                            <!-- <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Nama Pesanan</td>
                                        <td><?= $row['nama_produk'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td><?= $row['tanggal'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td><?= $row['qty'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Total Harga</td>
                                        <td><?= $row['total_price'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pemesan</td>
                                        <td><?= $row['nama_pemesan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Pemesan</td>
                                        <td><?= $row['alamat_pemesan'] ?></td>
                                    </tr>
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

<?php
include_once '../templates/footer.php';
?>