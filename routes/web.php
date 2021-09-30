<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
//  Punto di riferimeno dentro la cartella 

$data= [
  'name'=> 'Juan Carlo',
  'surname'=> 'Perez',  
];

dump($data);

return view('home', $data);
}) ->name('home');

Route::get ('/programs', function(){
    
    $data=[
        'lista_programma'=> [
            'Visita turistica',
            'Escursioni',
            'Animazione'
        ]
        ];
        return view( 'programs', $data);
})->name('programs');