<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

Route::get('/', function () {
    return view('first');
});

Route::get('/names', [NameController::class, 'getNames']); 

?>

