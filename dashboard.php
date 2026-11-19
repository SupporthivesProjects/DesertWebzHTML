<?php include 'includes/header.php'; ?>
<img src="../assets/img/account-mb.png" alt="" class="d-block d-md-none" style="background: linear-gradient(180deg, rgba(7, 16, 30, 0.55) 0%, rgba(7, 16, 30, 0.00) 35%, rgba(7, 16, 30, 0.00) 75%, #07101E 100%);">
<section class="dashboard-top">
    <div class="d-top-inner container">
        <h1 class="d-top-h1">
            Your account, <br class="d-block d-md-none"><span class="d-top-span">John Smith.</span>
        </h1>
        <div class="dashboard-dropdown" id="dashboardDropdown">

        <!-- MOBILE SELECTED TAB -->

        <button class="dropdown-selected form-select" id="dropdownToggle">
            <span class="selected-left">
                <img src="../assets/img/star.png" class="tab-dot" alt="">
                <span id="selectedTabText">Your details</span>
            </span>

        </button>

        <!-- DESKTOP TABS / MOBILE DROPDOWN OPTIONS -->

        <div class="dropdown-options">

            <button class="dropdown-option active" data-tab="Yourdetails" data-name="Your details">
                <img src="../assets/img/star.png" class="tab-dot" alt="">
                Your details
            </button>

            <button class="dropdown-option" data-tab="Invoices" data-name="Invoices">
                <img src="../assets/img/star.png" class="tab-dot" alt="">
                Invoices
            </button>

            <button class="dropdown-option" data-tab="Downloads" data-name="Downloads">
                <img src="../assets/img/star.png" class="tab-dot" alt="">
                Downloads
            </button>

            <button class="dropdown-option">
                Sign out
            </button>

        </div>
      </div>
    </div>
</section>

