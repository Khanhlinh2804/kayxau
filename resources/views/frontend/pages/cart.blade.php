@extends('frontend.index')
@section('title','Cart')
@section('content')
<div class="shop-img">
    <img src="{{url('')}}/assets/imgs/10.png" alt="">
    <p>Cart</p>
</div>
<div class="container">
    <div class="row pt-5">
        <div class="col-lg-1"></div>
        <div class="col-lg-11">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><span class="text-success">Cart</span></li>
                    <li class="breadcrumb-item"><span class="text-body-tertiary">Checkout</span></li>
                    <li class="breadcrumb-item"><span class="text-body-tertiary">Comfirm</span></li>
                </ol>
            </nav>
            <p>
                There are 2 items in the cart 
            </p>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Product</th>
                        <th scope="col"></th>
                        <th scope="col">Price</th>
                        <th scope="col" hidden>Quantity available</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">h</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>
                            <button type="submit" class="cart-remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="row pb-5">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
            <h3>Total</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Total Price</td>
                        <td style="color: rgb(229, 4, 4);">Otto $</td>
                    </tr>
                    <tr>
                        <td>Total Quantity</td>
                        <td style="color: rgb(229, 4, 4);">Otto </td>
                    </tr>
                    <tr>
                        <td>Transportation costs</td>
                        <td style="color: rgb(229, 4, 4);">Otto $</td>
                    </tr>
                    <tr>
                        <th >Total</th>
                        <td style="color: rgb(229, 4, 4);">Otto $</td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-lg-6">
                    <div class="pt-4 cart-shop">
                        <a href="{{route('shop')}}">
                            <i class="fas fa-arrow-left"></i><span class="p-3">Back Shop</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 pt-4">
                    <div class=" pt-1 cart-checkout text-center ">
                        <a href="{{route('cart.create')}}" class=" text-center pb-2"> Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.layout.shipment')
</div>

@endsection