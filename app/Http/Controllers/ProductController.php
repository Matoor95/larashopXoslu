<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
    
        // dd signifie dump and die 
        // dd($products);
        // si on veut afficher la categorie du produit on ajoute un with('category')
        // with est la methode eloquend qui declenche l'egear loading: quand tu va cherhcer mes produits aussi leurs cateogires en meme temps dans une requete separee mais immediate 
        $products=Product::with('category')->get();
        $categories=Category::orderBy('name')->get();  
                    


        return view('products.index', compact('products'));
    }
}
