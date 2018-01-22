<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    private $cardItem = array();

    /**
     * @return array
     */
    public function getCardItem()
    {
        return $this->cardItem;
    }

    /**
     * @param array $cardItem
     */
    //adiciona um item no carrinho
    public function setCardItem(CartItem $cartItem)
    {
        //pesquisa o item no array
        $key = array_search($cartItem,$this->cardItem);
        //se o item não existir adiciona o item no array
        if($key === false)
            array_push($this->cardItem, $cartItem);
    }

    //remove o item do carrinho
    public function itemRemove($id){
        //procura o item no array pelo id, se encontrar remove o item
        foreach ($this->cardItem as $item){
            if ($item->getId() == $id){
                $key = array_search($item,$this->cardItem);
                unset($this->cardItem[$key]);
            }
        }
    }

    //retorna o carrinho que esta na sessão
    public static function getCart(){
        //verifica se a sessão existe se não existir inicia uma nova sessão
        if (session_id() == "")
            session_start();
        //verifica se tem um cart na sessão
        isset($_SESSION['cart'])? $cart = unserialize($_SESSION['cart']) : $cart = new Cart();

        return $cart;
    }

    public static function setCart(Cart $cart){
        $_SESSION['cart'] = serialize($cart);
    }

    public static function deleleteCart(){
        if (session_id() == "")
            session_start();

        $_SESSION['cart'] = null;
    }

}
