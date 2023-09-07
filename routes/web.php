<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceProviderController;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service_categories', [ServiceCategoryController::class, 'index'])->name('home');
Route::get('/service_categories/{serviceCategory:slug}', [ServiceCategoryController::class, 'serviceByCategory'])->name('home.services_by_category');
Route::get('/servicedetail/{service}', [ServiceCategoryController::class, 'servicedetail'])->name('home.servicedetail');
Route::get('/search_service', [HomeController::class, 'search_service'])->name('search_service');


// For customer
Route::middleware(['auth'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
});
// For Service Provider
Route::middleware(['authsvp'])->group(function () {
    Route::get('/svp/dashboard', [ServiceProviderController::class, 'dashboard'])->name('svp.dashboard');
    Route::get('/svp/profile', [ServiceProviderController::class, 'profile'])->name('svp.profile');

});

// for Admin
Route::middleware(['authadmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Service Category crud
    Route::get('/admin/service-categories', [AdminController::class, 'service_categories'])->name('admin.service_categories');
    Route::get('/admin/service-categories/add', [AdminController::class, 'add_service_categories'])->name('admin.add_service_categories');
    Route::post('/admin/service-categories', [AdminController::class, 'servicestore'])->name('admin.servicestore');
    Route::get('/admin/service-categories/{serviceCategory}/edit', [AdminController::class, 'edit_service_categories'])->name('admin.edit_service_categories');
    Route::patch('/admin/service-categories/{serviceCategory}', [AdminController::class, 'service_categories_update'])->name('admin.service_categories_update');
    Route::delete('/admin/service-categories/{serviceCategory}', [AdminController::class, 'service_categories_delete'])->name('admin.service_categories_delete');
    // Service crud
    Route::get('/admin/services', [AdminController::class, 'services'])->name('admin.services');
    Route::get('/admin.add_service/add', [AdminController::class, 'add_service'])->name('admin.add_service');
    Route::post('/admin.add_service', [AdminController::class, 'addservice'])->name('admin.addservice');
    Route::get('/admin/service/{service}/edit', [AdminController::class, 'edit_service'])->name('admin.edit_service');
    Route::patch('/admin/service/{service}', [AdminController::class, 'serviceupdate'])->name('admin.serviceupdate');
    Route::delete('/admin/service/{service}', [AdminController::class, 'servicedelete'])->name('admin.servicedelete');
});
