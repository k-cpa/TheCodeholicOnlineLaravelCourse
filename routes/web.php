<?php

use Illuminate\Support\Facades\Route;

// Création de Route laravel

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/about', 'about');

////////////////////////////////////////////////////////////////////////

// Route::get('/product/{id}', function (string $id) {
//     return "Product ID=$id";
// });

////////////////////////////////////////////////////////////////////////

// Route required parameters
// Route::get( 
//     '{lang}/product/{id}/review/{reviewId}',
//     function (string $lang, string $id, string $reviewId) {
//         // ...
//     }
// );

////////////////////////////////////////////////////////////////////////

// Optionnal parameter with "?" avec valeur null pour renvoyer null sans faire d'erreur. test -> localhost/product/category/ va renvoyer le return sans la catégorie
// Route::get('/product/{category?}', function(string $category = null) { 
//     return "Product for category = $category";
// });

////////////////////////////////////////////////////////////////////////

// Validation de route 
// Route::get('/product/{id}', function(string $id, string $lang, ) {
//     return "Works ! $id";
// })
//     ->whereNumber("id")
//     ->whereAlpha("lang")
//     ->whereIn("lang", ["en", "uk", "fr"]);

////////////////////////////////////////////////////////////////////////

// Validation de route avec REGEX
// Route::get('/user/{username}', function(string $username) {

// })
//     ->where('username', '[a-z]+'); // custom regex -> from a to z and + pour "at least 1"

//     Route::get('/{lang}/product/{id}', function(string $lang, string $id) {

//     })
//         ->where([
//             'lang' => '[a-z]{2}', //langue entre a et z et longueur = 2 caractères
//             'id' => '\d{4,}' // Ici au moins 4 caractères 
//         ]);
    
//     Route::get('/search/{search}', function(string $search) {
//         return $search;
//     })
//         ->where('search', '.+'); // peut être n'importe quel caractère et doit faire une longueur de 1 mini. Permet d'avoir des "/" qui seront considérés comme des caractères 

////////////////////////////////////////////////////////////////////////

// Rappel de route pour liens 
// Important de le faire directement dans le Route:: car ça permet une modification instantanée partout où le name est appelé. 
// Route::get('/', function () {
//     $aboutPageUrl = route('about'); // Va rappeler 'about' même si on change le nom de la route de about vers about-us par exemple. 
// });

// Route::view('/about', 'about')->name('about');