<section class="dashboard-wrapper">
    <div class="dashboard-content container">
        <!-- Your details CONTENT -->
        <div class="tab-content active" id="Yourdetails">
            <form class="details-sec">
                <div class="bill-detail">
                    <p class="bill-detp">
                        Name and email
                    </p>
                    <div class="bill-field-sec">
                        <div class="bill-field">
                            <label for="" class="bill-label">
                                Full name
                            </label>
                            <input type="text" class="bill-input" placeholder="John Smith">
                        </div>
                        <div class="bill-field">
                            <label for="" class="bill-label">
                                Email
                            </label>
                            <input type="text" class="bill-input" placeholder="john@example.com">
                        </div>
                        <div class="bill-field">
                            <label for="" class="bill-label">
                                Date of birth
                            </label>
                            <input type="text" class="bill-input" placeholder="14 / 06 / 1988">
                        </div>
                    </div>
                </div>
                <div class="bill-detail">
                    <p class="bill-detp">
                        Billing address
                    </p>
                    <div class="bill-field-sec">
                        <div class="bill-field">
                            <label for="" class="bill-label">
                                Address
                            </label>
                            <input type="text" class="bill-input" placeholder="12 Harbour Road">
                        </div>
                        <div class="bill-field">
                            <label for="" class="bill-label">
                                Country
                            </label>
                            <select name="" id="" class="bill-input form-select">
                                <option value="">
                                    United Kingdom
                                </option>
                                <option value="">
                                    India
                                </option>
                                <option value="">
                                    China
                                </option>
                            </select>
                        </div>
                        <div class="city-post">
                            <div class="bill-field">
                                <label for="" class="bill-label">
                                   City
                                </label>
                                <input type="text" class="bill-input" placeholder="Bristol">
                            </div>
                            <div class="bill-field">
                                <label for="" class="bill-label">
                                    Postcode
                                </label>
                                <input type="text" class="bill-input" placeholder="BS1 5TY">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <a href="#" class="dashboard-btn">
                Save details
            </a>
            <div class="border-line"></div>
            <form class="details-sec">
                <div class="bill-detail">
                    <p class="bill-detp">
                        Password
                    </p>
                    <div class="password-sec">
                        <div class="password-field">
                            <div class="password-input-wrapper">
                                <label for="Currentpassword" class="bill-label">Current password</label>
                                <input type="password" id="Currentpassword" class="bill-input" placeholder="........">    
                            </div>
                            <button type="button" class="password-toggle" aria-label="Show password" aria-pressed="false">
                                <img src="./assets/img/eye-icon.png" class="img-fluid" style="height: 20px;">
                            </button>
                        </div>
                        <div class="password-field">
                            <div class="password-input-wrapper">
                                <label for="Newpassword" class="bill-label">New password</label>
                                <input type="password" id="Newpassword" class="bill-input" placeholder="........">    
                            </div>
                            <button type="button" class="password-toggle" aria-label="Show password" aria-pressed="false">
                                <img src="./assets/img/eye-icon.png" class="img-fluid" style="height: 20px;">
                            </button>
                        </div>
                        <div class="password-field">
                            <div class="password-input-wrapper">
                                <label for="Confirmpassword" class="bill-label">Confirm new password</label>
                                <input type="password" id="Confirmpassword" class="bill-input" placeholder="........">    
                            </div>
                            <button type="button" class="password-toggle" aria-label="Show password" aria-pressed="false">
                                <img src="./assets/img/eye-icon.png" class="img-fluid" style="height: 20px;">
                            </button>
                        </div>
                    </div>
                    <a href="#" class="dashboard-btn">
                        Update password
                    </a>
                </div>
            </form>
        </div>

        <!-- Invoices CONTENT -->

        <div class="tab-content" id="Invoices">
            <table style="border-collapse:collapse;" class="d-none d-md-table w-100">
                <tr class="inv-head">
                    <td class="inv-head-200">
                        <p class="invoice-tb-head">Invoice</p>
                    </td>
                    <td class="inv-head-200">
                        <p class="invoice-tb-head">Date</p>
                    </td>
                    <td>
                        <p class="invoice-tb-head">Products</p>
                    </td>
                    <td class="inv-head-200">
                        <p class="invoice-tb-head">Total</p>
                    </td>
                    <td class="inv-head-224"></td>
                </tr>
                <tr class="inv-data">
                    <td>
                        <p class="inv-id">DW-2026-0418</p>
                    </td>
                    <td>
                        <p class="inv-date">12 Oct 2026</p>
                    </td>
                    <td>
                        <p class="inv-product">HTML 101 Kickstart, Landing Pages 101, Google Analytics 101</p>
                    </td>
                    <td>
                        <p class="inv-price">$171.00</p>
                    </td>
                    <td align="right">
                        <a href="#" class="inv-download">Download PDF</a>
                    </td>
                </tr>
                <tr class="inv-data">
                    <td>
                        <p class="inv-id">DW-2026-0418</p>
                    </td>
                    <td>
                        <p class="inv-date">12 Oct 2026</p>
                    </td>
                    <td>
                        <p class="inv-product">HTML 101 Kickstart, Landing Pages 101, Google Analytics 101</p>
                    </td>
                    <td>
                        <p class="inv-price">$171.00</p>
                    </td>
                    <td align="right">
                        <a href="#" class="inv-download">Download PDF</a>
                    </td>
                </tr>
            </table>

             <!-- mobile table -->
            <div class="invoice-mb d-block d-md-none">
                <div class="invoice-item">
                    <div class="price-id">
                        <p class="inv-id">DW-2026-0418</p>
                        <p class="inv-id">$171.00</p>
                    </div>
                    <p class="inv-date">3 Sep 2026  ·  WP Engage Plus Plugin</p>
                    <a href="#" class="inv-download">Download PDF</a>
                </div>
                <div class="invoice-item">
                    <div class="price-id">
                        <p class="inv-id">DW-2026-0418</p>
                        <p class="inv-id">$171.00</p>
                    </div>
                    <p class="inv-date">3 Sep 2026  ·  WP Engage Plus Plugin</p>
                    <a href="#" class="inv-download">Download PDF</a>
                </div>
            </div>

             <!-- mobile table end-->

             <!-- empty box -->
               <!-- <div class="empty-box">
                <img src="../assets/img/empty-star.png" alt="" style="height:40px;width:40px;">
                <h1>Nothing to <br class="d-block d-md-none"> download yet.</h1>
                <p>Products you buy will show up here.</p>
                <a href="#" class="dashboard-btn">
                    Browse the store
                </a>
               </div> -->
            <!-- empty box -->
         </div>
         <!-- Invoices CONTENT -->

    <!-- Downloads CONTENT -->

    <div class="tab-content" id="Downloads">

        <table style="border-collapse:collapse;" class="d-none d-md-table w-100">
                <tr class="inv-head">
                    <td class="inv-head-200">
                        <p class="invoice-tb-head">Format</p>
                    </td>
                    <td>
                        <p class="invoice-tb-head">Products</p>
                    </td>
                    <td class="inv-head-200">
                        <p class="invoice-tb-head">Purchased</p>
                    </td>
                    <td class="inv-head-200">
                        <p class="invoice-tb-head">Size</p>
                    </td>
                    <td class="inv-head-224"></td>
                </tr>
                <tr class="inv-data">
                    <td>
                        <p class="inv-format">Video course</p>
                    </td>
                    <td>
                        <p class="inv-product">HTML 101 Kickstart</p>
                    </td>
                    <td>
                        <p class="inv-date">12 Oct 2026</p>
                    </td>
                    <td>
                        <p class="inv-date">1.2 GB</p>
                    </td>
                    <td align="right">
                        <a href="#" class="inv-download">Download Pending</a>
                    </td>
                </tr>
                <tr class="inv-data">
                    <td>
                        <p class="inv-format">E-book</p>
                    </td>
                    <td>
                        <p class="inv-product">Landing Pages 101</p>
                    </td>
                    <td>
                        <p class="inv-date">12 Oct 2026</p>
                    </td>
                    <td>
                        <p class="inv-date">1.2 GB</p>
                    </td>
                    <td align="right">
                        <a href="#" class="downloads-btn">Download</a>
                    </td>
                </tr>
        </table>
        <!-- mobile table -->
        <div class="invoice-mb d-block d-md-none">
            <div class="invoice-item">
                <p class="inv-format">E-book</p>
                <p class="inv-id">HTML 101 Kickstart</p>
                <p class="inv-date">Purchased 12 Oct 2026  ·  1.2 GB</p>
                <a href="#" class="inv-download">Download Pending</a>
            </div>
            <div class="invoice-item">
                <p class="inv-format">E-book</p>
                <p class="inv-id">HTML 101 Kickstart</p>
                <p class="inv-date">Purchased 12 Oct 2026  ·  1.2 GB</p>
                <a href="#" class="downloads-btn">Download</a>
            </div>
        </div>
         <!-- mobile table end-->
        </div>
    </div>
