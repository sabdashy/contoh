@extends('mainDashboard')
@section('content')
<link rel="stylesheet" href="css/csskonfirmasi.css">

 <!--================Order Details Area =================-->
 <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/bg_1.jpg');">
     <div class="container">
         <div class="row no-gutters slider-text align-items-center justify-content-center">
             <div class="col-md-9 ftco-animate text-center">
                 <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="/menu">Menu</a></span> <span>Konfirmasi</span></p>
                 <h1 class="mb-0 bread">Detail Pemesanan</h1>
             </div>
         </div>
     </div>
 </div>

 <section class="order_details section_gap">
     <div class="container">
             <h3 class="title_confirmation">Terima Kasih. Pesanan anda berhasil kami proses.</h3>
             <div class="row order_d_inner">
                 <div class="col-lg-4">
                     <div class="details_item">
                         <h4>Informasi Pesanan</h4>
                         <ul class="list">
                             <li><a href="#"><span>Jenis Menu</span> : {{ $menus['type_id'] }}</a></li>
                             <li><a href="#"><span>Nama Menu</span> : {{ $menus['name'] }}</a></li>
                             <li><a href="#"><span>Date</span> : </a></li>
                             <li><a href="#"><span>Total Harga</span> : Rp</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="details_item">
                         <h4>Alamat Penerima</h4>
                         <ul class="list">
                             <li><a href="#"><span>Nama</span> : </a></li>
                             <li><a href="#"><span>Alamat</span> : </a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="details_item">
                         <h4>Alamat Pengirim</h4>
                         <ul class="list">
                             <li><a href="#"><span>Jalan</span> : Jl.Nurul Hidayah</a></li>
                             <li><a href="#"><span>Kelurahan</span> : Kelapa Dua Wetan</a></li>
                             <li><a href="#"><span>Kecamatan</span> : Ciracas</a></li>
                             <li><a href="#"><span>Kota </span> : Jakarta Timur</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="order_details_table">
                 <h2>Detail Informasi</h2>
                 <div class="table-responsive">
                     <table class="table">
                         <thead>
                             <tr>
                                 <th scope="col">Produk</th>
                                 <th scope="col">Harga</th>
                                 <th scope="col">Quantity</th>
                                 <th scope="col">Total Harga</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>
                                     <p>{{ $menus['name'] }}</p>
                                 </td>
                                 <td>
                                     <p>Rp {{ number_format($menus['price'], 0, ',', '.') }}</p>
                                 </td>
                                 <td>
                                     <h5>x 0{{ $menus['quantity'] }}</h5>
                                 </td>
                                 <td>
                                     <p>Rp</p>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <h4>Total</h4>
                                 </td>
                                 <td>
                                     <h5></h5>
                                 </td>
                                 <td>
                                     <p></p>
                                 </td>
                                 <td>
                                     <p>Rp </p>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
     </div>
 </section>
 <!--================End Order Details Area =================-->
 <hr>

@endsection