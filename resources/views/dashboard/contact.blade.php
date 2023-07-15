@extends('mainDashboard')
@section('content')

 <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/bg_1.jpg');">
     <div class="container">
         <div class="row no-gutters slider-text align-items-center justify-content-center">
             <div class="col-md-9 ftco-animate text-center">
                 <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Hubungi Kami</span></p>
                 <h1 class="mb-0 bread">Kontak Kami</h1>
             </div>
         </div>
     </div>
 </div>

 <section class="ftco-section contact-section bg-light">
     <div class="container">
         <div class="row d-flex mb-5 contact-info">
             <div class="w-100"></div>
             <div class="col-md-3 d-flex">
                 <div class="info bg-white p-4">
                     <p><span>Address:</span> Jl.Nurul Hidayah, No.24C, Kelapa Dua Wetan, Ciracas, Jakarta Timur 13730</p>
                 </div>
             </div>
             <div class="col-md-3 d-flex">
                 <div class="info bg-white p-4">
                     <p><span>Phone:</span> <a href="tel://089650683991" target="_blank" rel="noopener noreferrer">+62 896 5068 3991</a></p>
                 </div>
             </div>
             <div class="col-md-3 d-flex">
                 <div class="info bg-white p-4">
                     <p><span>Email:</span> <a href="mailto:sabd22203ti@student.nurulfikri.ac.id" target="_blank" rel="noopener noreferrer">sabd22203ti@nurulfikri.ac.id</a></p>
                 </div>
             </div>
             <div class="col-md-3 d-flex">
                 <div class="info bg-white p-4">
                     <p><span>Website</span> <a href="https://nurulfikri.ac.id" target="_blank" rel="noopener noreferrer">nurulfikri.ac.id</a></p>
                 </div>
             </div>
         </div>
     </div>
 </section>

@endsection