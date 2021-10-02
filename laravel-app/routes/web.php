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
*/

use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

//引数なし
Route::get('/no_arg',function(){
    Artisan::call('no-args-command');
});
//引数あり
Route::get('/with_arg',function(){
    Artisan::call('with-args-command',[
        'arg' => 'value',
        '-switch' => false,
    ]);
});

use Illuminate\Contracts\Console\Kernel;
Route::get('/no_arg',function(Kernel $artisan){
    $artisan->call('no-args-command');
});

public function handle()
{
    $this->call('other-command');
}

