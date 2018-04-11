<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ederno</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
body{
  /*color: #ff5600;*/
}
.header
{
  padding: 2em;
}
.center
{
  text-align: center;
}
.vl {
  border-right: solid 1px;
  padding-left: 10px;
}
.space{
  padding: 10px;
}
.product_image{
  width: 100%;
/*  --size:5px;
  margin-right: var(--size);
  margin-left: var(--size);
  */
}
.product-box {
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 10px;
}
.pop-products{
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 10px;
  margin-bottom: 2px;
}
.side-bar{
  width: 100%;
  margin: auto , 0;
}
</style>
<body>
  <div class="container container-fluid header">
    <div class="row">
      <div class="col-md-3">Ederno</div>
      <div class="col-md-6 center"> 
        <input type="text" name="search" placeholder="Search Products">
        <div class="glyphicon glyphicon-search"></div>
      </div>
      <div class="col-md-3 center">
        <span class="glyphicon glyphicon-shopping-cart space" title="Cart"></span>
        <span class="glyphicon glyphicon-heart space" title="WishList"></span>
        <span class="glyphicon glyphicon-user space" title="Admin"></span>
        
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
      <li class="active "><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="col-md-2 vl">
        <div class="side-bar"><ul>Categories
          <div class="row">

            Bags<br>
            Clothes<br>
            Shoes<br>
          </div>
        </ul>
        <hr>
        <ul>Popular Products
          <div class="row">
            <div class="pop-products">
              <img src={{ asset('product_images/4.jpg')}} class="pop-products">
              <span style="text-align:center;">&#8377; 0.00</span><br>
            </div>
            <div class="pop-products">
              <img src={{ asset('product_images/7.jpg')}} class="pop-products">
              &#8377; 0.00<br>
            </div>
            <div class="pop-products">
              <img src={{ asset('product_images/1.jpg')}} class="pop-products">
              &#8377; 0.00<br>
            </div>
          </div>
        </ul>
      </div>
    </div>
    <div class="col-md-10 center ">All Products<br>
      <br>
      <!-- first row -->
      <div class="row center">
        <div class="col-sm-4">
          <div class="product-box">
            <img src={{ asset('product_images/1.jpg')}} class="product_image">
            &#8377; 0.00<br>
            <button title="Add to Cart">Add to Cart</button>

          </div>

        </div>
        <div class="col-sm-4">
          <div class="product-box">
            <img src={{ asset('product_images/4.jpg')}} class="product_image">
            &#8377; 0.00<br>
            <button title="Add to Cart">Add to Cart</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="product-box">
            <img src={{ asset('product_images/3.jpg')}} class="product_image">
            &#8377; 0.00<br>
            <button title="Add to Cart">Add to Cart</button>
          </div>
        </div>

      </div>

      <!-- second row -->
      <br>
      <div class="row center">
        <div class="col-sm-4">
          <div class="product-box">
            <img src={{ asset('product_images/3.jpg')}} class="product_image">
            &#8377; 0.00<br>
            <button title="Add to Cart">Add to Cart</button>

          </div>

        </div>
        <div class="col-sm-4">
          <div class="product-box">
            <img src={{ asset('product_images/1.jpg')}} class="product_image">
            &#8377; 0.00<br>
            <button title="Add to Cart">Add to Cart</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="product-box">
            <img src={{ asset('product_images/4.jpg')}} class="product_image">
            &#8377; 0.00<br>
            <button title="Add to Cart">Add to Cart</button>
          </div>
        </div>

      </div>

      <!-- third row -->
      <br>
      <div class="row center">
        <div class="col-sm-4">
          <div class="product-box">
            <img src={{ asset('product_images/4.jpg')}} class="product_image">
            &#8377; 0.00<br>
            <button title="Add to Cart">Add to Cart</button>

          </div>

        </div>
        <div class="col-sm-4">
          <div class="product-box">
            <img src={{ asset('product_images/3.jpg')}} class="product_image">
            &#8377; 0.00<br>
            <button title="Add to Cart">Add to Cart</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="product-box">
            <img src={{ asset('product_images/1.jpg')}} class="product_image">
            &#8377; 0.00<br>
            <button title="Add to Cart">Add to Cart</button>
          </div>
        </div>

      </div>
    </div>
<!--       <div class="col-md-1 center">Categories
        <div class="row">
          <li>Bags</li>
          <li>Clothes</li>
          <li>Shoes</li>
        </div>
      </div> -->
    </div>
  </div>

</body>
</html>
