<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ederno</title>
  <meta name="language" content="English">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta name="google-site-verification" content="XVlGAgkGo6Pk-wr-_-AP57VPqTW_3eHzHmuipbkXrIU" />
  <!-- <link rel="icon" href="bigly-fav.png" sizes="32x32" /> -->
  <?php if(isset($meta) && isset($meta['title'])): ?>
    <title><?php echo $meta['title']; ?></title>
<?php else: ?>
    <title>BigLy</title>
<?php endif ?>    
<?php if(isset($meta) && isset($meta['description'])): ?>
    <meta name="Description" content="<?php echo $meta['description']; ?>">
<?php endif ?>
<?php if(isset($meta) && isset($meta['keywords'])): ?>
    <meta name="Keywords" content="<?php echo $meta['keywords']; ?>">
<?php endif ?>
<?php if(isset($meta) && isset($meta['title'])): ?>
    <meta property="og:title" content="<?php echo $meta['title']; ?>">
<?php endif ?>
<?php if(isset($meta) && isset($meta['description'])): ?>
    <meta  property="og:description" content="<?php echo $meta['description']; ?>">
<?php endif ?>
<?php if(isset($meta) && isset($meta['description'])): ?>
    <meta property="og:url" content="<?php echo Request::url(); ?>">
<?php endif ?>
<meta property="og:image" content="{{ asset('images/biglyhome-page-screen.png') }}">
@yield('metas')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}') }}"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->  
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!-- =============================================================================================== -->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->  
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/myown.css') }}"> -->


</head>
<body class="animsition">

    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->       
                    <a href="#" class="logo">
                      Ederno
                        <!-- <img src="images/icons/logo-01.png" alt="IMG-LOGO"> -->
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Homepage 1</a></li>
                                    <li><a href="home-02.html">Homepage 2</a></li>
                                    <li><a href="home-03.html">Homepage 3</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="product.html">Shop</a>
                            </li>

                            <li class="label1" data-label1="hot">
                                <a href="shoping-cart.html">Features</a>
                            </li>

                            <li>
                                <a href="blog.html">Blog</a>
                            </li>

                            <li>
                                <a href="about.html">About</a>
                            </li>

                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>  

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>

                        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>
                    <!-- Button show menu -->
                    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </div>
                </div>


                <!-- Menu Mobile -->
                <div class="menu-mobile">
                    <ul class="topbar-mobile">
                        <li>
                            <div class="left-top-bar">
                                Free shipping for standard order over $100
                            </div>
                        </li>

                        <li>
                            <div class="right-top-bar flex-w h-full">
                                <a href="#" class="flex-c-m p-lr-10 trans-04">
                                    Help & FAQs
                                </a>

                                <a href="#" class="flex-c-m p-lr-10 trans-04">
                                    My Account
                                </a>

                                <a href="#" class="flex-c-m p-lr-10 trans-04">
                                    EN
                                </a>

                                <a href="#" class="flex-c-m p-lr-10 trans-04">
                                    USD
                                </a>
                            </div>
                        </li>
                    </ul>

                    <ul class="main-menu-m">
                        <li>
                            <a href="index.html">Home</a>
                            <ul class="sub-menu-m">
                                <li><a href="index.html">Homepage 1</a></li>
                                <li><a href="home-02.html">Homepage 2</a></li>
                                <li><a href="home-03.html">Homepage 3</a></li>
                            </ul>
                            <span class="arrow-main-menu-m">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </span>
                        </li>

                        <li>
                            <a href="product.html">Shop</a>
                        </li>

                        <li>
                            <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
                        </li>

                        <li>
                            <a href="blog.html">Blog</a>
                        </li>

                        <li>
                            <a href="about.html">About</a>
                        </li>

                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Modal Search -->
                <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
                    <div class="container-search-header">
                        <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                            <img src="images/icons/icon-close2.png" alt="CLOSE">
                        </button>

                        <form class="wrap-search-header flex-w p-l-15">
                            <button class="flex-c-m trans-04">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                            <input class="plh3" type="text" name="search" placeholder="Search...">
                        </form>
                    </div>
                </div>
            </header>

            <!-- Cart -->
            <div class="wrap-header-cart js-panel-cart">
                <div class="s-full js-hide-cart"></div>

                <div class="header-cart flex-col-l p-l-65 p-r-25">
                    <div class="header-cart-title flex-w flex-sb-m p-b-8">
                        <span class="mtext-103 cl2">
                            Your Cart
                        </span>

                        <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                            <i class="zmdi zmdi-close"></i>
                        </div>
                    </div>
                    
                    <div class="header-cart-content flex-w js-pscroll">
                        <ul class="header-cart-wrapitem w-full">
                            <li class="header-cart-item flex-w flex-t m-b-12">
                                <div class="header-cart-item-img">
                                    <img src="images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt p-t-8">
                                    <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                        White Shirt Pleat
                                    </a>

                                    <span class="header-cart-item-info">
                                        1 x $19.00
                                    </span>
                                </div>
                            </li>

                            <li class="header-cart-item flex-w flex-t m-b-12">
                                <div class="header-cart-item-img">
                                    <img src="images/item-cart-02.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt p-t-8">
                                    <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                        Converse All Star
                                    </a>

                                    <span class="header-cart-item-info">
                                        1 x $39.00
                                    </span>
                                </div>
                            </li>

                            <li class="header-cart-item flex-w flex-t m-b-12">
                                <div class="header-cart-item-img">
                                    <img src="images/item-cart-03.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt p-t-8">
                                    <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                        Nixon Porter Leather
                                    </a>

                                    <span class="header-cart-item-info">
                                        1 x $17.00
                                    </span>
                                </div>
                            </li>
                        </ul>
                        
                        <div class="w-full">
                            <div class="header-cart-total w-full p-tb-40">
                                Total: $75.00
                            </div>

                            <div class="header-cart-buttons flex-w w-full">
                                <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                                    View Cart
                                </a>

                                <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
