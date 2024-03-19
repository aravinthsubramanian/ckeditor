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

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link type="text/css" rel="stylesheet" href="http://example.com/image-uploader.min.css">
    <script type="text/javascript" src="http://example.com/jquery.min.js"></script>
    <script type="text/javascript" src="http://example.com/image-uploader.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
                    <a href="{{ url('/admin/catagories') }}" class="nav-item nav-link" active><i
                            class="bi bi-layers-fill"></i>Categories</a>
                    <a href="{{ url('/admin/subcatagories') }}" class="nav-item nav-link"><i
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
            {{-- users table start --}}
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">

                            <h6 class="mb-4">Edit Products</h6>


                            <form name="images-upload-form" method="POST"
                                action="{{ url('admin/product/update/' . $product->id) }}" accept-charset="utf-8"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="product" class="form-label">Product</label>
                                    <input type="text" class="form-control" id="product" name="product"
                                        value="{{ $product->product }}">
                                    @error('product')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#description'))
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>


                                <div class="mb-3">
                                    <label for="cost" class="form-label">Cost</label>
                                    <input type="text" class="form-control" id="cost" name="cost"
                                        value="{{ $product->cost }}">
                                    @error('cost')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="main_cat_name" class="form-label">Catagory Name</label>
                                    <select class="form-control select2" aria-label="Default select example"
                                        id="catagory_name" name="catagory_name">
                                        <option value="{{ $product->catagory }}" selected>{{ $product->catagory }}
                                        </option>
                                        @foreach ($catagory as $cata)
                                            @if ($cata->catagory_status == 'enable')
                                                <option value="{{ $cata->id }}">{{ $cata->catagory }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('catagory_name')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="main_cat_name" class="form-label">Sub Catagory Name</label>
                                    <select class="form-control get_subcategory" aria-label="Default select example"
                                        id="subcatagory_name" name="subcatagory_name">
                                        <option value="{{ $product->subcatagory }}" selected>
                                            {{ $product->subcatagory }}</option>
                                    </select>
                                    @error('subcatagory_name')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                </div>

                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function() {

                                        $(document).on('change', '#catagory_name', function() {
                                            let catagory_id = $(this).val();
                                            let csrf = '{{ csrf_token() }}';
                                            console.log(catagory_id);
                                            $.ajax({
                                                method: 'post',
                                                url: "{{ route('wantsubcatagory') }}",
                                                data: {
                                                    _token: csrf,
                                                    id: catagory_id
                                                },
                                                success: function(res) {
                                                    console.log(res);
                                                    if (res.status == 'success') {
                                                        let all_options = "<option value=''></option>";
                                                        let all_subcategories = res.subcategories;
                                                        $.each(all_subcategories, function(index, value) {
                                                            all_options += "<option value='" + value.id + "'>" +
                                                                value.subcatagory + "</option>";
                                                        });
                                                        $(".get_subcategory").html(all_options);
                                                    }
                                                }
                                            })
                                        });

                                        // $(document).on('onload', '#subcatagory_name', function() {
                                        
                                        
                                        $('#subcatagory_name').ready(function() {
                                            let catagory_id = $('#catagory_name').val();
                                            let subcatagory_id = $('#subcatagory_name').val();
                                            let csrf = '{{ csrf_token() }}';
                                            console.log(catagory_id);
                                            $.ajax({
                                                method: 'post',
                                                url: "{{ route('wantsubcatagory') }}",
                                                data: {
                                                    _token: csrf,
                                                    id: catagory_id
                                                },
                                                success: function(res) {
                                                    console.log(res);
                                                    if (res.status == 'success') {
                                                        let all_options = "<option value='"+subcatagory_id+"'>"+subcatagory_id+"</option>";
                                                        let all_subcategories = res.subcategories;
                                                        $.each(all_subcategories, function(index, value) {
                                                            all_options += "<option value='" + value.id + "'>" +
                                                                value.subcatagory + "</option>";
                                                        });
                                                        $(".get_subcategory").html(all_options);
                                                    }
                                                }
                                            })
                                        });
                                    });
                                </script>


                                <div class="mb-3">
                                    <label for="product_status" class="form-label">Product Status</label><br>
                                    @if ($product->status == 'enable')
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="product_status"
                                                id="product_status" value="enable" checked>
                                            <label class="form-check-label" for="enable">Enabled</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="product_status"
                                                id="product_status" value="dissable">
                                            <label class="form-check-label" for="disable">Dissabled</label>
                                        </div>
                                        @error('product_status')
                                            <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    @endif
                                    @if ($product->status == 'dissable')
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="product_status"
                                                id="product_status" value="enable">
                                            <label class="form-check-label" for="enable">Enabled</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="product_status"
                                                id="product_status" value="dissable" checked>
                                            <label class="form-check-label" for="disable">Dissabled</label>
                                        </div>
                                        @error('product_status')
                                            <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    @endif
                                </div>


                                
                                <table class="table table-borderless" id="dynamicAddRemove">
                                    <tr>
                                        <label for="Specifications" class="form-label">Specifications</label>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="addMoreInputFields[0][specfication]"
                                                class="form-control" />
                                        </td>
                                        <td><button type="button" name="add" id="dynamic-ar"
                                                class="btn btn-outline-primary">+ Add
                                            </button></td>
                                    </tr>
                                </table>


                                <div class="mb-3">
                                    <label for="image" class="form-label">Images</label>
                                    <input type="file" class="form-control" name="images[]" id="images"
                                        placeholder="Choose images" multiple>
                                    @error('images')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="preview" class="form-label">Preview</label>
                                    </div>
                                    <div class="mt-1 text-center">
                                        <div class="images-preview-div"> </div>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
            {{-- admin table end --}}

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

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            var i = 0;
            $("#dynamic-ar").click(function() {
                ++i;
                $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                    '][specification]" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                );
            });
            $(document).on('click', '.remove-input-field', function() {
                $(this).parents('tr').remove();
            });
        </script>

        <style>
            .images-preview-div img {
                padding: 10px;
                max-width: 100px;
            }

            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }
        </style>

        <script>
            $(function() {
                // Multiple images preview with JavaScript
                var previewImages = function(input, imgPreviewPlaceholder) {
                    if (input.files) {
                        var filesAmount = input.files.length;
                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();
                            reader.onload = function(event) {
                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                    imgPreviewPlaceholder);
                            }
                            reader.readAsDataURL(input.files[i]);
                        }
                    }
                };

                $('#images').on('change', function() {
                    previewImages(this, 'div.images-preview-div');
                });

            });
        </script>
</body>

</html>
