<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome','descricao','imagem','preco'];

    public function categorias(){
        return $this->belongsToMany(Categoria::class);
    }

    public function caracteristicas(){
        return $this->belongsToMany(Caracteristica::class);
    }

    public function pedidos(){
        return $this->belongsToMany(Pedido::class);
    }
}
