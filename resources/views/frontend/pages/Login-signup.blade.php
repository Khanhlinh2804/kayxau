@extends('frontend.index')
@section('title','Home')
@section('content')
<div class="shop-img">
    <img src="{{url('')}}/assets/imgs/9.png" alt="">
    <p>Login / Register</p>
</div>
<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
            <form action="" method="post">
                <div>
                    <h2 class="text-center">Login</h2>
                    <p class="text-center">
                        Welcome back
                    </p>
                </div>
                <div class="form-group contact" >
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group contact" >
                    <input type="password" name="password" class="form-control" placeholder="password">
                    @error('phone')
                    <p class="text-danger">{{ $messages }}</p>
                    @enderror
                </div>
                <div class="pt-5">
                    <button type="submit" class="contact-submit">Login</button>
                </div>
            </form>
            <div class="pt-3"></div>
            <div class="row pt-4">
                <div class="col-lg-5">
                    <hr>
                </div>
                <div class="col-lg-2">
                    <p class="text-center">OR</p>
                </div>
                <div class="col-lg-5">
                    <hr>
                </div>

            </div>
            <div class="pt-3"></div>
            <button type="submit" class="login-button">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 ">
                        <div class="d-flex">
                            <div class="mt-2">
                                <i class="fab fa-google" ></i>
                            </div>
                            <p class="p-2">Continue with Google</p>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </button>
            <div class="pt-3"></div>
            <button type="submit" class="login-button">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-7 ">
                        <div class="d-flex">
                            <div class="mt-2">
                                <i class="fab fa-facebook"></i>
                            </div>
                            <p class="p-2">Continue with Facebook</p>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </button>
        </div>
        <div class="col-lg-1">
        </div>
        <div class="vr"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
            <div>
                <form action="" method="post">
                    <h2 class="text-center">Login</h2>
                    <p class="text-center">
                        Create an account for easier shopping, faster payments, and effortless order tracking
                    </p>
                    <div class="form-group contact" >
                        <input type="text" name="name" class="form-control" placeholder="Name">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group contact" >
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group contact" >
                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                        @error('phone')
                        <p class="text-danger">{{ $messages }}</p>
                        @enderror
                    </div>
                    <div class="form-group contact" >
                        <input type="password" name="password" class="form-control" placeholder="password">
                        @error('phone')
                        <p class="text-danger">{{ $messages }}</p>
                        @enderror
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="contact-submit">Register</button>
                    </div>
                </form>
                <div class="pt-4">
                    <p class="text-center">By clicking 'Sign up,' you agree to our Terms of Service and Privacy Policy</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection