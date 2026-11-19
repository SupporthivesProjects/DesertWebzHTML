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
  <section class="login-auth login-section">
        <div class="container-fluid p-0">
            <div class="col-row">
                <div class="row p-0">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="lgin-left-img">
                            <img src="assets/img/login-img.png" alt="" class="img-fluid d-lg-block d-md-block d-sm-none d-none" srcset="assets/img/login-img.png" loading="lazy">
                            <img src="assets/img/login-img-mo.png" alt="" class="img-fluid d-block d-lg-none d-md-none w-100" srcset="assets/img/login-img-mo.png" loading="lazy">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="lgin-right login-right">
                            <h1>Log in <span>to your<br> account.</span></h1>
                            <div class="row-input">
                                <div class="input-div">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="john@example.com">
                                </div>
                                <div class="input-div">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="••••••••••">
                                </div>
                                <div class="check-pass">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                                        <label class="form-check-label" for="checkDefault">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="btn-lign-div">
                                    <button class="btn btn-black">Login</button>
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