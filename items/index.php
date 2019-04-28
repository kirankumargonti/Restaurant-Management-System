<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta cha$et="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="css/all.css">
  <title>Cart Project</title>
</head>

<body>
  <!-- header -->
  <header>
    <!-- navbar  -->
    <!-- 
https://www.iconfinder.com/icons/2427887/dessert_donut_doughnut_fat_sweets_icon
Creative Commons (Attribution 3.0 Unported);
https://www.iconfinder.com/korawan_m
     -->
    <!-----------------------------nav bar--------------------------------------------->
    <nav class="navbar navbar-expand-md sticky-top">

      <a class="navbar-brand" href="../index.php">Spicy<strong class="strong">Scoff</strong>
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-ba$"></i>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home</a> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Reservation.php">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../about us.php">About us</a>
          </li>
          <!--==========cart icon==========-->
          <li class="nav-item nav-info-items d-lg-flex ">
            <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-2">
              <span class="cart-info__icon mr-lg-1"><i class="fas fa-shopping-cart"></i></span>
              <p class="mb-0 text-capitalize"><span id="item-count">0 </span> items - 
                <i class="fas fa-rupee-sign"></i><span class="item-total">0</span></p>
            </div>
          </li>
          <!--==========cart icons==========-->


          <li class="nav-item">
            <a class="nav-link login-button" href="../login.php">Login</a>
          </li>
        </ul>
      </div>
    </nav>


    <!--====================================================================================-->

    <div class="container-fluid">
      <div class="row max-height justify-content-center align-items-center">
        <div id="cart" class="cart">
          <div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
            <h5>Total</h5>
            <h5><i class="fas fa-rupee-sign"></i><strong id="cart-total" class="font-weight-bold">0</strong> </h5>
          </div>
          <!--end cart total -->
          <!-- cart buttons -->
          <div class="cart-buttons-container mt-3 d-flex justify-content-between">
            <a id="clear-cart" class="btn btn-outline-secondary btn-black text-uppercase"
              onclick="removeAll()">Clear
              cart</a>
            <a href="../includes/checkout.inc.php" class="btn btn-outline-secondary btn-black text-uppercase" name="checkout-submit">Checkout</a>
          </div>
          <!--end of  cart buttons -->
          <!--  -->
        </div>
      </div>
    </div>
    <!--end of  banner  -->
  </header>
  <!-- header -->
  <!--===================== about us =======================================-->
  <!--------------------------------curosel effect-------------------------------->
 <!-- store -->
 <section id="store" class="store py-5">
   <div class="container">

     <div class="row">
       <div class="col-10 mx-auto col-sm-6 text-center">
         <h1 class="text-capitalize">Our <strong class="banner-title ">Brunching Menu</strong></h1>
       </div>
     </div>

     <!--filter buttons -->
  
   
     <div class="row">
       <div class=" col-lg-8 mx-auto d-flex justify-content-around my-2 sortBtn flex-wrap">
         
        
     <a href="#" class="btn btn-outline-secondary btn-menu text-uppercase filter-btn m-2"
           data-filter="starters">Starters</a>
      <a href="#" class="btn btn-outline-secondary btn-menu text-uppercase filter-btn m-2"
           data-filter="Lunch">Lunch</a>
        <a href="#" class="btn btn-outline-secondary btn-menu text-uppercase filter-btn m-2"
           data-filter="Beverages">Beverages</a>
         <a href="#" class="btn btn-outline-secondary btn-menu text-uppercase filter-btn m-2"
              data-filter="Coffee">Coffee</a>
       </div>
     </div>
     
     <!-- search box -->
<div class="row">
    <div class="col-10 mx-auto col-md-6">
         <form>
           <div class="input-group mb-3">
             <input type="text" class="form-control" placeholder='item....' id="search-item">
              <div class="input-group-prepend ">
                <span class="input-group-text search-box" id="search-icon"><i class="fas fa-search"></i></span>
              </div>
           </div>
        </form>
   </div>
</div>
<!--end of filter buttons -->

