<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmailController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\Redirect;

Route::get('/', function () {
    return redirect()->away('https://www.gate.io');
});
Route::get('/smail', function () {
    return view('sendmail');
});
Route::get('/listingrequest', function () {
    return view('listing_home');
})->name('listingrequest');

Route::get('/listingrequestproj', function () {
    return view('listing_project');
});
Route::get('/listingrequestproj2', function () {
    return view('listing_project2');
})->name('listingrequestproj2');

Route::get('/listingrequestpro3', function () {
    return view('listing_project3');
})->name('listingrequestproj3');

Route::post('/listingrequestproj4', function () {
    return view('listing_project4');
});
Route::post('/listingrequestproj5', function () {
    return view('listing_project5');
});
Route::post('/listingrequestproj6', function () {
    return view('listing_project6');
});
Route::post('/listingrequestproj7', function () {
    return view('listing_project7');
});
Route::post('/listingrequestproj8', function () {
    return view('listing_project8');
});
Route::get('/listingrequestindiv', function () {
    return view('listing_individual');
});
Route::post('/sendmail', [SmailController::class, 'sendMail']);
Route::post('/newlisting_i', [ListingController::class, 'newListingIndivid']);
Route::post('/newlisting_p', [ListingController::class, 'newListingProj']);
Route::post('/newlisting_p2', [ListingController::class, 'newListingProj2']);
Route::post('/newlisting_pl', [ListingController::class, 'newListingProj8']);
Route::get('/ddash', [ListingController::class, 'view']);