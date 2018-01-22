<?php

namespace App\Http\Controllers\teste;

use App\models\Caracteristica;
use App\models\Categoria;
use App\models\Produto;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TesteController extends Controller
{

    public function userEndereco(){
        $usuario = User::find(1);
        $endereco = $usuario->endereco;

        echo "Usuario : $usuario->name<br>";
        echo"Endereço: $endereco->cidade $endereco->bairro  $endereco->rua $endereco->numero  $endereco->cep";


    }

    public function produtoCategoria(){
        /*$categoria = Categoria::find(3);
        $produtos = $categoria->produtos;*/

        $produto = Produto::find(1);
        $categorias = $produto->categorias;


        echo "Produto: $produto->nome<br>";
        foreach ($categorias as $categoria){
            echo "$categoria->nome , ";
        }

    }

    public function produtoCaract(){
        /*$produto = Produto::find(1);
        $caracteristicas = $produto->caracteristicas;*/

        $caracteristica = Caracteristica::find(1);
        $produtos  = $caracteristica->produtos;

        echo "Caracteristia: $caracteristica->nome<br>";
        foreach ($produtos as $produto){
            echo "$produto->nome , ";
        }

    }

    public function produtoPedido(){
        //pega os pedidos por um usuario
        $usuario = User::find(1);
        $pedidos = $usuario->pedidos;

        echo "Pedidos do usuario $usuario->name<br>";
        foreach ($pedidos as $pedido){
           echo "<br>Codigo do Pedido: $pedido->id<br>";
           echo "Produtos do Pedido:<br>";
            //exibe os produtos dos pedidos
           foreach ($pedido->produtos as $produto){
               echo "<hr>$produto->nome<hr>";
           }
        }

    }
}
