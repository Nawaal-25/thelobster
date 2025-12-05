<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lobster</title>

    <!--  Bootstrap CSS CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!--  Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="Logo1-removebg-preview CROPED.png" />
    <link rel="stylesheet" href="style1.css" />
    <!-- bs icon link -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    />
    <?php
  
$ProductPage = basename($_SERVER['PHP_SELF']);
if ($ProductPage=='MyDawg.php' || $ProductPage=='Sixty-Nine.php' || $ProductPage=='Sunkiss.php'|| $ProductPage=='test.php' || $ProductPage=='MyDawgCopy.php') {
  echo '<link rel="stylesheet" href="Products_Next_Page1.css">';
echo'  <link rel="stylesheet" href="https://unpkg.com/swiper@7.4.1/swiper-bundle.min.css" />';
}
?>
  <?php
  
$UserPages = basename($_SERVER['PHP_SELF']);
if ($UserPages == 'UserLogin.php'|| $UserPages == 'Register.php' || $UserPages=='AfterLoginRegister.php') {
echo'  <link rel="stylesheet" href="UserLoginForm.css" />';
}
?>

  </head>
  <body>
    <!--  Header for desktop ONLY-->
    <nav
      class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top position-relative desktop-only"
    >
      <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
          <img
            src="Logo1-removebg-preview CROPED.png"
            width="150"
            alt="Logo"
            class="img-fluid"
          />
        </a>

        <!-- Nav links -->
        <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav gap-3 p-3 rounded stack-on-mobile">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="index.php">Shop All</a></li>
            <li class="nav-item"><a class="nav-link" href="Top.php">Top</a></li>
            <li class="nav-item">
              <a class="nav-link" href="Bottom.php">Bottom</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Accessories.php">Accessories</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- header for Mobile and Tablet-->
    <nav
      class="d-block d-lg-none mobile-tablet-only navbar navbar-expand-lg bg-dark navbar-dark sticky-top position-relative desktop-only"
    >
      <div class="container-fluid">
        <!-- Toggler -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Logo -->
        <a class="navbar-brand" href="#">
          <img
            src="Logo1-removebg-preview CROPED.png"
            style="margin-right: 11px"
            width="100"
            alt="Logo"
            class="img-fluid"
          />
        </a>
        <span>
          <a href="javascript:void(0)" class="cart-icon">
            <i
              class="bi bi-cart4"
              style="color: #ec3eb0; font-size: 24px; margin-right: 10px"
            ></i>
            <span
              class="cartCount position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
              style="margin-top: 36px; margin-left: -19px; font-size: 10px"
            >
              0
            </span>
          </a>
        </span>
        <!-- Nav links -->
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
          style="margin-top: 26px"
        >
          <ul class="navbar-nav gap-3 p-3 rounded stack-on-mobile">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="index.php">Shop All</a></li>
            <li class="nav-item"><a class="nav-link" href="Top.php">Top</a></li>
            <li class="nav-item">
              <a class="nav-link" href="Bottom.php">Bottom</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Accessories.php">Accessories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="UserLogin.php">
                <i class="bi bi-person"></i> Account
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
        <?php
    $Slogan=basename($_SERVER['PHP_SELF']);
    if($Slogan!= 'Bottom.php'&& $Slogan!= 'ContactUs.php' && $Slogan!='Sunkiss.php' && $Slogan!= 'ShippingPolicy.php'&& $Slogan!= 'RefundPolicy.php'&& $Slogan!= 'PrivacyPolicy.php'&& $Slogan!= 'TermsOfService.php' && $Slogan!= 'MyDawg.php' && $Slogan!= 'Sixty-Nine.php'  
    && $Slogan!= 'UserLogin.php'&& $Slogan!= 'Register.php' && $Slogan!='AfterLoginRegister.php' && $Slogan!='test.php'){
    ?>
    <div class="container my-lg-5 my-sm-3 animate-on-load">
      <!-- wesite title row inside the hood -->
      <div class="row my-4 fade-up">
        <div>
          <h1 class="mt-3 text-center text-white">*Inside the hood*</h1>
          <p class="WebMessage mt-3 text-center">      
            No restock. Once it's gone, it's gone forever.
          </p>
        </div>

        <div class="HeaderIcon d-flex justify-content-end gap-3">
          <a href="UserLogin.php">
            <i class="bi bi-person d-none d-lg-inline"></i>
          </a>
          <a href="javascript:void(0)" class="cart-icon">
            <i class="bi bi-cart4 d-none d-lg-inline"></i>
            <span
            
              class="cartCount d-none d-lg-inline position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success"
              style="margin-top: 127px; margin-left: -11px; font-size: 10px"
            >
            0  
            </span>
          </a>
        </div>
      </div>
        <?php
}
?>
<?php
 $Icons=basename($_SERVER['PHP_SELF']);
