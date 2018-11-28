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
use App\Compra;
Route::get('/', function () {
    return view('welcome');
});


Route::resource('/cliente', 'ClienteController');
Route::get('/meuspedidos', function(){
  $listaCompras = array();
  $compra = new Compra;
  $compra->produto = 'Ração';
  $compra->quantidade = 7;
  $compra->preco = 12.5;
  $compra->data = '12/05/2010';
  $listaCompras[] = $compra;
  $compra = new Compra;
  $compra->produto = 'Vermicida';
  $compra->quantidade = 2;
  $compra->preco = 5.18;
  $compra->data = '07/11/2012';
  $listaCompras[] = $compra;
  $compra = new Compra;
  $compra->produto = 'Antibiótico';
  $compra->quantidade = 9;
  $compra->preco = 17;
  $compra->data = '28/11/2018';
  $listaCompras[] = $compra;

  return view('cliente.meuspedidos')->with('listaCompras',$listaCompras);
});
Route::get('/cadastro', function () {
    return view('cadastro');
});
