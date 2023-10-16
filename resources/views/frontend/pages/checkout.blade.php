@extends('frontend.index')
@section('title','Checkout')
@section('content')
<div class="shop-img">
    <img src="{{url('')}}/assets/imgs/10.png" alt="">
    <p>Checkout</p>
</div>
<div class="container">
    <div class="row pt-5">
        <div class="col-lg-1"></div>
        <div class="col-lg-11">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><span class="text-success">Cart</span></li>
                    <li class="breadcrumb-item"><span class="text-success">Checkout</span></li>
                    <li class="breadcrumb-item"><span class="text-body-tertiary">Comfirm</span></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <h2 class="text-capitalize">Detail Order</h2>
        </div>
        <div class="col-lg-4">
            <h2 class="text-capitalize">Order</h2>
        </div>
    </div>
    <form action="" method="post">
        <div class="row pb-5">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group contact">
                            <input type="text" name="firstname" class="form-control" placeholder="FirstName">
                            @error('firstname')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group contact">
                            <input type="text" name="lastname" class="form-control" placeholder="LasttName">
                            @error('lastname')
                            <p class="text-danger">{{ $message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="contact">
                    <select class="form-select border-top-0 border-start-0 border-end-0 "
                        aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                    </select>
                </div>
                <div class="contact">
                    <select class="form-select border-top-0 border-start-0 border-end-0"
                        aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                    </select>
                </div>
                <div class="form-group contact">
                    <input type="text" name="address" class="form-control" placeholder="Street">
                    @error('address')
                    <p class="text-danger">{{ $message}}</p>
                    @enderror
                </div>
                <div class="form-group contact pb-5">
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                    @error('phone')
                    <p class="text-danger">{{ $message}}</p>
                    @enderror
                </div>
                <div class="pt-5">
                    <h4 class="text-capitalize">
                        Note
                    </h4>
                </div>
                <div class="form-group">
                    <div class="mb-3 pt-3 contacts">
                        <textarea class="form-control" rows="5" name="note" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                </div>
            </div>
            <div class="col-lg-1 vr">

            </div>
            <div class="col-lg-4 ">
                <div class="pt-5">
                    <h4>Shipping information</h4>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="" name="shipping">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Ship COD
                                    </label>
                                </div>
                            </td>
                            <td style="color: rgb(229, 4, 4);">5 $</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="" name="shipping">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Ship Now (in Ha Noi)
                                    </label>
                                </div>
                            </td>
                            <td style="color: rgb(229, 4, 4);">10$ </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pt-5">
                    <h4>Shipping information</h4>
                </div>
                <div class="form-check pt-3">
                    <input class="form-check-input" type="radio" value="" name="shipping">
                    <label class="form-check-label">
                        Payment on delivery
                    </label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" value="" name="shipping">
                    <label class="form-check-label" for="flexCheckChecked">
                        Vn Pay
                    </label>
                </div>
                </table>
                <div class="pt-5">
                    <h4>Total</h4>
                </div>
                <table class="table">
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
                            <th>Total</th>
                            <td style="color: rgb(229, 4, 4);">Otto $</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-lg-0">
                        <button type="submit" class="contact-submit">Payment</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @include('frontend.layout.shipment')
</div>
</div>
@endsection