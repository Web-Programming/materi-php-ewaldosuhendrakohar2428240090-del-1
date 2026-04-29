<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;
class ProductControler extends Controller{
    public function index()
    {
        $products = [
            ['id' => 1, 'Name ' => 'Laptop' 'Price' => 7500000]
            ['id' => 2, 'Name ' => 'Mouse' 'Price' => 150000]
            ['id' => 3, 'Name ' => 'keyboard' 'Price' => 300000]
            ['id' => 4, 'Name ' => 'Monitor' 'Price' => 250000]
        ];
        return view('produk.index', compact('title','products'));

    }
    public function create(){
        return view('Products.create');
    }
}