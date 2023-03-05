<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.png"
      type="image/x-icon"
    />
    <title>sanakin.lk</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="index.php">
          <img src="assets/images/logo/logo.png" alt="logo" />
        </a>
      </div>
      <nav class="sidebar-nav" style="margin-top: 60px;">
        <ul>
          <li class="nav-item">
            <a href="index.php">
              <span class="icon">
               <i class="lni lni-home"></i>
              </span>
              <span class="text">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="Product.php">
              <span class="icon">
                <i class="lni lni-package"></i></span>
              <span class="text">Product</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="Orders.php">
              <span class="icon">
                <i class="lni lni-add-files"></i>
              </span>
              <span class="text">Orders</span>
            </a>
          </li>

          <li class="nav-item active" style="background-color: #F2EEEA;">
            <a href="Customers.php">
              <span class="icon" style="color: #FF9C00;">
                <i class="lni lni-users"></i>
              </span>
              <span class="text" style="color: #FF9C00;">Customers</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="CusChat.php">
              <span class="icon">
                <i class="lni lni-package"></i>
              </span>
              <span class="text">CusChat</span>
            </a>
          </li>
          
      <div class="promo-box">
        <h5 style="color:#000000; text-align: left;">Profile</h5>
        <ul>
          <li>
            <a href="index.php">
            <div class="image">
              <img src="assets/images/profile/profile-image.png" alt=""/ style="width: 50px;">
               <span class="status"></span>
              </div>
              <h6>John Doe</h6>
              <p style = "color:#FF9C00;">Shopper</p>
            </a>
          </li>
        </ul>
        <a
          target="_blank"
          rel="nofollow"
          class="main-btn primary-btn btn-hover"
        >
          Log out
        </a>
      </div>

      
    </aside>
    <div class="overlay"></div>



    <main class="main-wrapper">
      <!-- ========== header  ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="header-search d-none d-md-flex">
                  <h3>Orders</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <h6>12th January of 2023, 12:00 pm</h6>

              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->
  
  
          <!-- End Row -->
      <section class="section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12 col-lg-4 col-sm-6">
            <div class="card-style mb-30">
                  <div
                    class="
                      title
                      d-flex
                      flex-wrap
                      align-items-center
                      justify-content-between
                    "
                  >
                  <div class="left">
                    <h6 class="text-medium mb-30"></h6>
                  </div>
                  <div class="right">
                    <div class="select-style-1">
                      <div class="select-position select-sm">
                        <select class="light-bg">
                          <option value="">Today</option>
                          <option value="">Yesterday</option>
                        </select>
                      </div>
                    </div>
                    </div>
                </div>
                
                <!-- End Title -->
                <div class="table-responsive">
                  <table class="table top-selling-table">
                    <thead>
                      <tr>
                        <th>
                          <h6 class="text-sm text-medium">Customer Name</h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                          Customer Email
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                          Orders Count
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                          Successful Deliveries
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                          Total Income
                          </h6>
                        </th>
                        <th class="min-width">
                          <h6 class="text-sm text-medium">
                              
                          </h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">Ahinsa De Silva</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa@gmail.com</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                        <p class="text-sm">Rs.100,000.00</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">Ahinsa De Silva</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa@gmail.com</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                        <p class="text-sm">Rs.100,000.00</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr><tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">Ahinsa De Silva</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa@gmail.com</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                        <p class="text-sm">Rs.100,000.00</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr><tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">Ahinsa De Silva</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa@gmail.com</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                        <p class="text-sm">Rs.100,000.00</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr><tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">Ahinsa De Silva</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa@gmail.com</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                        <p class="text-sm">Rs.100,000.00</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr><tr>
                        <td>
                          <div class="product">
                            <p class="text-sm">Ahinsa De Silva</p>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm">Ahinsa@gmail.com</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                          <p class="text-sm">30 Orders</p>
                        </td>
                        <td>
                        <p class="text-sm">Rs.100,000.00</p>
                        </td>
                        <td>
                            <button
                              class="more-btn ml-10 dropdown-toggle"
                              id="moreAction1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="lni lni-more-alt"></i>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="moreAction1"
                            >
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Remove</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#0" class="text-gray">Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- End Table -->
                </div>
              </div>
            </div>
            <!-- End Col -->
          </div>
        
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

    
    </main>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>

    
  </body>
</html>
