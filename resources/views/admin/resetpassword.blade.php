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
        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><img width="30" height="30"
                                        src="https://img.icons8.com/nolan/64/laravel.png" alt="laravel" />CKeditor</h3>
                            </a>
                            <h3>Reset Password</h3>
                        </div>
                        <form action="{{ route('admin.updatepassword') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" value="{{ old('email') }}">
                                <label for="email">Email address</label>
                                @error('email')
                                    <p class='text-danger'>{{ $message }}</p>
                                @enderror
                            </div>
                            <input type="text" hidden id="token" name="token" value="{{$token}}">
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="new_password" name="new_password"
                                    placeholder="Password">
                                <label for="new_password">New Password</label>
                                @error('new_password')
                                    <p class='text-danger'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="confirm_password"
                                    name="confirm_password" placeholder="Password">
                                <label for="confirm_password">Confirm Password</label>
                                @error('confirm_password')
                                    <p class='text-danger'>{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Change Password</button>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>
