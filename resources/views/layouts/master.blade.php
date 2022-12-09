<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layout Horizontal - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/main/app.css" />
    <link rel="stylesheet" href="assets/css/main/app-dark.css" />
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png" />
    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css" />
    <link rel="stylesheet" href="assets/css/pages/simple-datatables.css" />

    <link rel="stylesheet" href="assets/css/shared/iconly.css" />
    <link rel="stylesheet" href="assets/extensions/filepond/filepond.css" />
    <link
      rel="stylesheet"
      href="assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css"
    />
    <link
      rel="stylesheet"
      href="assets/extensions/toastify-js/src/toastify.css"
    />
    <link rel="stylesheet" href="assets/css/pages/filepond.css" />
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" /></a>
                        </div>
                        <div class="header-top-right">
                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="assets/images/faces/1.jpg" alt="Avatar" />
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name"> {{ \Auth::user()->name ?? 'none'  }}</h6>
                                        <p class="user-dropdown-status text-sm text-muted">
                                            Member
                                        </p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="#">My Account</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li class="dropdown-item">
                                        <a class="sidebar-link" style="color: black" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    </li>
                                </ul>
                            </div>

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container ">
                        <ul>
                            <li class="menu-item">
                                <a href="{{ url('/home') }}" class="menu-link">
                                    <span></i> Home</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ url('/addfile') }}" class="menu-link">
                                    <span></i> Add File</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ url('/biodata') }}" class="menu-link">
                                    <span></i> Biodata</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="index.html" class="menu-link">
                                    <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div class="content-wrapper container">

                <div class="page-content">
                    <section class="row">
                        @yield('main')
                    </section>
                </div>
            </div>

        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/pages/horizontal-layout.js"></script>

    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/js/pages/simple-datatables.js"></script>
</body>

</html>
