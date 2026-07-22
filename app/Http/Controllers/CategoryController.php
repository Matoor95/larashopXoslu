<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // recuperer les derniers categories ajoutes et afficher seulement 10 en utilisant la pagination
        $categories = Category::latest()->paginate(3);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>['required','string', 'max:255']

        ]);
        //
        //tester les donnes envoyer via le formulaire 
        // dd($data);
        Category::create($validated);
        return redirect()->route('categories.index')->with('success','Categorie creee avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category=Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated=$request->validate([
            'name'=>['required','string','max:255','unique:categories,name,'. $category->id]
        ]);
        $category->update($validated);
        return redirect()->route('categories.index')->with('success','Categorie modifier avec succes');
        
      

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
                return redirect()->route('categories.index');


    }
}
