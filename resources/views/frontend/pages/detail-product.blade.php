@extends('frontend.index')
@section('title','Blog')
@section('content')
<div class="container pt-5">
    <div class="row pt-5">
        <div class="col-lg-5 ">
            <img src="{{url('')}}/assets/imgs/6.png" alt="" width="100%" class="ml-3" height="800px">
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6">
            <h1>Name</h1>
            <del>hihih</del>
            <p class="">Price sale</p>
            
            <div class="row ">
                <div class="col-lg-2">
                    <p>
                       Category
                    </p>
                </div>
                <div class="col-lg-9">
                    <p>hihi</p>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-2">
                    <p>
                       Color
                    </p>
                </div>
                <div class="col-lg-9">
                    <p>hihi</p>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-2">
                    <p>
                       Available
                    </p>
                </div>
                <div class="col-lg-9">
                    <p>hihi</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <h5>Quantity:</h5>
                    
                </div>
                <div class="col-lg-8">
                    <div class="detail-quantity d-flex">
                        <button id="decrease" onclick="handleMinus()">
                            <i class="fas fa-minus" style="color: #ffffff;"></i>
                        </button>
                        <input type="text" id="quantity" value="1">
                        <button id="increase" onclick="handlePlus()">
                            <i class="fas fa-plus" style="color: #ffffff;"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row pt-5 pb-4">
                <div class="col-lg-4">
                    <button type="submit" class="contact-submit" >Add to card</button>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <button type="submit" class="detail-product-checkout" >Buy now</button>
                </div>
            </div>
            <hr>
            <div class="row linh">
                <h4>Take care of plant</h4>
                <img src="{{url('')}}/assets/imgs/Group 2781.png" alt="" >
            </div>
            <div class="row">
                <h4>Notification</h4>
                <p>hihihi</p>
            </div>

        </div>
    </div>
    <div class="row pt-4">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <h3>Summary detail: </h3>
            <p>detail</p>
        </div>
    </div>
    <div class="row pt-4 pb-5">
        <div class="col-lg-12">
            <h2 class="text-uppercase">Related Products</h2>
            <hr>
            <div class="row">
                <div class="col-lg-3">
                    <div class="btn" style="">
                    <a href="">
                        <img src="https://picsum.photos/id/287/250/300"
                            class="card-img-top img-product object-fit-sm-contain border rounded" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="" class="">
                            <p class="fs-5"> name</p>
                        </a>
                        <h6 class="text-start"> 100 $</h6>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.layout.shipment')
</div>
@endsection