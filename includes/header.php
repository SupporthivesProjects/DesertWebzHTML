<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!doctype php>
<php lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desertwebz Ltd</title>
    <link rel="icon" href="./assets/logos/mark-amber.svg" type="image/svg+xml">
    <link rel="stylesheet" href="./assets/devcss/mainBase.css">
  </head>
  <body>
  <div class="main-div">
    <main class="page">
      <header class="header-top fixed-top" id="header-top">
          <nav class="navbar navbar-expand-lg">
              <div class="container">
                  <div class="logo-toggle">
                    <a class="navbar-brand" href="./index.php">
                      <img src="./assets/img/logo.svg" class="img-fluid">
                      <span>desertwebz</span>
                    </a>
                      <div class="d-lg-none d-md-flex d-flex">
                        <div class="cart-icon bg-color-sky">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 5.83333H15L14.1667 16.6667H5.83333L5 5.83333Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="#E6F1F4"/>
                            <path d="M7.5 5.83333C7.5 5.17029 7.76339 4.5344 8.23223 4.06556C8.70107 3.59672 9.33696 3.33333 10 3.33333C10.663 3.33333 11.2989 3.59672 11.7678 4.06556C12.2366 4.5344 12.5 5.17029 12.5 5.83333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" stroke="#E6F1F4"/>
                          </svg>
                        </div>
                        <button class="navbar-toggler bg-color-sky" id="menuBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav m-auto">
                      <li class="nav-item-mo">
                        <h6>Shop by format</h6>
                        <div class="nav-item-mo-box">
                            <div class="nav-item-mo-boxes">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="27" viewBox="0 0 36 27" fill="none">
                                <path d="M4.5376 7.6875L17.4751 3.75" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M17.4751 3.75L18.0001 22.8" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M18.0001 22.8L4.5376 25.125" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M4.5376 25.125V7.6875" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M31.4624 7.6875L18.5249 3.75" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M18.525 3.75L18 22.8" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M18 22.8L31.4625 25.125" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M31.4624 25.125V7.6875" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M4.5376 8.8125C5.15892 8.8125 5.6626 8.30882 5.6626 7.6875C5.6626 7.06618 5.15892 6.5625 4.5376 6.5625C3.91628 6.5625 3.4126 7.06618 3.4126 7.6875C3.4126 8.30882 3.91628 8.8125 4.5376 8.8125Z" fill="#F2FCFD"/>
                                <path d="M17.4751 4.875C18.0964 4.875 18.6001 4.37132 18.6001 3.75C18.6001 3.12868 18.0964 2.625 17.4751 2.625C16.8538 2.625 16.3501 3.12868 16.3501 3.75C16.3501 4.37132 16.8538 4.875 17.4751 4.875Z" fill="#F2FCFD"/>
                                <path d="M18 23.925C18.6213 23.925 19.125 23.4213 19.125 22.8C19.125 22.1787 18.6213 21.675 18 21.675C17.3787 21.675 16.875 22.1787 16.875 22.8C16.875 23.4213 17.3787 23.925 18 23.925Z" fill="#F2FCFD"/>
                                <path d="M4.5376 26.25C5.15892 26.25 5.6626 25.7463 5.6626 25.125C5.6626 24.5037 5.15892 24 4.5376 24C3.91628 24 3.4126 24.5037 3.4126 25.125C3.4126 25.7463 3.91628 26.25 4.5376 26.25Z" fill="#F2FCFD"/>
                                <path d="M31.4624 8.8125C32.0837 8.8125 32.5874 8.30882 32.5874 7.6875C32.5874 7.06618 32.0837 6.5625 31.4624 6.5625C30.8411 6.5625 30.3374 7.06618 30.3374 7.6875C30.3374 8.30882 30.8411 8.8125 31.4624 8.8125Z" fill="#F2FCFD"/>
                                <path d="M18.5249 4.875C19.1462 4.875 19.6499 4.37132 19.6499 3.75C19.6499 3.12868 19.1462 2.625 18.5249 2.625C17.9036 2.625 17.3999 3.12868 17.3999 3.75C17.3999 4.37132 17.9036 4.875 18.5249 4.875Z" fill="#F2FCFD"/>
                                <path d="M31.4624 26.25C32.0837 26.25 32.5874 25.7463 32.5874 25.125C32.5874 24.5037 32.0837 24 31.4624 24C30.8411 24 30.3374 24.5037 30.3374 25.125C30.3374 25.7463 30.8411 26.25 31.4624 26.25Z" fill="#F2FCFD"/>
                              </svg>
                              <h5>E-books</h5>
                            </div>
                            <div class="nav-item-mo-boxes">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="27" viewBox="0 0 36 27" fill="none">
                                <path d="M5.8125 1.875L30.1875 13.5" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M30.1875 13.5L5.8125 25.125" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M5.8125 25.125V1.875" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M5.8125 1.875L13.125 13.5" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M13.125 13.5L5.8125 25.125" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M5.8125 3C6.43382 3 6.9375 2.49632 6.9375 1.875C6.9375 1.25368 6.43382 0.75 5.8125 0.75C5.19118 0.75 4.6875 1.25368 4.6875 1.875C4.6875 2.49632 5.19118 3 5.8125 3Z" fill="#F2FCFD"/>
                                <path d="M30.1875 14.625C30.8088 14.625 31.3125 14.1213 31.3125 13.5C31.3125 12.8787 30.8088 12.375 30.1875 12.375C29.5662 12.375 29.0625 12.8787 29.0625 13.5C29.0625 14.1213 29.5662 14.625 30.1875 14.625Z" fill="#F2FCFD"/>
                                <path d="M5.8125 26.25C6.43382 26.25 6.9375 25.7463 6.9375 25.125C6.9375 24.5037 6.43382 24 5.8125 24C5.19118 24 4.6875 24.5037 4.6875 25.125C4.6875 25.7463 5.19118 26.25 5.8125 26.25Z" fill="#F2FCFD"/>
                                <path d="M13.125 14.625C13.7463 14.625 14.25 14.1213 14.25 13.5C14.25 12.8787 13.7463 12.375 13.125 12.375C12.5037 12.375 12 12.8787 12 13.5C12 14.1213 12.5037 14.625 13.125 14.625Z" fill="#F2FCFD"/>
                              </svg>
                              <h5>Video courses</h5>
                            </div>
                            <div class="nav-item-mo-boxes">
                              <svg width="36" height="27" viewBox="0 0 36 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.8127 5.47504L2.5127 13.5" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M2.5127 13.5L11.8127 21.525" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M24.1875 5.47504L33.4875 13.5" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M33.4875 13.5L24.1875 21.525" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M20.4749 6.30002L15.5249 20.7" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M11.8125 6.60004C12.4338 6.60004 12.9375 6.09636 12.9375 5.47504C12.9375 4.85372 12.4338 4.35004 11.8125 4.35004C11.1912 4.35004 10.6875 4.85372 10.6875 5.47504C10.6875 6.09636 11.1912 6.60004 11.8125 6.60004Z" fill="#F2FCFD"/>
                                <path d="M2.5127 14.625C3.13402 14.625 3.6377 14.1213 3.6377 13.5C3.6377 12.8787 3.13402 12.375 2.5127 12.375C1.89137 12.375 1.3877 12.8787 1.3877 13.5C1.3877 14.1213 1.89137 14.625 2.5127 14.625Z" fill="#F2FCFD"/>
                                <path d="M11.8125 22.65C12.4338 22.65 12.9375 22.1463 12.9375 21.525C12.9375 20.9036 12.4338 20.4 11.8125 20.4C11.1912 20.4 10.6875 20.9036 10.6875 21.525C10.6875 22.1463 11.1912 22.65 11.8125 22.65Z" fill="#F2FCFD"/>
                                <path d="M24.1875 6.60004C24.8088 6.60004 25.3125 6.09636 25.3125 5.47504C25.3125 4.85372 24.8088 4.35004 24.1875 4.35004C23.5662 4.35004 23.0625 4.85372 23.0625 5.47504C23.0625 6.09636 23.5662 6.60004 24.1875 6.60004Z" fill="#F2FCFD"/>
                                <path d="M33.4873 14.625C34.1086 14.625 34.6123 14.1213 34.6123 13.5C34.6123 12.8787 34.1086 12.375 33.4873 12.375C32.866 12.375 32.3623 12.8787 32.3623 13.5C32.3623 14.1213 32.866 14.625 33.4873 14.625Z" fill="#F2FCFD"/>
                                <path d="M24.1875 22.65C24.8088 22.65 25.3125 22.1463 25.3125 21.525C25.3125 20.9036 24.8088 20.4 24.1875 20.4C23.5662 20.4 23.0625 20.9036 23.0625 21.525C23.0625 22.1463 23.5662 22.65 24.1875 22.65Z" fill="#F2FCFD"/>
                                <path d="M20.4751 7.42502C21.0964 7.42502 21.6001 6.92134 21.6001 6.30002C21.6001 5.6787 21.0964 5.17502 20.4751 5.17502C19.8538 5.17502 19.3501 5.6787 19.3501 6.30002C19.3501 6.92134 19.8538 7.42502 20.4751 7.42502Z" fill="#F2FCFD"/>
                                <path d="M15.5249 21.825C16.1462 21.825 16.6499 21.3213 16.6499 20.7C16.6499 20.0787 16.1462 19.575 15.5249 19.575C14.9036 19.575 14.3999 20.0787 14.3999 20.7C14.3999 21.3213 14.9036 21.825 15.5249 21.825Z" fill="#F2FCFD"/>
                              </svg>
                              <h5>Software</h5>
                            </div>
                            <div class="nav-item-mo-boxes">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="27" viewBox="0 0 36 27" fill="none">
                                <path d="M2.5127 2.88748H33.4877" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M33.4873 2.88748V24.1125" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M33.4877 24.1125H2.5127" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M2.5127 24.1125V2.88748" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M2.5127 9.67502H33.4877" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M16.4624 9.67502V24.1125" stroke-width="0.4875" stroke="#8FDCE0" stroke-opacity="0.8"/>
                                <path d="M2.5127 4.01248C3.13402 4.01248 3.6377 3.5088 3.6377 2.88748C3.6377 2.26616 3.13402 1.76248 2.5127 1.76248C1.89137 1.76248 1.3877 2.26616 1.3877 2.88748C1.3877 3.5088 1.89137 4.01248 2.5127 4.01248Z" fill="#F2FCFD"/>
                                <path d="M33.4873 4.01248C34.1086 4.01248 34.6123 3.5088 34.6123 2.88748C34.6123 2.26616 34.1086 1.76248 33.4873 1.76248C32.866 1.76248 32.3623 2.26616 32.3623 2.88748C32.3623 3.5088 32.866 4.01248 33.4873 4.01248Z" fill="#F2FCFD"/>
                                <path d="M33.4873 25.2375C34.1086 25.2375 34.6123 24.7338 34.6123 24.1125C34.6123 23.4912 34.1086 22.9875 33.4873 22.9875C32.866 22.9875 32.3623 23.4912 32.3623 24.1125C32.3623 24.7338 32.866 25.2375 33.4873 25.2375Z" fill="#F2FCFD"/>
                                <path d="M2.5127 25.2375C3.13402 25.2375 3.6377 24.7338 3.6377 24.1125C3.6377 23.4912 3.13402 22.9875 2.5127 22.9875C1.89137 22.9875 1.3877 23.4912 1.3877 24.1125C1.3877 24.7338 1.89137 25.2375 2.5127 25.2375Z" fill="#F2FCFD"/>
                                <path d="M2.5127 10.8C3.13402 10.8 3.6377 10.2963 3.6377 9.67502C3.6377 9.0537 3.13402 8.55002 2.5127 8.55002C1.89137 8.55002 1.3877 9.0537 1.3877 9.67502C1.3877 10.2963 1.89137 10.8 2.5127 10.8Z" fill="#F2FCFD"/>
                                <path d="M33.4873 10.8C34.1086 10.8 34.6123 10.2963 34.6123 9.67502C34.6123 9.0537 34.1086 8.55002 33.4873 8.55002C32.866 8.55002 32.3623 9.0537 32.3623 9.67502C32.3623 10.2963 32.866 10.8 33.4873 10.8Z" fill="#F2FCFD"/>
                                <path d="M16.4624 10.8C17.0837 10.8 17.5874 10.2963 17.5874 9.67502C17.5874 9.0537 17.0837 8.55002 16.4624 8.55002C15.8411 8.55002 15.3374 9.0537 15.3374 9.67502C15.3374 10.2963 15.8411 10.8 16.4624 10.8Z" fill="#F2FCFD"/>
                                <path d="M16.4624 25.2375C17.0837 25.2375 17.5874 24.7338 17.5874 24.1125C17.5874 23.4912 17.0837 22.9875 16.4624 22.9875C15.8411 22.9875 15.3374 23.4912 15.3374 24.1125C15.3374 24.7338 15.8411 25.2375 16.4624 25.2375Z" fill="#F2FCFD"/>
                              </svg>
                              <h5>Templates</h5>
                            </div>
                        </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link"  href="./index.php">Products</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="./services.php">1 on 1</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="./aboutus.php">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="./contact.php">Contact</a>
                      </li>
                  </ul>
                    <div class="d-flex menu-right" role="search">
                      <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                           USD
                        </button>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item active" href="#">
                              <div  class="on">USD<i>$</i></div>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">
                              <div class="on">USD<i>$</i></div>
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">
                              <div  class="on">USD<i>$</i></div>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="login-btn bg-color-sky">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.25 6.5C13.25 8.29493 11.7949 9.75 10 9.75C8.20507 9.75 6.75 8.29493 6.75 6.5C6.75 4.70507 8.20507 3.25 10 3.25C11.7949 3.25 13.25 4.70507 13.25 6.5Z" stroke-width="1.5" stroke="#E6F1F4"/>
                          <path d="M3.75 16.75C4.65 13.75 7.05 12.25 10 12.25C12.95 12.25 15.35 13.75 16.25 16.75" stroke-width="1.5" stroke-linecap="round" stroke="#E6F1F4"/>
                        </svg>
                      </div>
                      <div class="gr fd" style="--d:.3s">
                <a href="#" class="gc" aria-label="Cart">
                    <svg class="ic">
                        <use href="#i-bag" />
                    </svg><b>0</b></a>
            </div>
                      <div class="login-sing-mo">
                          <div class="login-sing btn-wrap">
                            <a href="#" class="btn btn-login">Log in</a>
                            <a href="#" class="btn btn-sing">Log in</a>
                          </div>
                      </div>
                      <div class="curren-mo">
                          <a href="#" class="active">USD</a>
                          <a href="#">EUR</a>
                          <a href="#">USD</a>
                          <a href="#">GBP</a>
                          <a href="#">USD</a>
                      </div>
                    </div>
                </div>
              </div>
          </nav>
      </header>

  


  
  