<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductModelController;


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

// 2e parametre est une fonction anonyme qui est une classe closure
// Classe utilisée pour représenter les fonctions anonymes.
// Les fonctions anonymes produisent des objets de ce type.
// get est une méthode pour intéragir avec l'url

// Route::get('/', function () {
//     // return view('welcome');
//     return "je suis dans la route produit 1";
// });


// VERSION TEMPLATE WITH CONTROLLER 

Route::get('cart', [CartController::class, 'cart']);

Route::get('product', [ProductController::class, 'listProduct']);

Route::get('product/{n}', [ProductController::class, 'ficheProduct']);

// Route::get('homepage', [HomeController::class, function() {
    //     return view('homepage');
    // }]);
    
    Route::get('', [HomeController::class, 'index']);
    
    // Route::get('productmodel', [ProductModelController::class, 'show']);
    Route::get('productmodel', [ProductModelController::class, function() {
        return show($name);
    }
]);


// VERSION TEMPLATE WITHOUT CONTROLLER 
// Route::get('product/{n}', function($n) {
//     return view('product-details')->with('numero', $n);
//     // return view('article')->withNumero($n);
// })->where('n', '[0-9]+');

// Route::get('cart', function() {
//     return view('cart');
// });

// Route::get('product', function() {
//     return view('product-list');
// });

// Route::get('homepage', function() {
//     return view('homepage');
//     // return view('article')->withNumero($n);
// });


// VERSION CONTROLLER WITHOUT TEMPLATE
// Route::get('cart', [CartController::class, 'cart']);
// Route::get('product', [ProductController::class, 'listProduct']);
// Route::get('product/{n}', [ProductController::class, 'ficheProduct']);
// Route::get('{n}', [ProductController::class, 'ficheProduct']);
// Route::get('/', [HomeController::class, 'index']);


// VERSION 1
// Route::get('1', function() { return 'Je suis la page 1 !'; });
// Route::get('2', function() { return 'Je suis la page 2 !'; });
// Route::get('3', function() { return 'Je suis la page 3 !'; });


// VERSION 2
// Route::get('{n}', function($n) {
//     return 'Je suis la page ' . $n . ' !';
// })->where('n', '[1-3]');

// Route::get('article/{n}', function($n) {
//     return view('article')->with('numero', $n);
//     // return view('article')->withNumero($n);
// })->where('n', '[0-9]+');