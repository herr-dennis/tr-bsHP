<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/Kontakt', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'name'  => ['required', 'string', 'max:100'],
        'email' => ['required', 'email', 'max:150'],
        'nachricht' => ['required', 'string', 'max:5000'],
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'message' => 'Validation error',
            'errors' => $validator->errors(),
        ], 422);
    }

    try{
        Mail::to("info@schwarz-und-web.de")
            ->send(new \App\Mail\Kontakt($request->only(['name', 'email', 'nachricht'])));
    }catch (\Exception $e){
        return response()->json([$e->getMessage()]);
    }

    $data =[
        "status" => "success",
    ];
return response()->json($data);

});
