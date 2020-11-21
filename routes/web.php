<?php

use Illuminate\Support\Facades\Route;
 
/*
|--------------------------------------------------------------------------
| Rotas desprotegidas - Front || Site || Página do cliente
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => '/', 'as' => 'front.', 'namespace' => 'Front'], function () {
    // Index e demais páginas
    Route::get('', 'WebController@home')->name('home');

    Route::get('ajuda', 'WebController@ajuda')->name('ajuda');

    Route::get('sobre', 'WebController@sobre')->name('sobre');

    Route::get('contato', 'WebController@contato')->name('contato');
    Route::post('contato', 'WebController@contatoDo')->name('contato.do');

    // Animais
    Route::get('bichinhos', 'WebController@animais')->name('animais.index');
    Route::get('bichinho/{id}', 'WebController@animalShow')->name('animais.show');
    Route::post('bichinho/{id}', 'WebController@animalGet')->name('animais.get');

    // Solicitações
    Route::get('solicitacao', 'WebController@solicitacao')->name('solicitacoes.index');
    Route::get('solicitacao/{cod}', 'WebController@solicitacaoShow')->name('solicitacoes.show');
    Route::post('solicitacoes', 'WebController@solicitacaoDo')->name('solicitacoes.do');

    // Depoimentos
    Route::get('depoimento', 'WebController@depoimento')->name('depoimentos.index');
    Route::get('depoimento/obrigado', 'WebController@depoimentoObrigado')->name('depoimentos.obrigado');
    Route::post('depoimento', 'WebController@depoimentoDo')->name('depoimentos.do');

    // Blog
    Route::get('blog', 'WebController@blog')->name('blog.index');
    Route::get('blog/{uri}', 'WebController@blogShow')->name('blog.article');


    Route::get('elemento', 'WebController@elemento')->name('elemento');
});


/*
|--------------------------------------------------------------------------
| Rotas protegidas - Back || Dashboard || Painel administrativo
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth', 'prefix' => '/admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    // CRUD de animais
    Route::resource('animal', 'AnimalController');

    // CRUD de solicitações
    Route::resource('solicitacao', 'SolicitacaoController');

    // CRUD de depoimentos
    Route::resource('depoimento','DepoimentoController');

     // CRUD de blog
     Route::resource('blog','BlogController');
     
     // CRUD de blog
     Route::resource('painel','PainelController');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');