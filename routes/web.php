<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

 @section('navbar')
        @include('componentes.navbar')
  @show
 <div class="container">
    @yield('content', 'Default Content')
  </div>


*/

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('Traslados.index');
})->name('dashboard');

Route::get('/cajas', function () {
  return view('cajas.cajas');
})->name('cajas');
