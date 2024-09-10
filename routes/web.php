<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

//이메일 접수
Route::post('/subscribe', function (Request $request) {
    $request->validate([
        'email' => 'required|email|max:255',
    ]);    // 이메일을 'emails' 테이블에 저장

    DB::table('emails')->insert([
        'email' => $request->input('email'),
        'dt_reg' => now(), // 현재 시간으로 등록 날짜 저장
    ]);
    
    return back()->with('success', 'Thank you for subscribing!');
});
