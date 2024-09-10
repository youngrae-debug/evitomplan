<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

//이메일 접수
Route::post('/subscribe', function (Request $request) {
    $email = $request->input('email');
    // 이메일을 처리하는 로직 (예: 데이터베이스 저장 또는 메일 발송)

    return back()->with('success', 'Thank you for subscribing!');
});
