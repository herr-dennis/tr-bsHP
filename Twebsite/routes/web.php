<?php

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
