<?php

// by default we pass the user to index.php
// not using blade templates at all here
// were letting angular handle the front end
$app->get('/', function() {

    return view('index');
});


// RESTful API routes
// unfortunately lumen framework does not allow resource route like the full laravel framework
$app->get('/api/contacts', 'App\Http\Controllers\ContactController@index');

$app->post('/api/contacts', 'App\Http\Controllers\ContactController@store');

$app->delete('/api/contacts/{id}', 'App\Http\Controllers\ContactController@destroy');


