<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
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

Route::post('/login', [LoginController::class,'login']);
Route::post('/register', [LoginController::class,'register']);
Route::middleware("auth:sanctum")->post('/logout', [LoginController::class,'logout']);

Route::get('/produtos', function() {
    return response()->json([
        [
            "id" => 1,
            "name" => "Banner 120x40cm",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium id quod porro ex quis perspiciatis, esse fuga cum repellendus consectetur, soluta itaque maxime. Quam, ipsam alias assumenda aliquid suscipit aspernatur.",
            "price" => 155.99,
            "status" => 1,
            "created_at" => null,
            "updated_at" => null,
        ],
        [
            "id" => 2,
            "name" => "Lona 200x130cm",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium id quod porro ex quis perspiciatis, esse fuga cum repellendus consectetur, soluta itaque maxime. Quam, ipsam alias assumenda aliquid suscipit aspernatur.",
            "price" => 134.99,
            "status" => 0,
            "created_at" => null,
            "updated_at" => null,
        ],
        [
            "id" => 3,
            "name" => "Faixa Pano 133x50cm",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium id quod porro ex quis perspiciatis, esse fuga cum repellendus consectetur, soluta itaque maxime. Quam, ipsam alias assumenda aliquid suscipit aspernatur.",
            "price" => 139.99,
            "status" => 1,
            "created_at" => null,
            "updated_at" => null,
        ],
        [
            "id" => 4,
            "name" => "Cartão de Visita 4/4 9x5cm",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium id quod porro ex quis perspiciatis, esse fuga cum repellendus consectetur, soluta itaque maxime. Quam, ipsam alias assumenda aliquid suscipit aspernatur.",
            "price" => 199.99,
            "status" => 0,
            "created_at" => null,
            "updated_at" => null,
        ],
        [
            "id" => 5,
            "name" => "Panfleto 4/0 20x15cm",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium id quod porro ex quis perspiciatis, esse fuga cum repellendus consectetur, soluta itaque maxime. Quam, ipsam alias assumenda aliquid suscipit aspernatur.",
            "price" => 234.99,
            "status" => 1,
            "created_at" => null,
            "updated_at" => null,
        ],
    ]);
});
