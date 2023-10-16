<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container ">
    <a class="navbar-brand" href="{{route('home')}}">
    <img src="{{url('')}}/assets/imgs/logo.jpg" alt="" srcset="">    
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="{{route('home')}}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SEVICE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('shop')}}">SHOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('blog')}}">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">CONTACT</a>
        </li>
      </ul>
      
        <div class="box">
            <form name="search">
                <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();">
            </form>
            <i class="fas fa-search"></i>
        </div>
        <div class="pl-5">
          <div class="vr"></div>
        </div>
        <a href="{{route('login-signup')}}" class="pl-5">
            <i class="fas fa-user icon "></i>
        </a>
        
        <div class="pl-5 position-relative">
            <a href="{{route('cart')}}" class="">
              <i class="fas fa-shopping-bag icon"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                99+
              </span>
          </a>
        </div>

      </div>


    </div>
  </div>
</nav>