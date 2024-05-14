<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Ashish S. Maharjan" />
    <meta name="robots" content="index, follow" />
    <meta
      name="description"
      content="adminAM - Bootstrap 5 Admin Template with Dashboard Demo"
    />
    <meta
      name="keywords"
      content="adminAM, Bootstrap 5.3.2, HTML, CSS, SASS, JavaScript, Admin template, Dashboard template"
    />
    <!-- for PWA -->
    <meta name="theme-color" content="white" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Hello World App" />
    <meta
      name="msapplication-TileImage"
      content="{{asset("static/img/favicons/android-chrome-192x192.png")}}"
    />
    <meta name="msapplication-TileColor" content="#FFFFFF" />

    <title>Admin-{{ $title }}</title>
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">
    @yield('head')
    <!-- <meta http-equiv="refresh" content="5"/> -->

    <!-- CSS -->
    <link href="{{asset("static/css/bootstrap.min.css")}}" rel="stylesheet" />
    <link href="{{asset("static/css/style.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/lightbox.min.css")}}" rel="stylesheet" />

    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      href="{{asset("static/img/favicons/apple-touch-icon.png")}}"
      sizes="120x120"
    />
    <link
      rel="icon"
      href="{{asset("static/img/favicons/favicon-32x32.png")}}"
      sizes="32x32"
      type="image/png"
    />
    <link
      rel="icon"
      href="{{asset("static/img/favicons/favicon-16x16.png")}}"
      sizes="16x16"
      type="image/png"
    />
    <link rel="icon" href="{{asset("static/img/favicons/favicon.ico")}}" />

    <!-- jvectormap -->
    <link
      rel="stylesheet"
      href="{{asset("static/css/jquery-jvectormap-2.0.5.css")}}"
      type="text/css"
      media="screen"
    />

    <!-- google sitemap -->
    <meta
      name="google-site-verification"
      content="QI5mxFBO2xqf2NLOetb1-a68pb2gXVZpWgBnWKIN8RQ"
    />
  </head>

  <body>
    <div class="wrapper d-flex h-100">
      <!-- #mainSidebar -->

      <nav id="mainSidebar" class="h-100">
        <div class="d-flex flex-column flex-shrink-0 p-3">
          <!-- first a -->
          <div
            class="d-flex align-items-center justify-content-between mb-3 mb-md-0 me-md-auto w-100"
          >
            <!-- logo for LG screen -->
            <span class="fs-4 logo-lg only-d-lg">
              <a href="index.html">
                <img src="{{asset("static/img/logo-100x25.png")}}" alt="" />
              </a>
            </span>
            <!-- logo for SM screen -->
            <span class="fs-4 logo-sm only-d-sm">
              <img src="{{asset("static/img/logo-40x25.png")}}" alt="" />
            </span>

            <!-- for SM screen - close -->
            <span class="d-none" id="sidebarUntoggleBtn">
              <i class="bi bi-x-circle-fill"></i>
            </span>
          </div>
          <!-- first a ends -->
          <hr />
          <ul class="nav nav-pills flex-column mb-auto">
            <!-- accounts -->
            <p class="mt-2 mb-1 text-secondary text-small">DASHBOARD</p>
            <li class="nav-item">
              <a href="{{route('home')}}" class="nav-link active" aria-current="page">
                <i class="bi bi-house-door-fill me-2"></i>
                Home v.1
              </a>
            </li>
            <!-- todo -->
            <li class="d-none">
              <a href="index.html#" class="nav-link">
                <i class="bi bi-marker-tip me-2"></i>
                Widgets
              </a>
            </li>
            <!-- todo -->
            <li class="d-none">
              <a href="index.html#" class="nav-link">
                <i class="bi bi-ui-checks-grid me-2"></i>
                Forms
              </a>
            </li>
            <!-- products -->
            <p class="mt-2 mb-1 text-secondary text-small">PRODUCTS</p>
            <li>
              <a href="{{route('products.index')}}" class="nav-link">
                <i class="bi bi-table me-2"></i>
                Products
              </a>
            </li>
            <li>
              <a href="{{route('categories.index')}}" class="nav-link">
                <i class="bi bi-bank me-2"></i>
                Categories
              </a>
            </li>
            <li>
              <a href="{{route('subcategories.index')}}" class="nav-link">
                <i class="bi bi-receipt me-2"></i>
                Subcategories
              </a>
            </li>
            <li>
              <a href="{{url('todos')}}" class="nav-link">
                <i class="bi bi-receipt me-2"></i>
                Todos
              </a>
            </li>

            <!-- accounts -->
            <p class="mt-2 mb-1 text-secondary text-small">ACCOUNTS</p>
            <li>
{{--               <a href="accounts/login/index.html" class="nav-link">
                <i class="bi bi-box-arrow-right me-2"></i>
                Sign in
              </a> --}}
              {{--  --}}
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link" href="#" onclick="event.preventDefault();this.closest('form').submit();">
                    <i class="bi bi-box-arrow-right me-2"></i> Log Out</a>
            </form>
              {{--  --}}
            </li>
            <li>
              <a href="{{route('profile.edit')}}" class="nav-link">
                <i class="bi bi-person-circle me-2"></i>
                My Profile
              </a>
            </li>
            {{-- <li>
              <a href="accounts/registration/index.html" class="nav-link">
                <i class="bi bi-at me-2"></i>
                Registration
              </a>
            </li> --}}
            <!-- Theme -->
            <p class="mt-2 mb-1 text-secondary text-small">THEME</p>
            <li>
              <a href="components/index.html" class="nav-link">
                <i class="bi bi-file-font me-2"></i>
                Components
              </a>
            </li>
            <!-- others -->
            <p class="mt-2 mb-1 text-secondary text-small">OTHERS</p>
            <li>
              <a href="404/index.html" class="nav-link">
                <i class="bi bi-4-circle-fill me-2"></i>
                404
              </a>
            </li>
            <li>
              <a href="blank-page/index.html" class="nav-link">
                <i class="bi bi-file-earmark-fill me-2"></i>
                Blank Page
              </a>
            </li>
            <li>
              <!-- "sys logs = timeline" -->
              <a href="system-logs/index.html" class="nav-link">
                <i class="bi bi-body-text me-2"></i>
                Sys Logs
              </a>
            </li>
            <li>
              <a href="faq/index.html" class="nav-link">
                <i class="bi bi-person-raised-hand me-2"></i>
                FAQ
              </a>
            </li>
            <li>
              <a href="documentation/index.html" class="nav-link">
                <i class="bi bi-file-earmark-text me-2"></i>
                Documentation
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- #mainSidebar ends -->

      <!-- #pageContent -->
      <div id="pageContent" class="d-flex flex-column">
        <!-- topnav -->

        <div id="topNavigation" class="px-3 py-2">
          <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
              <!-- nav-left, breadcrumb -->
              <a
                href="index.html#"
                class="nav-left d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none"
              >
                <i class="bi bi-list" id="sidebarToggleBtn"></i>
              </a>

              <div class="d-flex justify-content-end align-items-center">
                <!-- search form -->
                <form
                  class="col-xl-4 col-md-auto col-lg-auto mb-0 me-xl-3"
                  role="search"
                >
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="search here"
                    />
                    <a class="btn" href="search-results/index.html">
                      <i class="bi bi-search"></i>
                    </a>
                  </div>
                </form>

                <!-- nav-right -->
                <div class="nav-right col-md-auto col-lg-auto my-2">
                  <!-- nav -->
                  <ul class="nav">
                    <!-- Home icon for sm screen -->
                    <li class="only-d-sm">
                      <a href="index.html" class="nav-link text-white">
                        <i class="bi bi-house-door-fill"></i>
                      </a>
                    </li>

                    <!-- Email -->
                    <li>
                      <a href="mail/index.html" class="nav-link text-white">
                        <i class="bi bi-envelope">
                          <span
                            class="position-absolute top-0 start-100 translate-middle p-1 bg-info rounded-circle"
                          >
                            <span class="visually-hidden">New alerts</span>
                          </span>
                        </i>
                      </a>
                    </li>
                    <!-- notification -->
                    <li>
                      <a
                        href="index.html#"
                        class="nav-link text-white"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="bi bi-bell">
                          <span
                            class="position-absolute top-0 start-100 translate-middle p-1 bg-info rounded-circle"
                          >
                            <span class="visually-hidden">New alerts</span>
                          </span>
                        </i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="messenger/index.html">
                            <small
                              ><i class="bi bi-envelope me-2"></i>10 new
                              messages</small
                            >
                          </a>
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="single-page/index.html"
                          >
                            <small
                              ><i class="bi bi-file-pdf me-2"></i>5 new
                              reports</small
                            >
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- for profile page -->
                    <li>
                      <a
                        href="index.html#"
                        class="nav-link text-white"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="bi bi-person-circle"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a class="dropdown-item" href="javascript:void(0)">
                            <small>
                              <i class="bi bi-person-fill me-2"></i>{{ Auth::user()->name }}
                            </small>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{route('profile.edit')}}">
                            <small>
                              <i class="bi bi-person-fill me-2"></i>My Profile
                            </small>
                          </a>
                        </li>
                        <li>
                          <a
                            class="dropdown-item"
                            href="system-logs/index.html"
                          >
                            <small>
                              <i class="bi bi-body-text me-2"></i>Acitivity Log
                            </small>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="profile/index.html">
                            <small>
                              <i class="bi bi-gear-fill me-2"></i>Settings
                            </small>
                          </a>
                        </li>
                        <!-- <hr class="my-1"> -->
                        <div class="divider my-1"></div>
                        {{-- <li>
                          <a
                            class="dropdown-item"
                            href="accounts/login/index.html"
                          >
                            <small>
                              <i class="bi bi-box-arrow-right me-2"></i>Sign out
                            </small>
                          </a>
                        </li> --}}
                        <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();this.closest('form').submit();">
                                <small>
                                    <i class="bi bi-box-arrow-right me-2"></i>Log Out
                                </small>
                            </a>
                        </form>
                    </li>
                      </ul>
                    </li>
                    <!-- for modal applications -->
                    <li>
                      <a
                        href="index.html#"
                        class="nav-link text-white"
                        data-bs-toggle="modal"
                        data-bs-target="#modalApplication"
                      >
                        <i class="bi bi-boxes"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- topnav ends -->

        <div class="container-fluid px-4">
          <!-- section searchForMobile -->
          <div class="row my-4 sm-my-3 sm-mt-0" id="searchForMobile">
            <div class="col">
              <form>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control form-control-dark text-bg-dark text-white"
                    value="search here"
                  />
                  <a class="btn" href="search-results/index.html">
                    <i class="bi bi-search"></i>
                  </a>
                </div>
              </form>
            </div>
          </div>
          <!-- section searchForMobile ends -->

          <!-- main_content -->

          <!-- page title -->
          <div class="pageTitle pt-3 pb-3 md-pt-0">
            <h3 class="md-mb-0">{{$title}}</h3>
            {{-- <div class="btn-toolbar mb-2">
              <div class="btn-group me-2">
                <button
                  id="generateReport"
                  type="button"
                  class="btn btn-sm btn-outline-secondary"
                  data-bs-toggle="modal"
                  data-bs-target="#modalGenerateReport"
                >
                  Report
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  Export
                </button>
              </div>
              <button
                type="button"
                class="btn btn-sm btn-outline-secondary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span data-feather="calendar"></span>
                More options
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="index.html#">
                    <small>
                      <i class="bi bi-1-square me-2"></i>
                      Option one
                    </small>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="index.html#">
                    <small>
                      <i class="bi bi-2-square me-2"></i>
                      Option two
                    </small>
                  </a>
                </li>
              </ul>
            </div> --}}
          </div>
          <!-- page title ends -->
