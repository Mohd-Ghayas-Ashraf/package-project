<?php

use Illuminate\Support\Facades\Route;
use Laraphant\Contactmyform\Http\ContactFormController;


// Route::get('/contact', function () {
//     // return view('contactform::contact');
//     return 123;
// });

Route::get('/contact',[ContactFormController::class,'index']);