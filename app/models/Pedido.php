<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['user_id','valorTotal'];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

