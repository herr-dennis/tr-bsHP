<?php

use App\Http\Controllers\SiteMapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainPageView');
});

Route::get("/Impressum", function ()
{
    return view('impressumsView');
});
Route::get("/Übermich", function ()
{
    return view('übermichView');
});
Route::get("/Leistungen", function ()
{
    return view('leistungenView');
});


Route::get('/Kontakt', [App\Http\Controllers\MainController::class, 'getKontakt']);

Route::get("/KostenAblauf", function ()
{
    return view('kostenAblaufView');
});
Route::get("/Datenschutz", function ()
{
    return view('datenschutzView');
});

Route::get('/generate-sitemap', [SiteMapController::class, 'generateSitemap']);
