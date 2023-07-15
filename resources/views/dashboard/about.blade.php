@extends('mainDashboard')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/omelete.jpg');">
  <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-0 bread">Tentang Kami</h1>
          </div>
      </div>
  </div>
</div>


<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
  <div class="container">
      <div class="row">
          {{-- <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('template') }}/assets/dashboard/images/logo.jpg);">
          </div> --}}
          <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
              <div class="heading-section-bold mb-4 mt-md-5">
                  <div class="ml-md-0">
                      <h2 class="mb-4">About Us</h2>
                  </div>
              </div>
              <div class="pb-md-5">
                  <p>
                      Kami adalah Mahasiswa-mahasiswa semester 2 dari Sekolah Tinggi Terpadu Nurul fikri terdiri Dari
                      4 orang sinobi :  </br>1. Sabda syamangun  </br>2. Romi Wahyudi  </br>3. Adi  </br>4. Rustu
                 
                  </p>
                  <p><a href="/kontak" class="btn btn-primary">Hubungi Kami</a></p>
              </div>
          </div>
      </div>
  </div>
</section>

<br><br><br>
<hr>

@endsection


{{-- @extends('mainDashboard')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Tentang Kami</span></p>
                <h1 class="mb-0 bread">Tentang Saya</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/foto.png);">
                <a href="images/vidio2.mp4" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4">Selamat Datang di eCommerce NF VEGETARIAN</h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p>
                        Assalamu'alaikum Warahmatullahi Wabarakatuh. <br> Halo Pak Dosen Sirojul Munir S.SI, M.KOM & Halo juga
                        Ka Asdos Aldi Mahardiansyah.
                    </p>
                    <p>
                        Selamat datang dan mencoba eCommerce NF Vegetarian sebagai tugas UTS Pemrograman Web 2. Saya Sabda
                        Shyamangun dari TI - 10, dengan NIM 0110222203 mengucapkan Terima Kasih banyak atas pengalaman dari
                        pembuatan projek ini, banyak hal yang baru saya ketahui dan juga banyak hal dari pembelajaran sebelumnya
                        saya terapkan pada projek ini, adapun kekurangan dari pembuatan projek ini dikarenakan ketidaktahuan
                        serta waktu yang diberikan tidak saya maksimalkan dalam pembuatan projek ini dikarenakan sifat malas yang
                        saya sangat tidak sukai tetapi selalu muncul terus dikehidupan saya.
                    </p>
                    <p>
                        Sekian penjelasan tentang saya akan pembuatan projek ini, kurang lebihnya saya mohon maaf, Wabillahi Taufik
                        wal Hidayah Wassalamualaikum Warahmatullahi Wabarakatuh.
                    </p>
                    <p><a href="index.php" class="btn btn-primary">Shop now</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br><br>
<hr>

 @endsection --}}