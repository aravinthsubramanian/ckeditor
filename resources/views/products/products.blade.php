<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CKeditor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ url('/admin/dashboard') }}" class="">
                    <h3 class="text-primary"><img width="30" height="30"
                            src="https://img.icons8.com/nolan/64/laravel.png" alt="laravel" />CKeditor</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('/admin/dashboard') }}" class="nav-item nav-link "><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{ url('/admin/admins') }}" class="nav-item nav-link"><i
                            class="bi bi-shield"></i>Admins</a>
                    <a href="{{ url('/admin/users') }}" class="nav-item nav-link"><i
                            class="bi bi-people-fill"></i>Users</a>
                    <a href="{{ url('/admin/catagories') }}" class="nav-item nav-link"><i
                            class="bi bi-layers-fill"></i>Categories</a>
                    <a href="{{ url('/admin/subcatagories') }}" class="nav-item nav-link"><i
                            class="bi bi-stack"></i>Subcategories</a>
                    <a href="{{ url('/admin/products') }}" class="nav-item nav-link" active><i
                            class="bi bi-bag-fill"></i>Products</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::guard('admin')->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a class="dropdown-item" href="{{ route('adminsignout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Log
                                Out<form id="logout-form" action="{{ route('adminsignout') }}" method="POST">
                                    @csrf
                                </form></a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->

            <br>

            {{-- table start --}}
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Product Details</h6>
                            <div class=""><a href="{{ url('/admin/product/add') }}"
                                    class="btn btn-primary">+Add</a></div>
                            <br>

                            @foreach ($products as $product)
                                <div class="card shadow-0 border rounded-3 mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0"
                                                style="width: 15%;height:15%">
                                                <div id="carouselExampleAutoplaying" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner">

                                                        @foreach ($product_image as $image)
                                                            @if ($product->unique_id == $image->unique_id)
                                                                <div class="carousel-item active">
                                                                    <img src="{{ asset('/storage/' . $image->path) }}"class="d-block w-100"
                                                                        alt="...">
                                                                </div>
                                                            @endif
                                                        @endforeach


                                                        {{-- <div class="carousel-item">
                                                        <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?q=80&w=1915&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?q=80&w=1915&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                            class="d-block w-100" alt="...">
                                                    </div> --}}

                                                    </div>
                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#carouselExampleAutoplaying"
                                                        data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#carouselExampleAutoplaying"
                                                        data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col md-6">
                                                <div class="row">
                                                    <div class="d-flex flex-row">
                                                        <div class="col">
                                                            <h3>{{ $product->product }}</h3>
                                                            <h6>{{ '₹' . $product->cost }}</h6>
                                                        </div>
                                                        <div class="d-flex flex-row mt-2 ms-2">
                                                            <a href="{{ url('/admin/product/update/' . $product->id) }}"
                                                                style="margin-right: 3mm"><i
                                                                    class="bi bi-pencil-fill"></i></a>
                                                            <a class="delete"
                                                                href="{{ url('admin/product/delete/' . $product->id) }}"><i
                                                                    class="bi bi-trash-fill"></i></a>

                                                            <form class="delete" action="{{ url('admin/product/delete/' . $product->id) }}" method="GET">
                                                                        @csrf
                                                                        <input type="hidden" name="_method" value="DELETE">
                                                                        <input type="submit" value="Delete User">
                                                                    </form>


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-1 mb-0 text-muted small">
                                                    @foreach ($product_spec as $spec)
                                                        @if ($product->unique_id == $spec->unique_id)
                                                            <span>✦</span><span
                                                                style="padding-left: 1mm;padding-right: 3mm">{{ $spec->specification }}</span>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <br>
                                                <p class="textarea mb-4 mb-md-0">
                                                    {{ $product->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            {{-- table end --}}

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">CKeditor</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">Ambi Aravinth</a>
                            </br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/chart/chart.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>


        <div class="modal" id="confirm">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Are you sure you, want to delete?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" id="delete-btn">Delete</button>
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>




        <script>
            $(".delete").on("submit", function() {
                return confirm("Are you sure?");
            });
        </script>


</body>

</html>