//  add all the product page name
    if($Icons== 'MyDawg.php'||  $Icons=='Sixty-Nine.php' ||  $Icons=='Sunkiss.php' || $Icons=='UserLogin.php' || $Icons=='Register.php' || $Icons=='AfterLoginRegister.php' || $Slogan=='test.php'){
    ?>
    <div class="container my-lg-5 my-sm-3 animate-on-load">
      <!-- wesite title row inside the hood -->
      <div class="row my-4 fade-up">
        <div class="HeaderIcon d-flex justify-content-end gap-3">
          <a href="UserLogin.php">
            <i class="bi bi-person d-none d-lg-inline"></i>
          </a>
          <a href="javascript:void(0)" class="cart-icon">
            <i class="bi bi-cart4 d-none d-lg-inline"></i>
            <span
            
              class="cartCount d-none d-lg-inline position-absolute top-0 start-100 translate-middle badge rounded-pill"
              style="margin-top: 13px; margin-left: -11px; font-size: 10px"
            >
            0  
            </span>
          </a>
        </div>
      </div>
        <?php
}
?>

   <!-- Cart Overlay -->
    <div id="cartOverlay" class="cart-overlay"></div>

    <!-- Cart Slider -->
    <div id="cartSlider" class="cart-slider">
      <div
        class="cart-header my-4 mx-3 my-lg-4 mx-lg-3 d-flex align-items-center justify-content-between align-content-center"
      >
        <h5 class="mb-0">Your Cart</h5>
        <button id="closeCart" class="btn btn-sm text-end mb-1">X</button>
      </div>
      <div id="cartItems" class="cart-items mt-3"></div>
      <a id="emptyCartBtn" class="btn my-2 CheckOutCartBtn " style="display:none;">Continue Shopping</a>
       
      <div class="cart-footer mx-lg-4 my-lg-3 mx-3 my-3 d-flex align-items-center justify-content-between align-content-center">
        <p >Total: </p><span id="cartTotal" class="">₹0</span>
      </div>
<button id="checkoutBtn" class="btn my-2 CheckOutCartBtn triggerCheckout">Checkout</button>
    </div>

    <!-- checkout form following -->
 <div id="checkoutModal" class="modal-overlay" style="display:none;">
  <div class="modal-content-CheckOut bg-black border border-pink text-white rounded-4 shadow-lg position-relative p-4">
    <span class="close-btn" onclick="confirmExit()">×</span>

    <!-- Step 1 -->
     <form method="post" id="checkoutForm" action="checkout_submit.php">
    <div id="step1">
      <h2 class="text-center mb-4" style="color:#EC3EB0;">Step 1: Personal Info</h2>
      <div class="mb-3">
        <input type="text" id="Full_Name" name="Full_Name"  class="form-control" placeholder="Full Name" required>
      </div>
      <div class="mb-3">
        <input type="email" id="Email" name="Email"  class="form-control"  placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="tel" id="Phone" name="Phone"  class="form-control" placeholder="Phone Number" required>
      </div>
      <div class="text-center">
        <button onclick="goToStep2()" class="btn buttonCheck mt-2">Next</button>
      </div>
    </div>

    <!-- Step 2 -->
    <div id="step2" style="display:none;">
      <h2 class="text-center mb-4" style="color:#EC3EB0;">Step 2: Shipping Address</h2>
      <div class="mb-3">
        <input type="text" id="Address" name="Address" class="form-control" placeholder="Street Address" required>
      </div>
      <div class="mb-3">
        <input type="text" id="City" name="City" class="form-control" placeholder="City" required>
      </div>
      <div class="mb-3">
        <input type="text" id="State" name="State" class="form-control" placeholder="State" required>
      </div>
      <div class="mb-3">
        <input type="text" id="Postal" name="Postal" class="form-control" placeholder="Postal Code" required>
      </div>
      <div class="mb-3">
        <input type="text" id="Country" name="Country" class="form-control" placeholder="Country" required>
      </div>
      <div class="text-center">
        <button onclick="goToStep3()" class="btn buttonCheck mt-2">Next</button>
      </div>
    </div>

    <!-- Step 3 -->
    <div id="step3" style="display:none;">
      <h2 class="text-center mb-4" style="color:#EC3EB0;">Step 3: Payment Method</h2>
      <div class="d-flex flex-column align-items-start mx-auto" style="max-width:300px;">
      <div class="form-check form-check-inline text-white">
  <input class="form-check-input" type="radio" name="Payment" id="Razorpay" value="Razorpay" >
  <label class="form-check-label" >Razorpay</label>
</div>
 <div class="form-check form-check-inline text-white">
  <input class="form-check-input" type="radio" name="Payment" id="Cod" value="COD">
  <label class="form-check-label" >Cash on Delivery</label>
</div> 
<!-- </form> -->
        <div class="text-center w-100">
          <!-- <button onclick="goToReview()" class="btn buttonCheck mt-2 w-100">Review & Confirm</button> -->
        <button onclick="goToReview()" class="btn buttonCheck mt-2 w-100">Review & Confirm</button>

        </div>
      </div>
    </div>

    <!-- Step 4 -->
    <div id="reviewSection" style="display:none;">
      <h2 class="text-center mb-4" style="color:#EC3EB0;">Step 4: Confirm Your Details</h2>
      <div class="text-start" style="color:#ffff;">
        <p><strong>Name:</strong> <span id="r_Name"></span></p>
        <p><strong>Email:</strong> <span id="r_Email"></span></p>
        <p><strong>Phone:</strong> <span id="r_Phone"></span></p>
        <p><strong>Address:</strong> <span id="r_Address"></span></p>
        <p><strong>Payment Method:</strong> <span id="r_Payment"></span></p>
      </div>
      <div class="text-center">
      <button type="submit"  class="btn buttonCheck mt-3">Place Order</button>
        <!-- <button type="submit" class="btn buttonCheck mt-3">Place Order</button> -->
      </div>
    </div>
</form>
  </div>
</div>

<!-- Exit Confirmation -->
<div id="exitConfirm" class="modal-overlay" style="display:none;">
  <div class="modal-content-CheckOut bg-black border border-pink text-white rounded-4 shadow-lg p-4 text-center">
    <h3 style="color:#EC3EB0;">Are you sure you want to exit?</h3>
    <p>Items in cart may run out of stock soon.</p>
    <div class="d-flex justify-content-center gap-3 mt-3">
      <button onclick="closeExitConfirm()" class="btn buttonCheck">Continue Shopping</button>
      <button onclick="closeCheckout()" class="btn buttonCheck">Yes, Exit</button>
    </div>
  </div>
</div>

