@extends('mainDashboard')
@section('content')

<section id="home-section" class="hero">
         <div class="home-slider owl-carousel">
             <div class="slider-item" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/bgMkn2.jpg');">
                 <div class="overlay"></div>
                 <div class="container">
                     <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                         <div class="col-md-12 ftco-animate text-center">
                             <h1 class="mb-2">Kami menyajikan makanan &amp; minuman berkualitas</h1>
                             <h2 class="subheading mb-4">Teruji &amp; Terpercaya</h2>
                         </div>

                     </div>
                 </div>
             </div>

             <div class="slider-item" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/bgMkn1.jpg');">
                 <div class="overlay"></div>
                 <div class="container">
                     <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                         <div class="col-sm-12 ftco-animate text-center">
                             <h1 class="mb-2">100% Produk Halal &amp; Baru </h1>
                             <h2 class="subheading mb-4">Dari bahan-bahan berkualitas &amp; teruji BPOM</h2>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="ftco-section">
         <div class="container">
             <div class="row no-gutters ftco-services">
                 <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                     <div class="media block-6 services mb-md-0 mb-4">
                         <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                             <span class="flaticon-shipped"></span>
                         </div>
                         <div class="media-body">
                             <h3 class="heading">Gratis Ongkir</h3>
                             <span>Pesanan lebih dari 100k</span>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                     <div class="media block-6 services mb-md-0 mb-4">
                         <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                             <span class="flaticon-diet"></span>
                         </div>
                         <div class="media-body">
                             <h3 class="heading">Pasti Baru</h3>
                             <span>Paket terjamin baik</span>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                     <div class="media block-6 services mb-md-0 mb-4">
                         <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                             <span class="flaticon-award"></span>
                         </div>
                         <div class="media-body">
                             <h3 class="heading">Kualitas Unggul</h3>
                             <span>Makanan Enak</span>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                     <div class="media block-6 services mb-md-0 mb-4">
                         <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                             <span class="flaticon-customer-service"></span>
                         </div>
                         <div class="media-body">
                             <h3 class="heading">Aktif</h3>
                             <span>Pelayanan 24/7</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="ftco-section ftco-category ftco-no-pt">
         <div class="container">
             <div class="row">
                 <div class="col-md-8">
                     <div class="row">
                         <div class="col-md-6 order-md-last align-items-stretch d-flex">
                             <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url('{{ asset('template') }}/assets/dashboardimages/category.jpg');">
                                 <div class="text text-center">
                                     <h2>Makanan dan Minuman</h2>
                                     <p>Disajikan Hangat dan Nikmat</p>
                                     <p><a href="pengunjung/menu_belanja.php" class="btn btn-primary">Belanja Yuk</a></p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/makananBerat.jpg');">
                                 <div class="text px-3 py-1">
                                     <h2 class="mb-0"><a href="pengunjung/menu_belanja.php">Makanan Berat</a></h2>
                                 </div>
                             </div>
                             <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/makananPenutup.jpg');">
                                 <div class="text px-3 py-1">
                                     <h2 class="mb-0"><a href="pengunjung/menu_belanja.php">Makanan Penutup</a></h2>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/juice_lemon.jpg');">
                         <div class="text px-3 py-1">
                             <h2 class="mb-0"><a href="pengunjung/menu_belanja.php">Aneka Jus</a></h2>
                         </div>
                     </div>
                     <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/pizza.jpg');">
                         <div class="text px-3 py-1">
                             <h2 class="mb-0"><a href="pengunjung/menu_belanja.php">Cepat Saji</a></h2>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <hr>

 @endsection