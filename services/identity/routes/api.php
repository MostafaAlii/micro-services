<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth;

Route::get('/', static fn () => response()->json(['app' => config('app.name')]));

Route::post('login', [Auth\LoginController::class])->name('auth:login');
Route::post('register', [Auth\RegisterationController::class])->name('auth:register');

