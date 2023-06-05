<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeshopController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\RatingcoffeeshopController;
use App\Http\Controllers\RatingrestaurantController;
use App\Http\Controllers\TransactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/coffeeshop/downloadpdf', [CoffeeshopController::class,'downloadpdf']);
Route::get('/coffeeshop', [CoffeeshopController::class, 'index']);
Route::get('/coffeeshop/tambah', [CoffeeshopController::class, 'create']);
Route::post('/coffeeshop/store', [CoffeeshopController::class, 'store']);
Route::get('/coffeeshop/edit/{id}', [CoffeeshopController::class, 'edit']);
Route::put('/coffeeshop/update/{id}', [CoffeeshopController::class, 'update']);
Route::get('/coffeeshop/hapus/{id}', [CoffeeshopController::class, 'delete']);
Route::get('/coffeeshop/destroy/{id}', [CoffeeshopController::class, 'destroy']);

Route::get('/restaurant/downloadpdf', [RestaurantController::class,'downloadpdf']);
Route::get('/restaurant', [RestaurantController::class, 'index']);
Route::get('/restaurant/tambah', [RestaurantController::class, 'create']);
Route::post('/restaurant/store', [RestaurantController::class, 'store']);
Route::get('/restaurant/edit/{id}', [RestaurantController::class, 'edit']);
Route::put('/restaurant/update/{id}', [RestaurantController::class, 'update']);
Route::get('/restaurant/hapus/{id}', [RestaurantController::class, 'delete']);
Route::get('/restaurant/destroy/{id}', [RestaurantController::class, 'destroy']);

Route::get('/food/downloadpdf', [FoodController::class,'downloadpdf']);
Route::get('/food', [FoodController::class, 'index']);
Route::get('/food/tambah', [FoodController::class, 'create']);
Route::post('/food/store', [FoodController::class, 'store']);
Route::get('/food/edit/{id}', [FoodController::class, 'edit']);
Route::put('/food/update/{id}', [FoodController::class, 'update']);
Route::get('/food/hapus/{id}', [FoodController::class, 'delete']);
Route::get('/food/destroy/{id}', [FoodController::class, 'destroy']);

Route::get('/drink/downloadpdf', [DrinkController::class,'downloadpdf']);
Route::get('/drink', [DrinkController::class, 'index']);
Route::get('/drink/tambah', [DrinkController::class, 'create']);
Route::post('/drink/store', [DrinkController::class, 'store']);
Route::get('/drink/edit/{id}', [DrinkController::class, 'edit']);
Route::put('/drink/update/{id}', [DrinkController::class, 'update']);
Route::get('/drink/hapus/{id}', [DrinkController::class, 'delete']);
Route::get('/drink/destroy/{id}', [DrinkController::class, 'destroy']);

Route::get('/employer', [EmployerController::class, 'index']);
Route::get('/employer/tambah', [EmployerController::class, 'create']);
Route::post('/employer/store', [EmployerController::class, 'store']);
Route::get('/employer/edit/{id}', [EmployerController::class, 'edit']);
Route::put('/employer/update/{id}', [EmployerController::class, 'update']);
Route::get('/employer/hapus/{id}', [EmployerController::class, 'delete']);
Route::get('/employer/destroy/{id}', [EmployerController::class, 'destroy']);

Route::get('/ratingcoffeeshop', [RatingcoffeeshopController::class, 'index']);
Route::get('/ratingcoffeeshop/tambah', [RatingcoffeeshopController::class, 'create']);
Route::post('/ratingcoffeeshop/store', [RatingcoffeeshopController::class, 'store']);
Route::get('/ratingcoffeeshop/edit/{id}', [RatingcoffeeshopController::class, 'edit']);
Route::put('/ratingcoffeeshop/update/{id}', [RatingcoffeeshopController::class, 'update']);
Route::get('/ratingcoffeeshop/hapus/{id}', [RatingcoffeeshopController::class, 'delete']);
Route::get('/ratingcoffeeshop/destroy/{id}', [RatingcoffeeshopController::class, 'destroy']);

Route::get('/ratingrestaurant', [RatingrestaurantController::class, 'index']);
Route::get('/ratingrestaurant/tambah', [RatingrestaurantController::class, 'create']);
Route::post('/ratingrestaurant/store', [RatingrestaurantController::class, 'store']);
Route::get('/ratingrestaurant/edit/{id}', [RatingrestaurantController::class, 'edit']);
Route::put('/ratingrestaurant/update/{id}', [RatingrestaurantController::class, 'update']);
Route::get('/ratingrestaurant/hapus/{id}', [RatingrestaurantController::class, 'delete']);
Route::get('/ratingrestaurant/destroy/{id}', [RatingrestaurantController::class, 'destroy']);


Route::get('/transaction/downloadpdf', [TransactionController::class,'downloadpdf']);
Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/transaction/tambah', [TransactionController::class, 'create']);
Route::post('/transaction/store', [TransactionController::class, 'store']);
Route::get('/transaction/edit/{id}', [TransactionController::class, 'edit']);
Route::put('/transaction/update/{id}', [TransactionController::class, 'update']);
Route::get('/transaction/hapus/{id}', [TransactionController::class, 'delete']);
Route::get('/transaction/destroy/{id}', [TransactionController::class, 'destroy']);


Route::get('/', function () {
    return view('layouts/app');
});