<div class="row" class="store-items" id="store-items item">
<!-- single item -->
   <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item  starters  " data-item="apollo fish">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/Apollo fish.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">Apollo fish</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">160</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="baby corn manchurian">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/baby corn manchurian.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">baby corn manchurian</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">65</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="chicken 65">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/Chicken_65.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">Chicken 65</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">105</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="chicken majestic">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/Chicken-Majestic.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">Chicken Majestic</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">40</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="chicken manchurian">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/chicken-manchurian.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">chicken manchurian</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">80</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="chilli fish">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/chilli fish.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">chilli fish</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">50</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="chilli garlic prawns">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/chilli-garlic-prawns.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">chilli garlic prawns</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">90</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="chilli paneer">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/chilli-paneer.jpeg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">chilli-paneer</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">50</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="chilly chicken">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/chilly chicken.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">chilly chicken</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">55</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
  
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="chinese chiken manchurian">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/Chinese chiken Manchurian.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">Chinese chiken Manchurian</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">95</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="crispy chicken">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/crispy chicken.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">crispy chicken</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">135</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
     <!-- single item -->
     <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters " data-item="crispy paneer">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/crispy paneer.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">crispy paneer</h5>
            <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">150</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
     <!-- single item -->
     <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="gobi manchurian">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/Gobi Manchurian.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">Gobi Manchurian</h5>
            <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">65</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->

     <!-- single item -->
     <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters " data-item="grilled chicken">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/grilled chicken.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">grilled chicken</h5>
            <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">155</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters " data-item="paneer65">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/Paneer65.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">Paneer65</h5>
            <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">195</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->

    <!-- single item -->
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="pepper chicken">
      <div class="card ">
        <div class="img-container">
          <img src="img/starters/pepper chicken.jpg" class="card-img-top store-img" alt="">
          <span class="store-item-icon">
            <i class="fas fa-shopping-cart"></i>
          </span>
        </div>
        <div class="card-body">
          <div class="card-text d-flex justify-content-between text-capitalize">
            <h5 id="store-item-name">pepper chicken</h5>
            <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">80</strong></h5>

          </div>
        </div>


      </div>
      <!-- end of card-->
    </div>
    <!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="tandoori chicken">
<div class="card ">
<div class="img-container">
  <img src="img/starters/Tandoori chicken.jpg" class="card-img-top store-img" alt="">
  <span class="store-item-icon">
    <i class="fas fa-shopping-cart"></i>
  </span>
</div>
<div class="card-body">
  <div class="card-text d-flex justify-content-between text-capitalize">
    <h5 id="store-item-name">Tandoori chicken</h5>
    <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">65</strong></h5>

  </div>
</div>


</div>
<!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item starters" data-item="veg manchurian">
<div class="card ">
<div class="img-container">
  <img src="img/starters/veg manchurian.jpg" class="card-img-top store-img" alt="">
  <span class="store-item-icon">
    <i class="fas fa-shopping-cart"></i>
  </span>
</div>
<div class="card-body">
  <div class="card-text d-flex justify-content-between text-capitalize">
    <h5 id="store-item-name">veg manchurian</h5>
    <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">55</strong></h5>

  </div>
</div>


</div>
<!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item  Coffee"
    data-item="mocchacino coffe">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/mocchacino coffe.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">Mocchacino coffe</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                class="font-weight-bold">60</strong></h5>
        </div>
      </div>
    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="Corvus espresso">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/Corvus-Espresso-Coffee-.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">Corvus espresso Coffee</h5>
          <h5 class="store-item-value"> <span><i class="fas fa-rupee-sign"></i><span><strong id="store-item-price"
                  class="font-weight-bold"> 85 </strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="latte macchiato">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/latte macchiato.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">latte macchiato</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">105</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="chamomile">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/chamomile.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">chamomile</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span></span> <strong id="store-item-price"
                  class="font-weight-bold">120</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="filter coffee">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/filter coffee.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">filter coffee</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">80</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="cafe latte">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/cafe latte.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">cafe latte</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">40</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="cafe latte and cake">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/cafe-latte-and-cake.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">cafe-latte-and-cake</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">90</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="caffe macchiato rome">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/caffe_macchiato_rome.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">caffe_macchiato_rome</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span><strong id="store-item-price"
                  class="font-weight-bold">100</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="cappuccino latte">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/cappuccino latte.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">cappuccino latte</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">135</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="cappuccino Coffee">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/Cappuccino-Coffee.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">Cappuccino Coffee</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">50</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="caramel macchiato casero">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/caramel_macchiato_casero.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">caramel_macchiato_casero</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">35</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item  Coffee" data-item="filter coffee1">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/filter coffee1.jpeg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">filter coffee1</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">35</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="espresso">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/espresso-coffee.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">espresso-coffee</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">40</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->
  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="espresso">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/espresso.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">espresso</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">65</strong></h5>

        </div>
      </div>


    </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->

  <!-- single item -->
  <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Coffee" data-item="Macchiato">
    <div class="card ">
      <div class="img-container">
        <img src="img/coffee/Macchiato.jpg" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>
      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">Macchiato</h5>
          <h5 class="store-item-value"><span><i class="fas fa-rupee-sign"></i><span> <strong id="store-item-price"
                  class="font-weight-bold">15</strong></h5>
        </div>
      </div>
   </div>
    <!-- end of card-->
  </div>
  <!--end of single store item-->


