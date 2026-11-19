<?php include 'includes/header.php'; ?>

  <style>
    .navbar-nav{
        background: var(--brand-night,#07101e0d);
    }
    .login-section {
        margin: 148px 0px -1px;
    }
    .navbar-brand, .dropdown-toggle,.bg-color-sky{
        filter: invert(1);
    }
    .nav-link {   
        color: var(--brand-text, #0B1626);
    }
    .header-scroll .navbar {
        background: #fff;
    }
    @media only screen and (max-width: 600px) {
        .header-scroll .logo-toggle, .header-active .logo-toggle {
            background: #fff;
        }
        .header-scroll .navbar {
            background: var(--brand-night, #07101E);
        }
        .nav-link {   
            color: var(--brand-ice, #E6F1F4);
        }
    }
  </style>
  <section class="login-auth sign-section">
        <div class="container-fluid p-0">
            <div class="col-row">
                <div class="row p-0">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 position-relative signup-leftimg">
                        <div class="signup-left-img position-relative">
                            <img src="assets/img/sign-img.png" alt="" class="img-fluid d-lg-block d-md-block d-sm-none d-none signup-left-img-img" srcset="assets/img/sign-img.png" loading="lazy">
                            <img src="assets/img/sign-img-mo.png" alt="" class="img-fluid d-block d-lg-none d-md-none w-100" srcset="assets/img/sign-img-mo.png" loading="lazy">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="lgin-right login-right sign-right">
                            <h1> Create <span> an account.</span></h1>
                            <p>Set up an account once and use it for every order.</p>
                            <div class="row-input">
                                <div class="input-div">
                                    <label>Full name</label>
                                    <input type="text" class="form-control" placeholder="John Smith">
                                </div>
                                <div class="input-div">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="john@example.com">
                                </div>
                                <div class="input-div">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="••••••••••">
                                </div>
                                 <div class="input-div">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="••••••••••">
                                </div>
                                <div class="check-pass">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            I agree to the <a href="">Terms and Conditions</a> and <a href="#"> Privacy Policy</a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="check-pass">
                                    <div class="form-check p-0">
                                    <img src="assets/img/reCAPTCHAcheckbox.png" alt="" srcset="assets/img/reCAPTCHAcheckbox.png">
                                    </div>
                                </div>
                                <div class="btn-lign-div">
                                    <button class="btn btn-black">Create account</button>
                                </div>
                                <div class="create-a">
                                    <p><span>New here?</span><a href="#"> Create an account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>

<?php include 'includes/footer.php'; ?>