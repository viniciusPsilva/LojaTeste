<?php

namespace App;

use App\models\Endereco;
use App\models\Pedido;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }

    public function endereco(){
        return $this->hasOne(Endereco::class);
    }
}



