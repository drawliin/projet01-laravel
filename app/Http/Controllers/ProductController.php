<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $laptops =  [
        ["id" => 1, "title" => "PC Portable Gamer HP VICTUS", "price"=> "7490 DH", "image"=> "images/image1.jpg"],
        ["id" => 2, "title" => "PC Portable Gamer HP VICTUS (Microsoft 365)", "price"=> "2190 DH", "image"=> "images/image2.jpg"],
        ["id" => 3, "title" => "PC Portable Chromebook Acer", "price"=> "3640 DH", "image"=> "images/image3.webp"],
        ["id" => 4, "title" => "PC Portable - HUAWEI", "price"=> "1270 DH", "image"=> "images/image4.jpg"]
    ];

    public function index(){
        return view("welcome", ["laptops" => $this->laptops]);
    }

    public function productDetails($id){
        return view("productDetails", ["laptop" => $this->laptops[$id-1]]);
    }
}
