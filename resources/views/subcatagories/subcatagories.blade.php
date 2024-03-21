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


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- JavaScript Libraries -->

</head>

<body>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
                    <a href="{{ url('/admin/subcatagories') }}" class="nav-item nav-link" active><i
                            class="bi bi-stack"></i>Subcategories</a>
                    <a href="{{ url('/admin/products') }}" class="nav-item nav-link"><i
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
                            {{-- <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;"> --}}
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
            {{-- users table start --}}
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Subcatagory Details</h6>
                            <div class=""><a href="{{ url('/admin/subcatagory/add') }}"
                                    class="btn btn-primary">+Add</a></div>
                            <br>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Catagory Name</th>
                                            <th scope="col">Subcatagory Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Created at</th>
                                            <th scope="col">Updated at</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sn = 1; ?>
                                        @foreach ($subcatagory as $subcat)
                                            <tr>
                                                <th scope="row">{{ $sn }}</th>

                                                <td class="getcat{{$sn}}" id="getcat{{$sn}}"></td>

                                                <td>{{ $subcat->subcatagory }}</td>
                                                <td>{{ $subcat->subcatagory_status }}</td>
                                                <td>{{ $subcat->created_at }}</td>
                                                <td>{{ $subcat->updated_at }}</td>
                                                <td>
                                                    <a href="{{ url('/admin/subcatagory/update/' . $subcat->id) }}"
                                                        style="margin-right: 3mm"><i
                                                            class="bi bi-pencil-fill"></i></a>

                                                    <a href="" data-id="{{ $subcat->id }}"
                                                        class="delete-subcategory" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal" style="margin-right: 3mm"><i
                                                            class="bi bi-trash-fill"></i></a>
                                                </td>
                                                 <?php $sn++; ?>
                                            <tr>

                                                <script>
                                                    var i=1;
                                                    $('#get_cat').ready(function() {
                                                        let catid = {{$subcat->catagory}};    
                                                        console.log(catid);
                                                        let csrf = '{{ csrf_token() }}';
                                                        $.ajax({
                                                            method: 'post',
                                                            url: "{{ route('catitoa') }}",
                                                            data: {
                                                                _token: csrf,
                                                                id: catid
                                                            },
                                                            success: function(res) {
                                                                // console.log(res);
                                                                if (res.status == 'success') {
                                                                    let all_categories = res.categories;
                                                                    console.log(all_categories.catagory);
                                                            
                                                                    $('.getcat'+i).html(all_categories.catagory);
                                                                    i++;
                                                                }
                                                            }
                                                        })
                                                    });
                                                </script>
                                                
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- admin table end --}}

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true" data-backdrop="static" role="dialog">
                <div class="modal-dialog">
                    <form id="deleteForm" method="GET">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-body">Are you want to delete?</div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.delete-subcategory').click(function() {
                        var subcategoryId = $(this).data('id');
                        var deleteUrl = "{{ url('/admin/subcatagory/delete/:id') }}";
                        deleteUrl = deleteUrl.replace(':id', subcategoryId);
                        $('#deleteForm').attr('action', deleteUrl);
                    });
                });
            </script>


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

</body>

</html>
