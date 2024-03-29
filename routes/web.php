<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthUser;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ForgotpasswordController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaginationController;
use App\Http\Middleware\UserCheck;


//GET Routes for View Blade Pages...............................................................
Route::get('/', function () {
    return view('welcome');
})->middleware(UserCheck::class);

Route::get('/admin/signin', function () {
    return view('admin.signin');
})->name('adminsignin');

Route::get('/admin/signup', function () {
    return view('admin.signup');
});

Route::get('/user/signin', function () {
    return view('user.signin');
})->name('usersignin');

Route::get('/user/signup', function () {
    return view('user.signup');
});

Route::get('/user/home', function () {
    return view('user.home');
})->middleware(UserCheck::class);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(UserCheck::class);

Route::get('/admin/forgotpassword',function(){
    return view('admin.forgotpassword');
})->name('admin.forgotpass');




// Admin Routes...............................................................................................................

Route::get('/admin/admins', [PeopleController::class, 'show_admins'])->middleware(UserCheck::class);

// Route::get('/admin/edit/{id}', [PeopleController::class, 'editadmins']);
// Route::get('/admin/update/{id}', [PeopleController::class, 'updateadmins']);

// Route::get('/admin/delete/{id}', [PeopleController::class, 'deleteadmins']);

Route::post('/admin/signin', [AuthController::class, 'adminsignin'])->name('admin.signin');
Route::post('/admin/signup', [AuthController::class, 'adminsignup']);
Route::post('/admin/signout', [AuthController::class, 'adminsignout'])->name('adminsignout');

Route::post('/admin/forgotpassword', [ForgotpasswordController::class, 'adminforgotpassword'])->name('admin.forgotpassword');

Route::get('/admin/resetpassword/{token}',[ForgotpasswordController::class, 'adminresetpassword'])->name('admin.resetpassword');

Route::post('/admin/updatepassword', [ForgotpasswordController::class, 'adminupdatepassword'])->name('admin.updatepassword');


// Users Routes...............................................................................................................

Route::get('/admin/users', [PeopleController::class, 'show_users'])->middleware(UserCheck::class);

Route::post('/user/signup', [AuthController::class, 'usersignup']);
Route::post('/user/signin', [AuthController::class, 'usersignin']);
Route::post('/user/signout', [AuthController::class, 'usersignout'])->name('usersignout');

// Route::get('/user/edit/{id}', [PeopleController::class, 'editusers']);
// Route::get('/user/update/{id}', [PeopleController::class, 'updateusers']);

// Route::get('/user/delete/{id}', [PeopleController::class, 'deleteusers']);




// Catogory Routes............................................................................................................

Route::get('admin/catagories', [CatagoryController::class, 'showcatagory'])->middleware(UserCheck::class);

Route::get('admin/catagory/add', [CatagoryController::class, 'newcatagory'])->middleware(UserCheck::class);
Route::post('admin/catagory/add', [CatagoryController::class, 'addcatagory']);

Route::get('admin/catagory/update/{id}', [CatagoryController::class, 'editcatagory'])->middleware(UserCheck::class);
Route::post('admin/catagory/update/{id}', [CatagoryController::class, 'updatecatagory']);

Route::get('admin/catagory/delete/{id}', [CatagoryController::class, 'delete_catagory']);

Route::post('catagory/want/', [CatagoryController::class, 'wantcatagory'])->name('wantcatagories');

Route::post('catagory/name/', [CatagoryController::class, 'catitoa'])->name('catitoa');

// Subcatogory Routes............................................................................................................

Route::get('admin/subcatagories', [CatagoryController::class, 'showsubcatagory'])->middleware(UserCheck::class);

Route::get('admin/subcatagory/add', [CatagoryController::class, 'newsubcatagory'])->middleware(UserCheck::class);
Route::post('admin/subcatagory/add', [CatagoryController::class, 'addsubcatagory']);

Route::get('admin/subcatagory/update/{id}', [CatagoryController::class, 'editsubcatagory'])->middleware(UserCheck::class);
Route::post('admin/subcatagory/update/{id}', [CatagoryController::class, 'updatesubcatagory']);

Route::get('admin/subcatagory/delete/{id}', [CatagoryController::class, 'delete_subcatagory']);

Route::post('subcatagory/want/', [CatagoryController::class, 'wantsubcatagory'])->name('wantsubcatagory');

Route::post('subcatagory/name/', [CatagoryController::class, 'subcatitoa'])->name('subcatitoa');

Route::post('catbasedsubcatagory/want', [CatagoryController::class, 'want_cat_based_subcatagory'])->name('want_cat_based_subcatagory');




// Products Routes...........................................................................................................

Route::get('/admin/products', [ProductController::class, 'showproduct'])->middleware(UserCheck::class);

Route::get('admin/product/add', [ProductController::class, 'addproduct'])->middleware(UserCheck::class);
Route::post('admin/product/add', [ProductController::class, 'newproduct']);

Route::get('/admin/product/edit/{id}', [ProductController::class, 'editproduct'])->middleware(UserCheck::class);
Route::post('/admin/product/update/{id}', [ProductController::class, 'updateproduct']);

Route::get('/admin/product/delete/{id}', [ProductController::class, 'deleteproduct']);

Route::post('wantpidbasedpimages/want', [ProductController::class, 'want_pid_based_pimages'])->name('want_pid_based_pimages');




// ckeditor......................................................................................................

Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');


// pagination.....................................................................................................

// Route::get('/takeproduct', [ProductController::class, 'index'])->name('home');

Route::post('takeproduct/', [PaginationController::class, 'takeproduct'])->name('products.getProducts');

Route::post('changeproductstatus/', [PaginationController::class, 'changeprostatus'])->name('changeprostatus');