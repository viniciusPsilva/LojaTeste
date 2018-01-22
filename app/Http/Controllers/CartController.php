<?php

namespace App\Http\Controllers;

use App\models\Cart;
use App\models\CartItem;
use App\models\Produto;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addItem($id){
        $produto = Produto::find($id);
        //cria o item
        $cartItem = new CartItem();
        $cartItem->setId($produto->id);
        $cartItem->setNome($produto->nome);
        $cartItem->setImagem($produto->imagem);
        $cartItem->setPreco($produto->preco);

        //verifica se a sessão ja esta start
        $cart = $this->getCart();

        //pega o carrinho na sessão
        $cart->setCardItem($cartItem);
        //coloca o cart na sessão
        $_SESSION['cart'] = serialize($cart);
        return redirect()->route('home');
    }

    public function removeitem($id){
        $cart = $this->getCart();
        $cart->itemRemove($id);
        $this->setCart($cart);
        return redirect()->route('cart.show');
    }

    public function show(){
        $cart = $this->getCart();
        return view('cart.show',compact('cart'));
    }

    public function getCart(){
        //verifica se a sessão existe
        if (session_id() == "")
            session_start();
        //verifica se tem um cart na sessão
        isset($_SESSION['cart'])? $cart = unserialize($_SESSION['cart']) : $cart = new Cart();

        return $cart;
    }

    public function setCart(Cart $cart){
        $_SESSION['cart'] = serialize($cart);
    }
}
