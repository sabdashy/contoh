@extends('mainDashboard')
@section('content')

<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0; $subTotal = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" class="card-img-top"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>

                    <td data-th="Price">Rp{{ $details['price'] }}</td>
                   
                    {{-- <td data-th="Quantity">{{ $details['quantity'] }}</td> --}}
                    <td> 
                        <div class="input-group col-md-6 d-flex mb-3">
                            <span class="input-group-btn mr-2">
                                <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                            <i class="ion-ios-remove"></i>
                                </button>
                                </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="{{ $details['quantity'] }}" min="1" max="100">
                            <span class="input-group-btn ml-2">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                <i class="ion-ios-add"></i>
                            </button>
                            </span>
                        </div>
                    </td>
                    <td data-th="Subtotal" class="text-center">
                        Rp {{ $subTotal = $details['price'] * $details['quantity'] }}
                    </td>
                    @php $total += $subTotal @endphp
                    
                    <td class="actions">
                        <a class="btn btn-outline-warning btn-sm edit-cart-info">Edit</a>
                        <a class="btn btn-outline-danger btn-sm delete-product">Delete</a>
                    </td>
                </tr>
                @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td>
                {{ $total }}
            </td>
            <td colspan="5" class="text-right">
                <a href="/menu" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <a href="{{ route('pesanan') }}" class="btn btn-danger"><i class="fa fa-angle-left"></i> Checkout</a>
            </td>
        </tr>
    </tfoot>
</table>
@endsection
  
@section('scripts')
@endsection