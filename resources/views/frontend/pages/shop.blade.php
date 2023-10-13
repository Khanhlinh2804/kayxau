@extends('frontend.index')
@section('title','Shop')
@section('content')
<div class="shop-img">
    <img src="{{url('')}}/assets/imgs/bn-shop.png" alt="">
    <p>Shop</p>
</div>
<div class="container">
    {{-- ------- search -------- --}}
    <div class="row pt-5">
        <div class="col-lg-8">
            <div class="shop-select">
                <select>
                    <option value="1">Americano</option>
                    <option value="2">Latte</option>
                    <option value="3">Green Tea</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4">
            <form>
                <div class="search">
                    <label class="d-flex">
                        <input type="text" class="search" name="key" placeholder="Search here">
                        <div>
                            <button type="submit" style="" class="btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </label>
                </div>
            </form>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-lg-3">
            <div>
                <h3>Classify</h3>
                    <ul class="shop-ul-li">
                        <li>
                            <a href="">
                                All
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Product
                            </a>
                        </li>
                        
                    </ul>
            </div>
            <div>
                <h3>Price</h3>
            </div>
            <div class="shop-follow">
                <h3>Follow</h3>
                <a href="https://www.facebook.com/klyngg/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/k.lyyngg/">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
            <div >
                <h3>Blog</h3>
                <div class="d-flex">
                    <div class="col-lg-4">
                        <img src="{{url('')}}/assets/imgs/blog-1.png" alt="" style="width: 100%;">
                    </div>
                    <div class="col-lg-8 shop-blog">
                        <h6>name</h6>
                        <p>Date/ Author</p>
                        <a href="">GET</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="col-lg-4">
                <div class="btn" style="">
                    <a href="">
                        <img src="https://picsum.photos/id/287/250/300"
                            class="card-img-top img-product" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="" class="">
                            <p class=" "> name</p>
                        </a>
                        <h5 class="price"> 100 $</h5>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.layout.shipment');
    </div>
</div>
@endsection