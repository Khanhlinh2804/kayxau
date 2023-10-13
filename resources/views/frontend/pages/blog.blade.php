@extends('frontend.index')
@section('title','Blog')
@section('content')
<div class="shop-img">
    <img src="{{url('')}}/assets/imgs/7.png" alt="">
    <p>Blog</p>
</div>
<div class="container">
    <div class="row pt-5">
        <div class="col-lg-3">
            <div class="blog-library">
                <h3>Library</h3>
                <p>Hihi</p>
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
        </div>
        <div class="col-lg-3 blog-col4">
            <div class="btn ">
                <img src="{{url('')}}/assets/imgs/8.png" alt="" width="100%" height="300px">
                <div>
                    <p>name</p>
                    <div class="blog-text-img">
                        <p>date</p>
                        <a href="">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div>
                <div class="d-flex">
                    <div class="blog-select">
                        <select>
                            <option value="1">Americano</option>
                            <option value="2">Latte</option>
                            <option value="3">Green Tea</option>
                        </select>
                    </div>
                <form>
                    <div class="blog-search">
                        <label class="d-flex">
                            <input type="text" class="search" name="key" placeholder="Search here">
                            <div>
                                <button type="submit" style="height: 45px;" class="btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </label>
                    </div>
                </form>
            </div>
            <div>
                <div class="blog-size-big">
                    <img src="{{url('')}}/assets/imgs/8.png" alt="" width="500px" height="300px">
                    <div>
                        <p>name</p>
                        <div class="blog-text-img">
                            <p>date</p>
                            <a href="">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            
        </div>
    <div class="row">
        <div class="col-lg-3">
            
        </div>
    </div>
</div>
@endsection