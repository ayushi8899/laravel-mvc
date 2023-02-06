<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DewiController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\LoginController; 
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\RegisterController;

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

//template integrations
//Route::get('/',[DewiController::class,'index']);
    
//Route::get('/', function () {
//     return view('welcome');
// });

// contact us view routes 

//Route::get('/',function(){
//      return view('contactus');
// });
// Route::get('/our-teams',function(){
//     return view('teams');
//});
// Route::get('/our-gallery',function(){
//     return view('gallery');
// });
// Route::get('/our-services',function(){
//     return view('services');
// });

// template integrations
// Route::get("/",[HomeController::class,'index']);

//table intigration
Route::get("/",[CrudController::class,"index"]);
Route::get("/about-us",function(){
    return view('crudapp.about');
});

//contact page routing

Route::get("/contact-us",[ContactController::class,"index"]);
Route::post("/contact-us",[ContactController::class,"store"]);
Route::get("/register",[RegisterController::class,"index"]);
Route::post("/register",[RegisterController::class,"store"]);


//admin routing here
Route::get("/admin-login",[LoginController::class,"index"]);
Route::get("/admin-login/admin-Dashboard",[DashboardController::class,"index"]);
Route::get("/admin-login/managecontact",[ContactController::class,"show"]);

Route::post("/admin-login/managecontact/{id}",[ContactController::class,"destory"]);

Route::get("/admin-login/managecoustomer",[RegisterController::class,"show"]);
Route::post("/admin-login/managecoustomer/{id}",[RegisterController::class,"destory"]);
