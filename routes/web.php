<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BedroomSetController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\KitchenSetController;
use App\Http\Controllers\LivingRoomController;
use App\Http\Controllers\OfficeFurnController;
use App\Http\Controllers\PesananController;
use App\Models\LivingRoom;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('homeGuest');
// });



Route::get('/', [LivingRoomController::class, "ft_products_guestHome"]);
Route::get('/Furnicraft/home', [LivingRoomController::class, "ft_products"]);

// Route::get('/Furnicraft/home', function () {
//     return view('home');
// });

Route::get('/furnicraft/tentang-kami', function () {
    return view('aboutUs');
});

Route::get('/furnicraft/contact', function () {
    return view('contact');
});

// Kitchen Set Categories
Route::get('/categories/kitchenSet', [KitchenSetController::class, "show"]);
Route::get('/categories/kitchenSet/add-furniture', [KitchenSetController::class, "create_page"])->middleware("admin");
Route::post('/categories/kitchenSet/add-furniture/store', [KitchenSetController::class, "create_store"]);
Route::get('/categories/kitchenSet/{id}/edit', [KitchenSetController::class, "edit_page"]);
Route::put('/categories/kitchenSet/{id}/edit-furniture/store', [KitchenSetController::class, "edit_store"]);
Route::get('/categories/kitchenSet/{id}/delete', [KitchenSetController::class, "destroy"]);
Route::get('/categories/kitchenSet/{id}/detail', [KitchenSetController::class, "detail_page"]);
Route::put('/detail/kitchenset/update/{id}', [KitchenSetController::class, "update_kitchenSet"]);
// End Kitchen Set

// Bedroom Set Categories
Route::get('/categories/bedroomSet', [BedroomSetController::class, "view_bedroomSet"]);
Route::get('/categories/bedroomSet/add-furniture', [BedroomSetController::class, "create_pageBedroomSet"]);
Route::post('/categories/bedroomSet/add-furniture/store', [BedroomSetController::class, "create_storeBedroomSet"]);
Route::get('/categories/bedroomSet/{id}/edit', [BedroomSetController::class, "edit_pageBedroom"]);
Route::put('/categories/bedroomSet/{id}/edit-furniture/store', [BedroomSetController::class, "edit_pageBedroom_store"]);
Route::get('/categories/bedroomSet/{id}/delete', [BedroomSetController::class, "destroy_bedroom"]);
Route::get('/categories/bedroomSet/{id}/detail', [BedroomSetController::class, "detail_pageBedroom"]);
Route::put('/detail/bedroomSet/update/{id}', [BedroomSetController::class, "update_bedroom_spec"]);
// End Bedroom Set

// Living Room Categories
Route::get('/categories/livingRoom', [LivingRoomController::class, "view_livingRoom"]);
Route::get('/categories/livingRoom/add-furniture', [LivingRoomController::class, "create_pageLivingRoom"]);
Route::post('/categories/livingRoom/add-furniture/store', [LivingRoomController::class, "create_storeLivingRoom"]);
Route::get('/categories/livingRoom/{id}/edit', [LivingRoomController::class, "edit_pageLivingRoom"]);
Route::put('/categories/livingRoom/{id}/edit-furniture/store', [LivingRoomController::class, "edit_pageLivingRoom_store"]);
Route::get('/categories/livingRoom/{id}/delete', [LivingRoomController::class, "destroy_livingRoom"]);
Route::get('/categories/livingRoom/{id}/detail', [LivingRoomController::class, "detail_pageLivingRoom"]);
Route::put('/detail/livingRoom/update/{id}', [LivingRoomController::class, "update_livingRoom_spec"]);
// End Living Room

// Office Furniture Categories
Route::get('/categories/officeFurniture', [OfficeFurnController::class, "view_officeFurn"]);
Route::get('/categories/office_furnitures/add-furniture', [OfficeFurnController::class, "create_pageOffice"]);
Route::post('/categories/officeFurniture/add-furniture/store', [OfficeFurnController::class, "create_storeOffice"]);
Route::get('/categories/office_furnitures/{id}/edit', [OfficeFurnController::class, "edit_pageOffice"]);
Route::put('/categories/office_furnitures/{id}/edit-furniture/store', [OfficeFurnController::class, "edit_Office_store"]);
Route::get('/categories/office_furnitures/{id}/delete', [OfficeFurnController::class, "destroy_office"]);
Route::get('/categories/office_furnitures/{id}/detail', [OfficeFurnController::class, "detail_pageOfficeFurn"]);
Route::put('/detail/office_furniture/update/{id}', [OfficeFurnController::class, "update_officeFurn"]);
// End Office Furniture

// Catalogue Start
Route::get('/furnicraft/catalogue', [CatalogueController::class, "catalogue_page"]);
// Catalogue End

// Auth
Route::get('/account/create', [AuthController::class, "view_Registpage"]);
Route::post('/account/create/store-signUp', [AuthController::class, "signUp_store"]);

// Login
Route::get('/account/login', [AuthController::class, "view_Loginpage"])->name('login');
Route::post('/account/login/store-login', [AuthController::class, "login_store"]);
Route::get('/account/logout', [AuthController::class, "logout"]);

// Profile
Route::get('/account/profile', [AuthController::class, "profile_page"]);
Route::post('/alamat/add/{id}', [AuthController::class, "tambah_alamat"]);
Route::put('/alamat/update/{id}', [AuthController::class, "ubah_alamat"]);
Route::get('/account/ubah-password', [AuthController::class, "password_page"]);
Route::put('/account/{id}/change-password', [AuthController::class, "change_password"]);

// Pesanan
Route::middleware(['auth'])->group(function () {
    Route::get('/pesanan', [PesananController::class, "page_pesanan"]);
    Route::post('/detail/pesan/{id}', [PesananController::class, "pesanbyDetail"]);
    Route::get('/admin/checks/pesanan', [PesananController::class, "view_adminChecks"]);
    Route::put('/adminCheck/{id}/status-check', [PesananController::class, "status_update"]);
});




// Cart
// Route::get('/cart', [CartController::class, "cart_page"]);
// Route::put('/cart/{id}/add', [CartController::class, "add_cart"]);
// Route::get('/cart/{id}/update-item/{quantity}', [CartController::class, "update_cart"]);
// Route::get('/cart/{id}/hapus-item', [CartController::class, "destroy_cart"]);
// Route::post('/detail/pesan/{id}', [CartController::class, "pesanbyDetail"]);
