<?php include 'includes/header.php'; ?>

<!-- Section 1 -->
<section class="cart_s1">
  <div class="cart_c1 container">
    <div class="cartmob-hero">
      <img class="desktop_none" src="./assets/img/cart_mobhero.png" alt="">
  </div>
    <h1 class="cart_s1title">Your <span class="cart_s1titleblue">cart.</span></h1>
  </div>
</section>

<!-- Section 2 -->
<section class="cart_s2">
  <div class="cart_c2 container">
    <!-- Cart Left -->
    <div class="cart_s2left">
      <!-- Cart Card -->
      <div class="cart_s2leftcard">
        <img src="./assets/img/cart1.png" alt="Product Image">
        <div class="cart_s2titlebar">
          <h5 class="cart_s2title">HTML 101 Kickstart</h5>
          <p class="cart_s2subtitle mobile_none">Video course</p>
          <p class="cart_s2subtitle desktop_none">Video course  ·  $130.00</p>
        </div>
        <p class="cart_s2leftcardamount mobile_none">$130.00</p>
        <button type="button" class="btn cart_xbtn"><img src="./assets/img/cart_x.svg" alt="Remove Item"></button>
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
        <button type="button" class="btn cart_xbtn"><img src="./assets/img/cart_x.svg" alt="Remove Item"></button>
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
        <button type="button" class="btn cart_xbtn"><img src="./assets/img/cart_x.svg" alt="Remove Item"></button>
      </div>
    </div>
    <!-- Cart Right -->
    <div class="cart_s2right">
      <div class="cart_s2totalbar">
        <p class="cart_totaltitle">Total at checkout</p>
        <h4 class="cart_totalamount">$190.00</h4>
      </div>
      <button type="button" class="btn cart_btn">Checkout</button>
      <p class="cart_discountlabel">Discount codes go in at checkout.</p>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>