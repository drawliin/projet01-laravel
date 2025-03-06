<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["laptops" => [
        ["id" => 1, "title" => "PC Portable Gamer HP VICTUS", "price"=> "7490 DH", "image"=> "./images/image1.jpg"],
        ["id" => 2, "title" => "PC Portable Gamer HP VICTUS (Microsoft 365)", "price"=> "2190 DH", "image"=> "./images/image2.jpg"],
        ["id" => 3, "title" => "PC Portable Chromebook Acer", "price"=> "3640 DH", "image"=> "./images/image3.webp"],
        ["id" => 4, "title" => "PC Portable - HUAWEI", "price"=> "1270 DH", "image"=> "./images/image4.jpg"]]]);
});
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