</section>

<script>
const dropdown = document.getElementById("dashboardDropdown");
const dropdownToggle = document.getElementById("dropdownToggle");
const selectedTabText = document.getElementById("selectedTabText");
const dropdownOptions = document.querySelectorAll(".dropdown-option");
const tabContents = document.querySelectorAll(".tab-content");
// MOBILE DROPDOWN TOGGLE

dropdownToggle.addEventListener("click", function () {
    dropdown.classList.toggle("open");
});

// TAB SELECTION

dropdownOptions.forEach((option) => {
    option.addEventListener("click", function () {
        const targetTab = this.dataset.tab;
        const tabName = this.dataset.name;
        // UPDATE SELECTED TAB TEXT
        selectedTabText.textContent = tabName;
        // UPDATE ACTIVE TAB
        dropdownOptions.forEach((item) => {
            item.classList.remove("active");
        });
        this.classList.add("active");
        // UPDATE TAB CONTENT
        tabContents.forEach((content) => {
            content.classList.remove("active");
        });
        document.getElementById(targetTab).classList.add("active");
        // CLOSE MOBILE DROPDOWN
        dropdown.classList.remove("open");
    });
});
// CLOSE DROPDOWN WHEN CLICKING OUTSIDE
document.addEventListener("click", function (event) {
    if (!dropdown.contains(event.target)) {
        dropdown.classList.remove("open");
    }
});
</script>

<script>
    
document.querySelectorAll(".password-toggle").forEach(function(button) {

    button.addEventListener("click", function() {

        const passwordField = button.closest(".password-field");
        const passwordInput = passwordField.querySelector(".bill-input");
        const icon = button.querySelector("img");

        if (passwordInput.type === "password") {

            passwordInput.type = "text";
            icon.src = "./assets/img/icon-eye-slash.svg";

            button.setAttribute("aria-label", "Hide password");
            button.setAttribute("aria-pressed", "true");

        } else {

            passwordInput.type = "password";
            icon.src = "./assets/img/eye-icon.png";

            button.setAttribute("aria-label", "Show password");
            button.setAttribute("aria-pressed", "false");

        }

    });

});
  </script>


<?php include 'includes/footer.php'; ?>