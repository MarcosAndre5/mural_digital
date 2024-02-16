<?php
// Em construção
Route::get('/', function () { return view('mural.index'); });

Route::resource('mural', 'MuralController');

Route::get('mural/show', 'MuralController@show');

Route::get('reportar', 'MuralController@reportar');