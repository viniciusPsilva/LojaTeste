<?php

namespace App\Http\Controllers;

use App\models\Cart;
use App\models\Pedido;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        $cart = Cart::getCart();
        if($cart == null){
            return "Carrinho vazio";
        }
        $produtos = $cart->getCardItem();
        $total = 0;
        $idProdutos= array();
        foreach ($produtos as $produto){
            $total += $produto->getPreco();
            array_push($idProdutos ,$produto->getid());
        }
        $data =  [
            'valorTotal' => $total,
            'user_id' => Auth::user()->id,
        ];
        $pedido = Pedido::create($data);
        $pedido->produtos()->sync($idProdutos);
        Cart::deleleteCart();
        return redirect()->route('produto.index');
    }

    public function index(){
        $usuario = User::find(Auth::user()->id);
        $pedidos = $usuario->pedidos;


        return view('pedido.index', compact('pedidos'));
    }
}
