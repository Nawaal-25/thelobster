 <footer class="text-light my-5 pt-5 pb-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <h5 class="textPink mb-3">Quick Links</h5>
            <ul class="list-unstyled">
              <li>
                <a href="./index.php" class="text-secondary text-decoration-none"
                  >Home</a
                >
              </li>
              <li>
                <a href="index.php" class="text-secondary text-decoration-none"
                  >Shop All</a
                >
              </li>
              <li>
                <a href="Top.php" class="text-secondary text-decoration-none">Top</a>
              </li>
              <li>
                <a
                  href="Bottom.php"
                  class="text-secondary text-decoration-none"
                  >Bottom</a
                >
              </li>
              <li>
                <a
                  href="Accessories.php"
                  class="text-secondary text-decoration-none"
                  >Accessories</a
                >
              </li>
            </ul>
          </div>

          <!-- Customer Service -->
          <div class="col-lg-4 col-md-6 mb-4">
            <h5 class="textPink mb-3">Customer Service</h5>
            <ul class="list-unstyled">
              <li>
                <a href="ContactUs.php" class="text-secondary text-decoration-none"
                  >Contact Us</a
                >
              </li>
              <li>
                <a
                  href="ShippingPolicy.php"
                  class="text-secondary text-decoration-none"
                  >Shipping Policy</a
                >
              </li>
              <li>
                <a
                  href="RefundPolicy.php"
                  class="text-secondary text-decoration-none"
                  >Return Policy</a
                >
              </li>
              <li>
                <a
                  href="TermsOfService.php"
                  class="text-secondary text-decoration-none"
                  >Terms of servies</a
                >
              </li>
               <li>
                <a
                  href="PrivacyPolicy.php"
                  class="text-secondary text-decoration-none"
                  >Privacy Policy</a
                >
              </li>
            </ul>
          </div>

          <!-- Newsletter / Social -->
          <div class="col-lg-4 col-md-6 mb-4">
            <h5 class="textPink mb-3">Stay Connected</h5>
            <form class="d-flex mb-3">
              <input
                type="email"
                class="form-control me-2"
                placeholder="Enter email"
              />
              <button class="btn btn-outline-light btn-sm">Subscribe</button>
            </form>
            <div class="StayConnectFooter row text-center text-md-start">
              <!-- First 4 links, arranged in 3 columns per row on small screens -->
              <div class="col-4 col-md-auto mb-2">
                <a href="https://www.instagram.com/lobster.in_" class="text-secondary"
                  ><i class="bi bi-instagram"></i> Instagram</a
                >
              </div>
              <div class="col-4 col-md-auto mb-2">
                <a href="tel:919920127885" class="text-secondary"
                  ><i class="bi bi-telephone"></i> Contact</a
                >
              </div>
              <div class="col-4 col-md-auto mb-2">
                <a href="#" class="text-secondary"
                  ><i class="bi bi-facebook"></i> Facebook</a
                >
              </div>
              <div class="col-4 col-md-auto mb-2 mt-2 mt-md-0">
                <a href="#" class="text-secondary"
                  ><i class="bi bi-youtube"></i> Youtube</a
                >
              </div>

              <!-- Snapchat always on new row -->
              <div class="col-4 mt-2 mt-md-0 snapchat-col">
                <a href="https://wa.me/919920127885" class="text-secondary"
                  ><i class="bi bi-whatsapp"></i> Whatsapp</a
                >
              </div>
            </div>
          </div>
        </div>

        <!-- Copyright -->
        <hr class="border-top border-secondary" />
        <div class="text-center pt-5">
          <small class="text-secondary"
            >&copy; 2025 Lobster. All rights reserved.</small
          >
        </div>
      </div>
    </footer>
<!-- must add this for cart feature all over the pages -->
    <!--  Bootstrap Bundle JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ajax link -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- page load transition script -->
  <script src="pageLoad.js"></script>
 <script src="Cart.js"></script>
    <?php
      $ProductScript=basename($_SERVER['PHP_SELF']);
      if($ProductScript=='MyDawg.php' || $ProductScript=='MyDawg - Copy.php' ||$ProductScript=='Sixty-Nine.php' || $ProductScript=='Sunkiss.php')
      {
     echo'<script src="Quantity_Cart copy.js"></script>';
     echo'<script src="MobileProductUi.js"></script>';
     echo'<script src="https://unpkg.com/swiper@7.4.1/swiper-bundle.min.js"></script>';
      }
      // include('get_cart.php');
    ?>


<!-- checkoout form logic -->
<?php
 $CheckOutFormFile=basename($_SERVER['PHP_SELF']);
 if($CheckOutFormFile=='test.php' || $CheckOutFormFile=='MyDawgCopy.php')
  {
    echo'<script src="https://checkout.razorpay.com/v1/checkout.js"></script>';
   echo '<script src="CheckOutForm.js"></script>';
  //  echo '<script src="razorpay_payment.js"></script>';

 
 }
?>

  </body>
</html>

    