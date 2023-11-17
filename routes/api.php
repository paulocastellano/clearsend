<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\DomainController;
use App\Http\Controllers\Api\EmailController;

Route::group(['domain' => 'api.' . parse_url(config('app.url'), PHP_URL_HOST),  'middleware' => ['api.check-workspace']], function () {

    // healthcheck
    Route::get('/healthcheck', function () {
        return response()->json(['status' => 'ok']);
    })->name('api.healthcheck')->withoutMiddleware(['api.check-workspace']);

    // domains
    Route::get('/domains', [DomainController::class, 'index'])->name('api.domains.index');

    // emails
    Route::get('/emails/search', [EmailController::class, 'search'])->name('api.emails.search');
    Route::get('/emails/verify', [EmailController::class, 'verify'])->name('api.emails.verify');
});
