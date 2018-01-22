<?php

namespace App\models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['cidade','bairro','rua','numero','cep','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
