<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome'];

    public function produtos(){
        return $this->belongsToMany(Produto::class);
    }
}
