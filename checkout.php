<?php include 'includes/header.php'; ?>

<!-- Section 1 -->
<section class="checkout_s1">
  <div class="cart_c1 container">
    <div class="cartmob-hero">
      <img class="desktop_none" src="./assets/img/checkout_mobhero.png" alt="">
  </div>
    <h1 class="cart_s1title">Checkout <span class="cart_s1titleblue">and billing.</span></h1>
  </div>
</section>

<!-- Section 2 -->
<section class="checkout_s2">
  <div class="checkout_c2 container">
    <div class="checkout_left">
      <h4 class="checkout_lefttitle">Billing <span class="checkout_lefttitleblue">details.</h4>
    </div>


    <div class="checkout_right">
      <h5 class="checkout_righttitle">Order summary</h5>
      <div class="checkout_cartbar">
        <!-- Cart Card -->
        <div class="cart_s2leftcard">
          <img src="./assets/img/cart1.png" alt="Product Image">
          <div class="cart_s2titlebar">
            <h5 class="cart_s2title">HTML 101 Kickstart</h5>
            <p class="cart_s2subtitle mobile_none">Video course</p>
            <p class="cart_s2subtitle desktop_none">Video course  ·  $130.00</p>
          </div>
          <p class="cart_s2leftcardamount mobile_none">$130.00</p>
        </div>
        <!-- Cart Card -->
        <div class="cart_s2leftcard">
          <img src="./assets/img/cart2.png" alt="Product Image">
          <div class="cart_s2titlebar">
            <h5 class="cart_s2title">Landing Pages 101</h5>
            <p class="cart_s2subtitle mobile_none">E-book</p>
            <p class="cart_s2subtitle desktop_none">E-book  ·  $35.00</p>
          </div>
          <p class="cart_s2leftcardamount mobile_none">$35.00</p>
        </div>
        <!-- Cart Card -->
        <div class="cart_s2leftcard">
          <img src="./assets/img/cart3.png" alt="Product Image">
          <div class="cart_s2titlebar">
            <h5 class="cart_s2title">Google -Analytics 101</h5>
            <p class="cart_s2subtitle mobile_none">E-book</p>
            <p class="cart_s2subtitle desktop_none">E-book  ·  $25.00</p>
          </div>
          <p class="cart_s2leftcardamount mobile_none">$25.00</p>
        </div>
      </div>
      <div class="checkout_discountbar">
        <div class="discount_boxbar">
          <p class="discount_codetitle"><span class="discount_dot"></span> Discount code</p>
          <p class="disount_code">STARS10</p>
        </div>
        <button type="button" class="btn cart_btn">Apply</button>
      </div>
      <p class="checkout_discountlabel">STARS10 applied: 10% off this order.</p>
      <div class="checkout_divideline"></div>
      <div class="subtotalbar">
        <p class="subtotaltitle">Subtotal</p>
        <p class="subtotalvalue">$190.00</p>
      </div>
      <div class="subtotalbar">
        <p class="subtotaltitle">Discount</p>
        <p class="subtotalvalue">−$19.00</p>
      </div>
      <div class="checkout_divideline"></div>
      <div class="subtotalbar">
        <p class="totaltitle">Total today</p>
        <p class="totalvalue">$171.00</p>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>