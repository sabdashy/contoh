@extends('mainDashboard')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('template') }}/assets/dashboard/images/bg_1.jpg');">
     <div class="container">
         <div class="row no-gutters slider-text align-items-center justify-content-center">
             <div class="col-md-9 ftco-animate text-center">
                 <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Checkout</span></p>
                 <h1 class="mb-0 bread">Checkout</h1>
             </div>
         </div>
     </div>
 </div>

 <section class="ftco-section">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-8 ftco-animate">
                 <form method="GET" action="/confirm/{{$menus->id}}" class="billing-form">
                    @csrf 
                    <h3 class="mb-4 billing-heading">Pemesanan</h3>
                     <div class="row align-items-end">
                         <div class="col-md-12">
                             <div class="form-group">
                                 <label for="name">Nama Menu</label>
                                 <input type="text" name="name" class="form-control" placeholder="" value="{{$menus['name']}}" readonly>
                             </div>
                         </div>
                         <div class="w-100"></div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="quantity">Quantity</label>
                                 <input type="number" name="quantity" class="form-control" placeholder="" value="1">
                             </div>

                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="transaction_time">Tanggal</label>
                                 <input type="date" name="transaction_time" class="form-control" placeholder="0" value="{{ date('Y-m-d') }}" readonly>
                             </div>
                         </div>
                         <div class="w-100"></div>
                         <div class="col-md-12">
                             <div class="form-group">
                                 <label for="price">Harga per 100g</label>
                                 <input type="text" id="price" name="price" class="form-control" placeholder="" value="{{$menus['price']}}" readonly>
                             </div>
                         </div>
                         <div class="w-100"></div>
                         <div class="col-md-12">
                             <div class="form-group">
                                 <label for="users_id">Nama Pemesan</label>
                                 <input type="text" id="users_id" name="users_id" class="form-control" placeholder="" value="{{$menus->users->name}}">
                             </div>
                         </div>
                         <div class="w-100"></div>
                         {{-- <div class="col-md-12">
                             <div class="form-group">
                                 <label for="address">Alamat Pemesan</label>
                                 <input type="text" id="address" name="address" class="form-control" placeholder="" value="{{$users['address']}}">
                             </div>
                         </div> --}}
                         <div class="w-100"></div>
                     </div>
                     <p><input type="submit" name="proses" value="Simpan" class="btn btn-primary py-3 px-4"></a></p>
                 </form><!-- END -->
             </div>
         </div>
     </div>
 </section> <!-- .section -->

 @endsection