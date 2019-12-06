<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    /**
     * para mudar o nome da tabela no model
     * @var string
     */
    protected $table = 'categorias';

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}

//tabela pivot - many-to-many
//tabela sing. _ tabela sing.
//table category_product


/** @var Builder $category */
//$category = new Category();
//$category->where()
//    ->where()
//    ->get();


