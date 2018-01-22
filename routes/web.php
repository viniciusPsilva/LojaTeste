<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Teste*/
Route::get('teste/user/endereco','teste\TesteController@userEndereco');
Route::get('teste/produto/categoria','teste\TesteController@produtoCategoria');
Route::get('teste/produto/caract','teste\TesteController@produtoCaract');
Route::get('teste/produto/pedido','teste\TesteController@produtoPedido');
/*Teste*/

//Produto
Route::resource('produto','ProdutoController');
Route::post('/produto/pesquisar','HomeController@pesquisarProduto')->name('find.produto');

/*cart*/
Route::get('/cart/add/{id}','CartController@addItem')->name('cart.add');
Route::get('/cart/show','CartController@show')->name('cart.show');
Route::get('/cart/remove/{cartItem}','CartController@removeitem')->name('cart.remove');

//Pedido
Route::get('/pedido/create','PedidoController@create')->name('pedido.create');
Route::get('/pedidos','PedidoController@index')->name('pedido.index');

//Categoria
Route::resource('categoria','CategoriaController');
Route::get('produtos/categoria/{id}','CategoriaController@getProdutos')->name('categoria.produtos');

//Caracteristica
Route::resource('caracteristica','CaracteristicaController');

//rotas de autenticação
Auth::routes();

//home
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
