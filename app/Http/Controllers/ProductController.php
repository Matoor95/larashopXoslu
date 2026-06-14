<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        // un tableau de produit
        // $products = [
        //     ['libelle' => 'hp', 'price' => 4000, 'quantity' => 100, 'description' => 'ma description'],
        //     ['libelle' => 'DEll', 'price' => 6000, 'quantity' => 150, 'description' => 'ma description'],


        // ];
        // dd signifie dump and die 
        // dd($products);
        $products=Product::all();


        return view('products.index', compact('products'));
    }
}
