<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>CKeditor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
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

        <link type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" href="http://example.com/image-uploader.min.css" rel="stylesheet">
        <script type="text/javascript" src="http://example.com/jquery.min.js"></script>
        <script type="text/javascript" src="http://example.com/image-uploader.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        {{-- <!--   Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    </head>

    <body>
        <div class="container-xxl position-relative bg-white d-flex p-0">

            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-light navbar-light">
                    <a class="" href="{{ url('/admin/dashboard') }}">
                        <h3 class="text-primary"><img src="https://img.icons8.com/nolan/64/laravel.png" alt="laravel" width="30" height="30" />CKeditor</h3>
                    </a>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                            </div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0">Jhon Doe</h6>
                            <span>Admin</span>
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <a class="nav-item nav-link " href="{{ url('/admin/dashboard') }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a class="nav-item nav-link" href="{{ url('/admin/admins') }}"><i class="bi bi-shield"></i>Admins</a>
                        <a class="nav-item nav-link" href="{{ url('/admin/users') }}"><i class="bi bi-people-fill"></i>Users</a>
                        <a class="nav-item nav-link" href="{{ url('/admin/catagories') }}" active><i class="bi bi-layers-fill"></i>Categories</a>
                        <a class="nav-item nav-link" href="{{ url('/admin/subcatagories') }}"><i class="bi bi-stack"></i>Subcategories</a>
                        <a class="nav-item nav-link" href="{{ url('/admin/products') }}"><i class="bi bi-bag-fill"></i>Products</a>

                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"><i class="far fa-file-alt me-2"></i>Pages</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a class="dropdown-item" href="signin.html">Sign In</a>
                                <a class="dropdown-item" href="signup.html">Sign Up</a>
                                <a class="dropdown-item" href="404.html">404 Error</a>
                                <a class="dropdown-item" href="blank.html">Blank Page</a>
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
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
                                <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex">{{ Auth::guard('admin')->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                <a class="dropdown-item" href="#">My Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
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

                                <h6 class="mb-4">Add Products</h6>

                                <form name="images-upload-form" method="POST" action="{{ url('admin/product/add') }}" accept-charset="utf-8" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="product">Product</label>
                                        <input class="form-control" id="product" name="product" type="text" value="{{ old('product') }}">
                                        @error('product')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" value="{{ old('description') }}">{{ old('description') }}</textarea>
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
                                    <script type="text/javascript">
                                        CKEDITOR.replace('wysiwyg-editor', {
                                            filebrowserUploadUrl: "{{ route('ckeditor.image-upload', ['_token' => csrf_token()]) }}",
                                            filebrowserUploadMethod: 'form'
                                        });
                                    </script>

                                    <div class="mb-3">
                                        <label class="form-label" for="cost">Cost</label>
                                        <input class="form-control" id="cost" name="cost" type="text" value="{{ old('cost') }}" onfocusout="myFunction()">
                                        @error('cost')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <script>
                                        function myFunction() {
                                            let inputString = parseFloat($("#cost").val());
                                            if (!isNaN(inputString)) {
                                                $('#cost').prop("value", inputString.toFixed(2));
                                            } else {
                                                inputString = 0.00;
                                                $('#cost').prop("value", inputString.toFixed(2));
                                            }
                                        }
                                    </script>

                                    <div class="mb-3">
                                        <label class="form-label" for="main_cat_name">Catagory Name</label>
                                        <select class="form-control select2" id="catagory_name" name="catagory_name" aria-label="Default select example">
                                            <option value="" selected></option>
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
                                        <label class="form-label" for="main_cat_name">Sub Catagory Name</label>
                                        <select class="form-control get_subcategory" id="subcatagory_name" name="subcatagory_name" aria-label="Default select example">
                                            <option value="" selected></option>
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
                                                    url: "{{ route('want_cat_based_subcatagory') }}",
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
                                        });
                                    </script>

                                    <div class="mb-3">
                                        <label class="form-label" for="product_status">Product Status</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="product_status" name="product_status" type="radio" value="enable">
                                            <label class="form-check-label" for="enable">Enabled</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="product_status" name="product_status" type="radio" value="dissable">
                                            <label class="form-check-label" for="disable">Dissabled</label>
                                        </div>
                                        @error('product_status')
                                            <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <table class="table table-borderless" id="dynamicAddRemove">
                                        <tr>
                                            <label class="form-label" for="Specifications">Specifications</label>
                                        </tr>
                                        <tr>
                                            <td><input class="form-control" name="addMoreInputFields[0][specification]" type="text" />
                                            </td>
                                            <td><button class="btn btn-outline-primary" id="dynamic-ar" name="add" type="button">+ Add
                                                </button></td>
                                        </tr>
                                    </table>
                                    @error('addMoreInputFields.*.specification')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <div class="mb-3">
                                        <label class="form-label" for="image">Images</label>
                                        <input class="form-control" id="images" name="images[]" type="file" multiple>
                                    </div>
                                    @error('images.*')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                    @error('images')
                                        <p class='text-danger'>{{ $message }}</p>
                                    @enderror
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="preview">Preview</label>
                                        </div>
                                        <div class="mt-1 text-center">
                                            <div id="image_preview" style="width:100%;"></div>
                                        </div>
                                    </div>
                                    <br>

                                    <button class="btn btn-primary" type="submit">Submit</button>
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
                .img-div {
                    position: relative;
                    width: 20%;
                    /* float: left; */
                    display: inline-block;
                    margin: 1rem 0;
                    justify-content: space-around;
                    margin-right: 5px;
                    margin-left: 5px;
                    margin-bottom: 5px;
                    margin-top: 5px;
                }

                .image {
                    opacity: 1;
                    display: block;
                    width: 100%;
                    max-width: auto;
                    transition: .5s ease;
                    backface-visibility: hidden;
                }

                .middle {
                    transition: .5s ease;
                    opacity: 0;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    text-align: center;
                }

                .img-div:hover .image {
                    opacity: 0.3;
                }

                .img-div:hover .middle {
                    opacity: 1;
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
                $(document).ready(function() {
                    var fileArr = [];

                    $("#images").change(function() {
                        // check if fileArr length is greater than 0
                        if (fileArr.length > 0) fileArr = [];

                        $('#image_preview').html("");
                        var total_file = document.getElementById("images").files;
                        if (!total_file.length) return;
                        for (var i = 0; i < total_file.length; i++) {
                            fileArr.push(total_file[i]);
                            $('#image_preview').append(
                                "<div class='img-div' id='img-div" + i + "'>" +
                                "<img src='" + URL.createObjectURL(event.target.files[i]) +
                                "' class='img-responsive image img-thumbnail' title='" + total_file[i]
                                .name + "'>" +
                                "<div class='middle'>" +
                                "<button id='action-icon' value='img-div" + i +
                                "' class='btn btn-danger' role='" + total_file[i].name + "'>" +
                                "<i class='fa fa-trash'></i>" +
                                "</button>" +
                                "</div>" +
                                "</div>"
                            );
                        }
                    });

                    $('body').on('click', '#action-icon', function(evt) {
                        var divName = this.value;
                        var fileName = $(this).attr('role');
                        $(`#${divName}`).remove();
                        for (var i = 0; i < fileArr.length; i++) {
                            if (fileArr[i].name === fileName) {
                                fileArr.splice(i, 1);
                            }
                        }
                        document.getElementById('images').files = FileListItem(fileArr);
                        evt.preventDefault();
                    });

                    function FileListItem(file) {
                        file = [].slice.call(Array.isArray(file) ? file : arguments)
                        for (var c, b = c = file.length, d = !0; b-- && d;) d = file[b] instanceof File
                        if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
                        for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(file[c])
                        return b.files
                    }
                });
            </script>
    </body>

</html>
