<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmailController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\Redirect;
use App\Http\Controllers\SocialHandleController;

Route::get('/', function () {
    return redirect()->away('https://www.gate.io');
});
Route::get('/smail', function () {
    return view('sendmail');
});
Route::get('/listingrequest', function () {
    return view('listing_home');
})->name('listingrequest')->middleware('activity');

Route::get('/listingrequestproj', function () {
    return view('listing_project');
})->middleware('activity');
Route::get('/listingrequestindiv', function () {
    return view('listing_individual');
})->middleware('activity');
Route::post('/sendmail', [SmailController::class, 'sendMail']);
Route::post('/newlisting_i', [ListingController::class, 'newListingIndivid']);
Route::post('/newlisting_p', [ListingController::class, 'newListingProj']);
Route::get('/ddash', [ListingController::class, 'view']);
Route::get('/verify-handles', [SocialHandleController::class, 'verifyHandles'])->name('verify.handles');
Route::post('/dashboard/social-handles', [SocialHandleController::class, 'store'])->name('social-handles.store');
Route::delete('/dashboard/social-handles/{id}', [SocialHandleController::class, 'destroy'])->name('social-handles.delete');
