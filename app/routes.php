<?php

Route::get('/', 'SurveySubmissions@index');
Route::post('/', 'SurveySubmissions@create');

Route::get('/complete', function(){
    return View::make('pages.complete');
});

Route::resource('survey', 'SurveySubmissions');