<!--beverages item starts -->

 <!-- single item -->
 <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages  " data-item="apple punch">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/apple-punch.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">apple-punch</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">160</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages " data-item="banana honey smootie">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/banana-honey smootie.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">banana-honey smootie</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">65</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="banana milkshake">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/Banana-Milkshake.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Banana-Milkshake</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">105</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="chocolate huzelnut milkshake">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/chocolate huzelnut milkshake.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">chocolate huzelnut milkshake</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">40</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="chocolate huzelnut milkshake">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/chocolate huzelnut milkshake.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">chocolate huzelnut milkshake</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">80</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages " data-item="chocolate Banana milkshake">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/CHOCOLATE-BANANA-MILKSHAKE.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">chocolate Banana milkshake</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">50</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="citronnade">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/citronnade.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">citronnade</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">90</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="fresh lime soda">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/fresh-lime-soda.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">fresh-lime-soda</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">50</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="golden apple punch">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/golden_apple_punch.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">golden_apple_punch</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">55</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="iced coffee">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/Iced coffee.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Iced coffee</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">150</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="lemanade">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/lemanade.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">lemanade</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">95</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="lemonade">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/lemonade.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">lemonade</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">135</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
 <!-- single item -->
 <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages " data-item="lemonade blueberry">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/Lemonade-Blueberry.png" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Lemonade-Blueberry</h5>
        <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">150</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
 <!-- single item -->
 <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="lime soda">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/Lime-Soda.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Lime-Soda</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">65</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->

 <!-- single item -->
 <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="melon kiwifruit smoothie">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/melon-kiwifruit-smoothie.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">melon-kiwifruit-smoothie</h5>
        <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">155</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="mint lemonade">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/mint lemonade.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">mint lemonade</h5>
        <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">195</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->

<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="orangeade">
  <div class="card ">
    <div class="img-container">
      <img src="img/beverages/orangeade.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">orangeade</h5>
        <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">80</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="strawberry banana milkshake">
<div class="card ">
<div class="img-container">
<img src="img/beverages/strawberry and banana milkshake.jpg" class="card-img-top store-img" alt="">
<span class="store-item-icon">
<i class="fas fa-shopping-cart"></i>
</span>
</div>
<div class="card-body">
<div class="card-text d-flex justify-content-between text-capitalize">
<h5 id="store-item-name">strawberry banana milkshake</h5>
<h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">65</strong></h5>

</div>
</div>


</div>
<!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="strawberry and Guava Smoothie">
<div class="card ">
<div class="img-container">
<img src="img/beverages/Strawberry-and-Guava-Smoothie.jpg" class="card-img-top store-img" alt="">
<span class="store-item-icon">
<i class="fas fa-shopping-cart"></i>
</span>
</div>
<div class="card-body">
<div class="card-text d-flex justify-content-between text-capitalize">
<h5 id="store-item-name">Strawberry and Guava Smoothie</h5>
<h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">55</strong></h5>

</div>
</div>


</div>
<!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="watermelon smoothie">
<div class="card ">
<div class="img-container">
<img src="img/beverages/watermelon-smoothie.jpg" class="card-img-top store-img" alt="">
<span class="store-item-icon">
<i class="fas fa-shopping-cart"></i>
</span>
</div>
<div class="card-body">
<div class="card-text d-flex justify-content-between text-capitalize">
<h5 id="store-item-name">watermelon-smoothie</h5>
<h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">75</strong></h5>

</div>
</div>


</div>
<!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Beverages" data-item="guava strawberry smootie">
<div class="card ">
<div class="img-container">
<img src="img/beverages/guava strawberry smootie.jpg" class="card-img-top store-img" alt="">
<span class="store-item-icon">
<i class="fas fa-shopping-cart"></i>
</span>
</div>
<div class="card-body">
<div class="card-text d-flex justify-content-between text-capitalize">
<h5 id="store-item-name">guava strawberry smootie</h5>
<h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">80</strong></h5>

</div>
</div>


</div>
<!-- end of card-->
</div>
<!--end of single store item-->


