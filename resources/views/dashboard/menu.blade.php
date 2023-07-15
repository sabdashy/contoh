@extends('mainDashboard')
@section('content')

 <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/bg_1.jpg');">
     <div class="container">
         <div class="row no-gutters slider-text align-items-center justify-content-center">
             <div class="col-md-9 ftco-animate text-center">
                 <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Produk</span></p>
                 <h1 class="mb-0 bread">Produk NF Vegetarian</h1>
             </div>
         </div>
     </div>
 </div>

 <section class="ftco-section">
     <div class="container">
         <div class="row justify-content-center mb-3 pb-3">
             <div class="col-md-12 heading-section text-center ftco-animate">
                 <span class="subheading">Produk Pilihan</span>
                 <h2 class="mb-4">Produk Kami</h2>
                 <p>Sangat jauh sekali, melewati banyaknya pegunungan, jauh dari negara Vokalia dan Consonantia</p>
             </div>
         </div>
     </div>
     <div class="container" enctype="multipart/form-data">
         <div class="row">
             @php $iteration = 1; @endphp
                @foreach ($menus as $item)
                 <div class="col-md-6 col-lg-3 ftco-animate">
                     <div class="product" height="" width="">
                         <a href="/details/{{$item->id}}" class="img-prod"><img class="" height="220rem" width="100%" src="{{asset('storage')}}/images/{{$item->image}}" alt="Colorlib Template">
                             <div class="overlay"></div>
                         </a>
                         <div class="text py-3 pb-4 px-3 text-center">
                             <h3><a href="/details/{{$item->id}}"> {{$item['name'] }}</a></h3>
                             <div class="d-flex">
                                 <div class="pricing">
                                     <p class="price"><span class="price-sale"> {{$item['price'] }}</span></p>
                                 </div>
                             </div>

                             <div class="bottom-area d-flex px-3">
                                 <div class="m-auto d-flex">
                                     <a href="/details/{{$item->id}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                         <span><i class="ion-ios-search"></i></span>
                                     </a>
                                     <a href="/checkout/{{$item->id}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                         <span><i class="ion-ios-basket"></i></span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                    @php $iteration++ @endphp
                @endforeach
         </div>
     </div>
 </section>

 <hr>

@endsection