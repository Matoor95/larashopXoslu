<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //
    protected $fillable=['name'];
    // une categorie a un ou plusieurs produits
    public function products (){
        return $this->hasMany(Product::class);
    }
}
