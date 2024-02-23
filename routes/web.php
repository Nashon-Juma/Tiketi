<?php

use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BuyController;

use App\Http\Controllers\TicketController;

use App\Http\Controllers\SpeakerController;


/* MAIN Pages*/
Route::get('/', function () {return view('index');
});
Route::get('/index', function () {return view('index');
});

Route::get('/speaker/{id}',[SpeakerController::class,'singleSpeaker'
    ]);





/* SUB Pages*/
Route::post('/thanks',[BuyController::class,'customer']);





/* ADMIN Pages*/

Route::get('/adminNew',function () {return view('speaker.create')
    ;});

Route::get('siteDB',function () {return view('index')
    ;});



// [BuyController::class,'buyer'
//     ]);