</header>

<!--     <div class="container container-fluid header">
      <div class="row">
        <div class="col-md-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                Ederno
                </a></div>
        <div class="col-md-6 center"> 
         <form class="navbar-search pull-left" action="{{ route('search') }}" method="get">
          <input type="text" name="search" class="search-query" placeholder="Search">
      </form>
      <div class="glyphicon glyphicon-search"></div>
  </div>
  <div class="col-md-3 center">
      <span class="glyphicon glyphicon-heart space" title="WishList"></span>
      <a href="/login"><span class="glyphicon glyphicon-user space" title="User">@if( Auth::user()) Hi' {{ Auth::user()->name }} 
        <a href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    <span class="glyphicon glyphicon-log-out"></span>
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
      @endif</a>
    
  </div>
</div>
</div>
@if( Auth::user()  && Auth::user()->type == "admin")
<nav class="navbar navbar-default pull-right">
  <ul class="nav navbar-nav">
    <li class="active "><a href="#">Home</a></li>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
     Products <span class="caret"></span>
 </a>
 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('product.create')}}">
    Add Product
</a><br>
<a class="dropdown-item" href="{{ route('product.showAll')}}">
    Show all Products
</a>
</div>
</li>
<li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
     Categories <span class="caret"></span>
 </a>
 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('category.create')}}">
    Add Category
</a><br>
<a class="dropdown-item" href="{{ route('category.showAll')}}">
    Show all Categories
</a>
</div>
</li>
</ul>
</nav>

@endif -->

@yield('content')

<!--/.Footer-->
</div>
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 p-b-50">
          <h4 class="stext-301 cl0 p-b-30">
            Categories
        </h4>

        <ul>
            <li class="p-b-10">
              <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                Women
            </a>
        </li>

        <li class="p-b-10">
          <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
            Men
        </a>
    </li>

    <li class="p-b-10">
      <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
        Shoes
    </a>
</li>

<li class="p-b-10">
  <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    Watches
</a>
</li>
</ul>
</div>

<div class="col-sm-6 col-lg-3 p-b-50">
  <h4 class="stext-301 cl0 p-b-30">
    Help
</h4>

<ul>
    <li class="p-b-10">
      <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
        Track Order
    </a>
</li>

<li class="p-b-10">
  <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    Returns 
</a>
</li>

<li class="p-b-10">
  <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    Shipping
</a>
</li>

<li class="p-b-10">
  <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
    FAQs
</a>
</li>
</ul>
</div>

<div class="col-sm-6 col-lg-3 p-b-50">
  <h4 class="stext-301 cl0 p-b-30">
    GET IN TOUCH
</h4>

<p class="stext-107 cl7 size-201">
    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
</p>

<div class="p-t-27">
    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
      <i class="fa fa-facebook"></i>
  </a>

  <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
      <i class="fa fa-instagram"></i>
  </a>

  <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
      <i class="fa fa-pinterest-p"></i>
  </a>
</div>
</div>

<div class="col-sm-6 col-lg-3 p-b-50">
  <h4 class="stext-301 cl0 p-b-30">
    Newsletter
</h4>

<form>
    <div class="wrap-input1 w-full p-b-4">
      <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
      <div class="focus-input1 trans-04"></div>
  </div>

  <div class="p-t-18">
      <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
        Subscribe
    </button>
</div>
</form>
</div>
</div>

</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function(){
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
    });
  })
</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/slick/slick.min.js"></script>
<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
      $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
              enabled:true
          },
          mainClass: 'mfp-fade'
      });
  });
</script>
<!--===============================================================================================-->
<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/sweetalert/sweetalert.min.js"></script>
<script>
    $('.js-addwish-b2').on('click', function(e){
      e.preventDefault();
  });

    $('.js-addwish-b2').each(function(){
      var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-b2');
        $(this).off('click');
    });
  });

    $('.js-addwish-detail').each(function(){
      var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

      $(this).on('click', function(){
        swal(nameProduct, "is added to wishlist !", "success");

        $(this).addClass('js-addedwish-detail');
        $(this).off('click');
    });
  });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function(){
      var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
      $(this).on('click', function(){
        swal(nameProduct, "is added to cart !", "success");
    });
  });
    
</script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
      $(this).css('position','relative');
      $(this).css('overflow','hidden');
      var ps = new PerfectScrollbar(this, {
        wheelSpeed: 1,
        scrollingThreshold: 1000,
        wheelPropagation: false,
    });

      $(window).on('resize', function(){
        ps.update();
    })
  });
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>