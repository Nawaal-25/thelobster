<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div id="checkoutModal" class="modal-overlay">
  <div class="modal-content">
    <span class="close-btn" onclick="confirmExit()">×</span>
    <div id="step1">
      <h2 style="color: #EC3EB0;">Step 1: Personal Info</h2>
      <input type="text" id="full_name" placeholder="Full Name" required>
      <input type="email" id="email" placeholder="Email" style="border: 1px solid #EC3EB0;" required>
      <input type="tel" id="phone" placeholder="Phone Number" required>
      <input type="password" id="password" placeholder="Password" required>
      <button onclick="goToStep2()">Next</button>
    </div>

    <div id="step2" style="display:none;">
      <h2>Step 2: Shipping Address</h2>
      <input type="text" id="address" placeholder="Street Address" required>
      <input type="text" id="city" placeholder="City" required>
      <input type="text" id="state" placeholder="State" required>
      <input type="text" id="postal" placeholder="Postal Code" required>
      <input type="text" id="country" placeholder="Country" required>
      <button onclick="goToStep3()">Next</button>
    </div>

    <div id="step3" style="display:none;">
  <h2>Step 3: Payment Method</h2>
  <div style="display: flex; flex-direction: column; max-width: 300px;">
    <label><input type="radio" name="payment" value="Razorpay" checked /> Razorpay</label>
<label><input type="radio" name="payment" value="COD" />COD</label>
    <button onclick="goToReview()" style="margin-top: 10px;">Review & Confirm</button>
  </div>
</div>

    <div id="reviewSection" style="display:none;">
      <h2>Step 4: Confirm Your Details</h2>
      <p><strong>Name:</strong> <span id="r_name"></span></p>
      <p><strong>Email:</strong> <span id="r_email"></span></p>
      <p><strong>Phone:</strong> <span id="r_phone"></span></p>
      <p><strong>Address:</strong> <span id="r_address"></span></p>
      <p><strong>Payment Method:</strong> <span id="r_payment"></span></p>
      <button onclick="submitCheckout()">Place Order</button>
    </div>
  </div>
</div>

<!-- Exit Confirmation -->
<div id="exitConfirm" class="modal-overlay">
  <div class="modal-content">
    <h3>Are you sure you want to exit?</h3>
    <p>Items in cart may run out of stock soon.</p>
    <button onclick="closeExitConfirm()">Continue Shopping</button>
    <button onclick="closeCheckout()">Yes, Exit</button>
  </div>
</div>
</body>
</html>