<div class="row mt-4 sm-mt-0">
    @yield('content')
</div>
          

          <!-- row for cardQuickInfo -->
          {{-- <div class="row mt-4 sm-mt-3" id="sectionDashboardQuickInfo">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 sm-mb-3">
              <div class="card cardQuickInfo">
                <div class="card-body">
                  <div>
                    <h3>$ 200K</h3>
                    <p>Total earnings</p>
                  </div>
                  <div>
                    <i class="bi bi-currency-dollar"></i>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a href="sales/index.html"
                    >Read more <i class="bi bi-arrow-right-circle"></i
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 sm-mb-3">
              <div class="card cardQuickInfo">
                <div class="card-body">
                  <div>
                    <h3>29%</h3>
                    <p>Total bounce rate</p>
                  </div>
                  <div>
                    <i class="bi bi-globe-americas"></i>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a href="single-page/index.html"
                    >Read more <i class="bi bi-arrow-right-circle"></i
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 sm-mb-3">
              <div class="card cardQuickInfo">
                <div class="card-body">
                  <div>
                    <h3>499</h3>
                    <p>New users registration</p>
                  </div>
                  <div>
                    <i class="bi bi-person-fill-add"></i>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a href="single-page/index.html"
                    >Read more <i class="bi bi-arrow-right-circle"></i
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 sm-mb-3">
              <div class="card cardQuickInfo">
                <div class="card-body">
                  <div>
                    <h3>$ 10.5k</h3>
                    <p>Yearly expense report</p>
                  </div>
                  <div>
                    <i class="bi bi-receipt"></i>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a href="expenses/index.html"
                    >Read more <i class="bi bi-arrow-right-circle"></i
                  ></a>
                </div>
              </div>
            </div>
          </div> --}}
          <!-- row for cardQuickInfo ends -->

          {{-- <div class="row mt-4 sm-mt-0">
            <div class="col-lg-8">
              <!-- purhcase_sales_history -->
              <div class="card sm-mb-3">
                <div class="card-body">
                  <h6 class="card-title">Purchase & Sales History</h6>
                  <canvas
                    id="lineChartExampleOne"
                    style="height: 350px; width: 100%"
                  ></canvas>
                </div>
              </div>
              <!-- purhcase_sales_history ends -->

              <!-- internal_projects -->
              <div class="card mt-4 sm-mt-0">
                <div class="card-header py-3">
                  <h6 class="m-0">Internal Projects</h6>
                </div>
                <div class="card-body">
                  <p class="small d-flex justify-content-between">
                    Social Media Marketing <span class="float-right">80%</span>
                  </p>
                  <div class="progress mb-4">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 80%"
                    ></div>
                  </div>

                  <p class="small d-flex justify-content-between">
                    AWS migration <span class="float-right">20%</span>
                  </p>
                  <div class="progress mb-4">
                    <div
                      class="progress-bar bg-danger"
                      role="progressbar"
                      style="width: 20%"
                    ></div>
                  </div>

                  <p class="small d-flex justify-content-between">
                    Payment Gateway Asia <span class="float-right">60%</span>
                  </p>
                  <div class="progress mb-4">
                    <div
                      class="progress-bar bg-warning"
                      role="progressbar"
                      style="width: 60%"
                    ></div>
                  </div>

                  <p class="small d-flex justify-content-between">
                    DE Warehouse Setup <span class="float-right">90%</span>
                  </p>
                  <div class="progress mb-4">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 90%"
                    ></div>
                  </div>

                  <p class="small d-flex justify-content-between">
                    SAP-ERP System <span class="float-right">5%</span>
                  </p>
                  <div class="progress mb-4">
                    <div
                      class="progress-bar bg-danger"
                      role="progressbar"
                      style="width: 5%"
                    ></div>
                  </div>
                </div>
              </div>
              <!-- internal_projects ends -->

              <!-- user_demographics -->
              <div class="card mt-4 sm-mt-3">
                <div class="card-header py-3">
                  <h6 class="m-0">User Demographics</h6>
                </div>
                <div class="card-body p-0">
                  <div id="world-map" style="width: 100%; height: 400px"></div>
                </div>
              </div>
              <!-- user_demographics ends -->
            </div>

            <div class="col-lg-4 col-sm-12 col-xs-12">
              <!-- visitors' browser -->
              <div class="card sm-mt-3">
                <div class="card-body">
                  <h6 class="card-title">Visitors' Browser</h6>
                  <div class="d-flex justify-content-center">
                    <canvas
                      id="visitorBrowser"
                      style="height: 300; width: 300"
                    ></canvas>
                  </div>
                  <!-- table  -->
                  <table class="table table-responsive mt-4">
                    <tr>
                      <td>
                        <i
                          class="bi bi-circle-fill bg-dark me-2"
                          style="color: #dc3545"
                        ></i>
                        Safari
                      </td>
                      <td>10%</td>
                    </tr>

                    <tr>
                      <td>
                        <i
                          class="bi bi-circle-fill bg-dark me-2"
                          style="color: #ffda6a"
                        ></i>
                        Chrome
                      </td>
                      <td>21%</td>
                    </tr>

                    <tr>
                      <td>
                        <i
                          class="bi bi-circle-fill bg-dark me-2"
                          style="color: #20c997"
                        ></i>
                        IE
                      </td>
                      <td>19%</td>
                    </tr>

                    <tr>
                      <td>
                        <i
                          class="bi bi-circle-fill bg-dark me-2"
                          style="color: #6f42c1"
                        ></i>
                        Opera
                      </td>
                      <td>5%</td>
                    </tr>

                    <tr>
                      <td>
                        <i
                          class="bi bi-circle-fill bg-dark me-2"
                          style="color: #fd7e14"
                        ></i>
                        Firefox
                      </td>
                      <td>42%</td>
                    </tr>

                    <tr>
                      <td>
                        <i
                          class="bi bi-circle-fill bg-dark me-2"
                          style="color: #6610f2"
                        ></i>
                        Others
                      </td>
                      <td>3%</td>
                    </tr>
                  </table>
                </div>
              </div>
              <!-- visitors' browser ends -->

              <!-- recently added products -->

              <div class="card mt-4 sm-mt-3">
                <div class="card-body">
                  <h6 class="card-title">Recently added products</h6>

                  <div class="media">
                    <img
                      src="static/img/products/P001.png"
                      height="50px"
                      width="50px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        Smartphone X
                        <span>$149.99</span>
                      </h6>
                      <p>High-performance smartphone.</p>
                    </div>
                  </div>

                  <div class="media">
                    <img
                      src="static/img/products/P005.png"
                      height="50px"
                      width="50px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        Digital Camera
                        <span>$79.99</span>
                      </h6>
                      <p>
                        Capture moments with high-resolution digital imaging.
                      </p>
                    </div>
                  </div>

                  <div class="media">
                    <img
                      src="static/img/products/P003.png"
                      height="50px"
                      width="50px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        Fitness Tracker
                        <span>$1599.99</span>
                      </h6>
                      <p>Track your fitness activities.</p>
                    </div>
                  </div>

                  <div class="media">
                    <img
                      src="static/img/products/P009.png"
                      height="50px"
                      width="50px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        Smart Light Bulbs
                        <span>$49.99</span>
                      </h6>
                      <p>Adjustable lighting with smart connectivity.</p>
                    </div>
                  </div>

                  <div class="media">
                    <img
                      src="static/img/products/P002.png"
                      height="50px"
                      width="50px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        Laptop Pro
                        <span>$129.99</span>
                      </h6>
                      <p>Powerful laptop for professional use.</p>
                    </div>
                  </div>

                  <div class="media">
                    <img
                      src="static/img/products/P004.png"
                      height="50px"
                      width="50px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        Wireless Headphones
                        <span>$199.99</span>
                      </h6>
                      <p>With immersive audio experience.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- recently added products ends -->
            </div>
          </div> --}}

          <!-- For messenger, and order status -->
          {{-- <div class="row">
            <div class="col-lg-3">
              <div class="card mt-4 sm-mt-3">
                <div class="card-body">
                  <h6
                    class="card-title d-flex justify-content-between align-items-center"
                  >
                    Messages
                    <small>
                      <a href="messenger/index.html" class="amj-a">Read all</a>
                    </small>
                  </h6>

                  <div class="media py-2 my-2">
                    <img
                      src="static/img/profile/profile-1.jpg"
                      class="rounded-circle me-3"
                      height="45px"
                      width="45px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        John Doe
                        <span>Jan. 1, 2024</span>
                      </h6>
                      <p>Hello, how are you doing today?</p>
                    </div>
                  </div>
                  <div class="divider"></div>

                  <div class="media py-2 my-2">
                    <img
                      src="static/img/profile/profile-2.jpg"
                      class="rounded-circle me-3"
                      height="45px"
                      width="45px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        Alice Smith
                        <span>Feb. 15, 2024</span>
                      </h6>
                      <p>Sending a quick update on our project.</p>
                    </div>
                  </div>
                  <div class="divider"></div>

                  <div class="media py-2 my-2">
                    <img
                      src="static/img/profile/profile-3.jpg"
                      class="rounded-circle me-3"
                      height="45px"
                      width="45px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        Bob Johnson
                        <span>Mar. 10, 2024</span>
                      </h6>
                      <p>Friendly reminder about our upcoming meeting.</p>
                    </div>
                  </div>
                  <div class="divider"></div>

                  <div class="media py-2 my-2">
                    <img
                      src="static/img/profile/profile-4.jpg"
                      class="rounded-circle me-3"
                      height="45px"
                      width="45px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        Eva Williams
                        <span>Apr. 5, 2024</span>
                      </h6>
                      <p>Wishing you a fantastic and joyful birthday!</p>
                    </div>
                  </div>
                  <div class="divider"></div>

                  <div class="media py-2 my-2">
                    <img
                      src="static/img/profile/profile-5.jpg"
                      class="rounded-circle me-3"
                      height="45px"
                      width="45px"
                      alt=""
                    />
                    <div class="media-body">
                      <h6 class="mt-0">
                        Jane Doe
                        <span>May 20, 2024</span>
                      </h6>
                      <p>Just wanted to say a quick hello!</p>
                    </div>
                  </div>
                  <div class="divider"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="card mt-4 sm-mt-3">
                <div class="card-body table-responsive">
                  <h6 class="card-title">Order Status</h6>
                  <div class="table-responsive">
                    <table class="table overflow-scroll table-hover">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Client</th>
                          <th>Order no</th>
                          <th>Product</th>
                          <th>Selling price</th>
                          <th>Payment mode</th>
                          <th>Date</th>
                          <th>Payment status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <input class="form-check-input" type="checkbox" />
                          </td>
                          <td class="d-flex align-items-center">
                            <span class="nameInitial">JD</span>&nbsp;&nbsp;John
                            Doe
                          </td>
                          <td>ORD123456</td>
                          <td>Example Product</td>
                          <td>49.99</td>
                          <td>Credit Card</td>
                          <td>2023-01-01</td>
                          <td>
                            <div class="badge badge-outline-success">
                              Approved
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input class="form-check-input" type="checkbox" />
                          </td>
                          <td class="d-flex align-items-center">
                            <span class="nameInitial">JS</span>&nbsp;&nbsp;Jane
                            Smith
                          </td>
                          <td>ORD789012</td>
                          <td>Another Product</td>
                          <td>29.99</td>
                          <td>PayPal</td>
                          <td>2023-02-15</td>
                          <td>
                            <div class="badge badge-outline-danger">Failed</div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input class="form-check-input" type="checkbox" />
                          </td>
                          <td class="d-flex align-items-center">
                            <span class="nameInitial">BJ</span>&nbsp;&nbsp;Bob
                            Johnson
                          </td>
                          <td>ORD345678</td>
                          <td>Special Item</td>
                          <td>99.99</td>
                          <td>Debit Card</td>
                          <td>2023-03-20</td>
                          <td>
                            <div class="badge badge-outline-success">
                              Approved
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input class="form-check-input" type="checkbox" />
                          </td>
                          <td class="d-flex align-items-center">
                            <span class="nameInitial">AB</span>&nbsp;&nbsp;Alice
                            Brown
                          </td>
                          <td>ORD901234</td>
                          <td>Unique Product</td>
                          <td>59.99</td>
                          <td>Bank Transfer</td>
                          <td>2023-04-10</td>
                          <td>
                            <div class="badge badge-outline-warning">
                              Pending
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <input class="form-check-input" type="checkbox" />
                          </td>
                          <td class="d-flex align-items-center">
                            <span class="nameInitial">CG</span
                            >&nbsp;&nbsp;Charlie Green
                          </td>
                          <td>ORD567890</td>
                          <td>Special Edition</td>
                          <td>79.99</td>
                          <td>Credit Card</td>
                          <td>2023-05-25</td>
                          <td>
                            <div class="badge badge-outline-success">
                              Approved
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}

          <!-- main_content ends -->
        </div>

        <!-- footer -->
        <!-- divider for footer -->
        <div class="mt-4 sm-mt-3"></div>
        <!-- divider for footer ends -->
        <footer class="py-3 mt-auto container-fluid">
          <div class="row">
            <div class="col text-small">
              <span class="mb-3 mb-md-0">© Your Company | 2024</span>
            </div>
            <div class="col text-small text-end">
              <span class="mb-3 mb-md-0">
                Designed by
                <a
                  href="https://github.com/asis2016/bootstrap-5-admin-template"
                >
                  <span class="only-d-lg"
                    >adminAM - Bootstrap 5 Admin Template</span
                  >
                  <span class="only-d-sm">adminAM</span>
                </a>
              </span>
            </div>
          </div>
        </footer>
        <!-- footer ends -->
      </div>
      <!-- #pageContent ends -->
    </div>

    <!-- modal for application -->
    <div class="modal" id="modalApplication" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h6 class="modal-title">All Applications</h6>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <!-- Modal body for lg screen -->
          <div class="modal-body sm-d-none modal-body-lg">
            <div class="row">
              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-cart-plus"></i>
                  <p class="py-2 mb-0">Addon Domains</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-door-open"></i>
                  <p class="py-2 mb-0">Authentication</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-copy"></i>
                  <p class="py-2 mb-0">Backup Wizard</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-calendar3"></i>
                  <p class="py-2 mb-0">Calendar</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-person-lines-fill"></i>
                  <p class="py-2 mb-0">Contact</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-database"></i>
                  <p class="py-2 mb-0">DBMS</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-diagram-3"></i>
                  <p class="py-2 mb-0">Diagram</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-folder"></i>
                  <p class="py-2 mb-0">Directory Privacy</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-envelope-at-fill"></i>
                  <p class="py-2 mb-0">Email Accounts</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-key-fill"></i>
                  <p class="py-2 mb-0">Encryption</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-file-earmark-binary"></i>
                  <p class="py-2 mb-0">File Manager</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-images"></i>
                  <p class="py-2 mb-0">Gallery</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-question-circle"></i>
                  <p class="py-2 mb-0">Help</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-mailbox"></i>
                  <p class="py-2 mb-0">Mailing Lists</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-geo-fill"></i>
                  <p class="py-2 mb-0">Maps</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-person-badge"></i>
                  <p class="py-2 mb-0">Profile</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-box-arrow-up-left"></i>
                  <p class="py-2 mb-0">Redirects</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-gear-wide-connected"></i>
                  <p class="py-2 mb-0">Settings</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-globe"></i>
                  <p class="py-2 mb-0">Subdomains</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-display"></i>
                  <p class="py-2 mb-0">System Monitor</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-bar-chart-line"></i>
                  <p class="py-2 mb-0">System Settings</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-people"></i>
                  <p class="py-2 mb-0">Management</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-braces-asterisk"></i>
                  <p class="py-2 mb-0">WYSIWYG</p>
                </a>
              </div>

              <div class="col-lg-2 text-center p-4">
                <a href="single-page/index.html" class="box">
                  <i class="bi bi-book"></i>
                  <p class="py-2 mb-0">Zone Editor</p>
                </a>
              </div>
            </div>
          </div>
          <!-- Modal body for lg screen ends -->
          <!-- todo -->
          <div class="modal-body modal-body-sm">
            <ul class="list-group">
              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-cart-plus"></i>
                  Addon Domains
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-door-open"></i>
                  Authentication
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-copy"></i>
                  Backup Wizard
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-calendar3"></i>
                  Calendar
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-person-lines-fill"></i>
                  Contact
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-database"></i>
                  DBMS
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-diagram-3"></i>
                  Diagram
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-folder"></i>
                  Directory Privacy
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-envelope-at-fill"></i>
                  Email Accounts
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-key-fill"></i>
                  Encryption
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-file-earmark-binary"></i>
                  File Manager
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-images"></i>
                  Gallery
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-question-circle"></i>
                  Help
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-mailbox"></i>
                  Mailing Lists
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-geo-fill"></i>
                  Maps
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-person-badge"></i>
                  Profile
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-box-arrow-up-left"></i>
                  Redirects
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-gear-wide-connected"></i>
                  Settings
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-globe"></i>
                  Subdomains
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-display"></i>
                  System Monitor
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-bar-chart-line"></i>
                  System Settings
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-people"></i>
                  Management
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-braces-asterisk"></i>
                  WYSIWYG
                </a>
              </li>

              <li class="list-group-item">
                <a href="index.html#" class="amj-a">
                  <i class="bi bi-book"></i>
                  Zone Editor
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- modal for application ends -->

    <!-- modal for generate report -->
    <div class="modal" id="modalGenerateReport" tabindex="-1">
      <div
        class="d-flex flex-column justify-content-center align-items-center modal-dialog modal-dialog-centered modal-xl text-center"
      >
        <div
          class="spinner-grow text-danger"
          style="width: 4rem; height: 4rem"
          role="status"
        >
          <span class="sr-only"></span>
        </div>
        <p class="mb-0 mt-4 sm-mt-3">Generating report...</p>
        <p>Just a demo, skip by pressing anywhere.</p>
      </div>
    </div>
    <!-- modal for generate report ends -->

    <!-- jquery -->
    <script src="{{asset("assets/js/jquery-3.7.1.min.js")}}"></script>
    <!-- bootstrap.bundle.min.js -->
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    {{-- lightbox js --}}
    <script src="{{asset("assets/js/lightbox.min.js")}}"></script>
    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- jvectormap -->
    {{-- <script src="{{asset("static/js/jquery-jvectormap-2.0.5.min.js")}}"></script> --}}
    {{-- <script src="{{asset("static/js/jquery-jvectormap-world-mill-en.js")}}"></script> --}}
    <!-- ploty -->
    {{-- <script src="https://cdn.plot.ly/plotly-latest.min.js"></script> --}}
    <!-- script.js -->
    <script src="{{asset("static/js/script.js")}}"></script>

    {{-- <script src="{{asset("static/js/dashboard.js")}}"></script> --}}
    {{-- <script src="{{asset("static/js/user-demographics.js")}}"></script> --}}
    @yield('script')
  </body>
</html>