<!--lunch items start-->

 <!-- single item -->
 <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch " data-item="chicken dum biryani">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/Chicken-Dum-Biryani.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Chicken Dum Biryani</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">160</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3  store-item Lunch" data-item="chickenfried rice">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/chickenfried rice.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">chickenfried rice</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">65</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3  store-item Lunch" data-item="chicken-fried-rice">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/chicken-fried-rice.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">chicken-fried-rice</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">105</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3  store-item Lunch" data-item="curd rice">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/curd rice.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">curd rice</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">40</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="eggfried rice">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/eggfried rice.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">eggfried rice</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">80</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="egg fried rice">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/egg-fried-rice.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">egg-fried-rice</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">50</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="fish biryani">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/Fish-Biryani.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Fish-Biryani</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">90</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="jeera rice">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/jeera-rice.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">jeera-rice</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">50</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="lemon rice">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/lemon-rice.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">lemon-rice</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">55</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="mutton biryani">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/mutton-biryani.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">mutton-biryani</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">150</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="paneer fried rice">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/paneer fried rice.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">paneer fried rice</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">95</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item  Lunch" data-item="prawns biryani">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/Prawn-Biryani1.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Prawn-Biryani1</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">135</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
 <!-- single item -->
 <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch " data-item="prawns biryani">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/prawns biryani.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">prawns biryani</h5>
        <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">150</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
 <!-- single item -->
 <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="sambar rice">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/Sambar rice.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Sambar rice</h5>
        <h5 class="store-item-value">₹ <strong id="store-item-price" class="font-weight-bold">65</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->

 <!-- single item -->
 <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="special chicken biryani">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/Special Chicken-Biryani.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Special Chicken-Biryani</h5>
        <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">155</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="special mutton biryani">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/Special mutton biryani.png" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Special mutton biryani</h5>
        <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">195</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->

<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="spicy sambar fried rice">
  <div class="card ">
    <div class="img-container">
      <img src="img/lunch/Spicy sambar fried rice.jpg" class="card-img-top store-img" alt="">
      <span class="store-item-icon">
        <i class="fas fa-shopping-cart"></i>
      </span>
    </div>
    <div class="card-body">
      <div class="card-text d-flex justify-content-between text-capitalize">
        <h5 id="store-item-name">Spicy sambar fried rice</h5>
        <h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">80</strong></h5>

      </div>
    </div>


  </div>
  <!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="tomato rice">
<div class="card ">
<div class="img-container">
<img src="img/lunch/Tomato Rice.jpg" class="card-img-top store-img" alt="">
<span class="store-item-icon">
<i class="fas fa-shopping-cart"></i>
</span>
</div>
<div class="card-body">
<div class="card-text d-flex justify-content-between text-capitalize">
<h5 id="store-item-name">Tomato Rice</h5>
<h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">65</strong></h5>

</div>
</div>


</div>
<!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="veg biryani">
<div class="card ">
<div class="img-container">
<img src="img/lunch/Veg-Biryani.jpg" class="card-img-top store-img" alt="">
<span class="store-item-icon">
<i class="fas fa-shopping-cart"></i>
</span>
</div>
<div class="card-body">
<div class="card-text d-flex justify-content-between text-capitalize">
<h5 id="store-item-name">Veg-Biryani</h5>
<h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">55</strong></h5>

</div>
</div>


</div>
<!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="veg fried rice">
<div class="card ">
<div class="img-container">
<img src="img/lunch/veg-fried-rice.jpg" class="card-img-top store-img" alt="">
<span class="store-item-icon">
<i class="fas fa-shopping-cart"></i>
</span>
</div>
<div class="card-body">
<div class="card-text d-flex justify-content-between text-capitalize">
<h5 id="store-item-name">veg-fried-rice</h5>
<h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">75</strong></h5>

</div>
</div>


</div>
<!-- end of card-->
</div>
<!--end of single store item-->
<!-- single item -->
<div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item Lunch" data-item="veg fried rice indian style">
<div class="card ">
<div class="img-container">
<img src="img/lunch/Veg-Fried-Rice-Indian-Style.jpg" class="card-img-top store-img" alt="">
<span class="store-item-icon">
<i class="fas fa-shopping-cart"></i>
</span>
</div>
<div class="card-body">
<div class="card-text d-flex justify-content-between text-capitalize">
<h5 id="store-item-name">Veg-Fried-Rice-Indian-Style</h5>
<h5 class="store-item-value">₹  <strong id="store-item-price" class="font-weight-bold">80</strong></h5>

</div>
</div>


</div>
<!-- end of card-->
</div>
<!--end of single store item-->






</div>
</section>
<!--end of store items -->





  <!-- modal-container -->

  <div class="container-fluid ">
    <div class="row lightbox-container align-items-center">
      <div class="col-10 col-md-10 mx-auto text-right lightbox-holder">
        <span class="lightbox-close"><i class="fas fa-window-close"></i></span>
        <div class="lightbox-item"></div>
        <span class="lightbox-control btnLeft"><i class="fas fa-caret-left"></i></span>
        <span class="lightbox-control btnRight"><i class="fas fa-caret-right"></i></span>
      </div>
    </div>
  </div>


  <!-- jquery -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- script js -->
  <script src="js/app.js"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery fi$t, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>

</body>

</html>