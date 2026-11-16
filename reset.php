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
    @media only screen and (max-width: 600px) {
        .nav-link {   
            color: var(--brand-ice, #E6F1F4);
        }
    }
  </style>
  <section class="login-auth reset-section">
        <div class="container-fluid p-0">
            <div class="col-row">
                <div class="row p-0">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="lgin-left-img position-relative">
                            <img src="assets/img/forgot-key.png" alt="" class="img-fluid d-lg-block d-md-block d-sm-none d-none" srcset="assets/img/forgot-key.png">
                            <img src="assets/img/forgot-key-mo.png" alt="" class="img-fluid d-block d-lg-none d-md-none w-100" srcset="assets/img/forgot-key-mo.png">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="lgin-right login-right reset-right">
                            <h1> Create <span> an account.</span></h1>
                            <p>Choose a password with at least 8 characters.</p>
                            <div class="row-input">
                                <div class="input-div">
                                    <label>New password</label>
                                    <input type="password" class="form-control" placeholder="••••••••••">
                                </div>
                                 <div class="input-div">
                                    <label>Confirm new password</label>
                                    <input type="password" class="form-control" placeholder="••••••••••">
                                </div>
                                <div class="btn-lign-div">
                                    <button class="btn btn-black">Save new password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
  <button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-body-text-diloga">
            <div class="modal-content">
                <div class="modal-body modal-body-text">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 0L23.5355 16.4645L40 20L23.5355 23.5355L20 40L16.4645 23.5355L0 20L16.4645 16.4645L20 0Z" fill="#1C7880"/>
                    </svg>
                    <h4>Check your email</h4>
                    <p>
                        We sent a reset link to john@example.com. 
                        It works once, so use the newest one.
                    </p>
                    <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">
                        Back to log in
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>