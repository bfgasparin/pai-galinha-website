<?php

use App\Phrase;

Route::get('/', function () {
    return view('comming-soon');
});

// Route::get('/test', function () {
// 	$phrase = Phrase::default()->first();
//     return view('welcome', compact('phrase'));
// });