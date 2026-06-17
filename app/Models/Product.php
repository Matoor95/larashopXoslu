<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['libelle','price','quantity','description'];
// un produit appartient a une seule categorie
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // creer un scope (filtre reutilisable) qui va nous permettre de recuperer les produits qui sont en stock
    public function scopeInStock($query){
        return $query->where('quantity','>',0);
    }
    public function scopeOutStock($query){
        return $query->where('quantity','<=',0);
    }


}
