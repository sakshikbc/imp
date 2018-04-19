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
  <link rel="stylesheet" type="text/css" href="{{ asset('css/myown.css') }}">


</head>
<body>
    <div class="container container-fluid header">
      <div class="row">
        <div class="col-md-3">
            <a class="navbar-brand" href="{{ url('/') }}">
                Ederno
                </a></div>
        <div class="col-md-6 center"> 
         <form class="navbar-search pull-left">
          <input type="text" class="search-query" placeholder="Search">
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

@endif

@yield('content')
</body>

<!--Footer-->
<br>
<br>
</div>
<footer class="page-footer font-small unique-color-dark pt-0">

    <div style="background-color: #6351ce;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0">
                        <i class="fa fa-facebook white-text mr-lg-4"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic">
                        <i class="fa fa-twitter white-text mr-lg-4"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-lg-4"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-lg-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-instagram white-text mr-lg-4"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Company name</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Products</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">MDBootstrap</a>
                </p>
                <p>
                    <a href="#!">MDWordPress</a>
                </p>
                <p>
                    <a href="#!">BrandFlow</a>
                </p>
                <p>
                    <a href="#!">Bootstrap Angular</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Useful links</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">Your Account</a>
                </p>
                <p>
                    <a href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a href="#!">Help</a>
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contact</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p>
                                <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                            </div>
                            <!--/.Fourth column-->

                        </div>
                    </div>
                    <!--/.Footer Links-->

                    <!-- Copyright-->
                    <div class="footer-copyright py-3 text-center">
                        © 2018 Copyright:
                        <a href="https://mdbootstrap.com/material-design-for-bootstrap/">
                            <strong> MDBootstrap.com</strong>
                        </a>
                    </div>
                    <!--/.Copyright -->

                </footer>
                <!--/.Footer-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	