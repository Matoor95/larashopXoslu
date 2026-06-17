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
        // si on veut afficher la categorie du produit on ajoute un with('category')
        $products=Product::with('category')->get();
                //
                
                dd($products);

        $stocks=Product::inStock()->latest()->get();
        $outStocks=Product::outStock()->latest()->get();
        // dd($stocks);


        return view('products.index', compact('products','stocks','outStocks'));
    }
}
