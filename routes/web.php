<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/Home', [ProductController::class, "index"]);
Route::get('/Home/{id}', [ProductController::class, "productDetails"]);

Route::get('/bonjour', function () {
    return view('route-test', 
                ['name' => 'Houssam', 'condition' => false, 
                 "array" => ["Name" => "Houssam", 
                             "Groupe"=> "DevWFS 201",
                             "Module" => "Laravel"]]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return redirect("/Home");
});

