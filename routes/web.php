<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes9                                                                                                                                                                                    
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index']);

// Route::get('/', function(){
//     $link = 'Nguyễn Lâm Nhật';
//     return view('home', ['name' => $name]);
// })-> name('home');

// Route::get('/', function(){
//     $title = "todicodedao.com";
//     $alertMessage = "day la thong bao";
//     return view('home', ['title' => $title, 'alertMessage' => $alertMessage]);
// })-> name('home');

Route::get('/', function(){
    $posts = [
        ['name' => 'post1'],
        ['name' => 'post2'],
        ['name' => 'post3'],
        ['name' => 'post4'],
    ];
    return view('home', compact('posts'));
})-> name('home');

Route::get('/pnv1', function(){
    $name = '<i style="color:green">Nguyễn Lâm Nhật</i>';
    return view('home', ['name' => $name]);
})-> name('home');

Route::post('/', function (Request $request) {
    $file = $request->file;
    // dd($file);
    $path = 'images';
    $diskType = 'local';
    $extension = $file->getClientOriginalExtension();
    $fileName = "nguyenlamnhat.". $extension;
    $img = $file->storeAs($path, $fileName, $diskType);
    if ($img) {
            echo "Tên file: " . $fileName . "<br>";
            echo "Loại file: " . $extension . "<br>";
            return "Lưu trữ thành công";
        } else {
            return "Lưu trữ thất bại";
        }
});

Route::get('/test', function () {
    return view('test', ['name' => 'Nguyen Lam Nhat']);
});

Route::get('/aboutme', [PageController::class,'aboutme']);

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');

    Route::get('/add', [UserController::class, 'add'])->name('add');
    Route::post('/add', [UserController::class, 'postAdd'])->name('post-add');

    Route::get('/edit/{id}', [UserController::class, 'getEdit'])->name('edit');
    Route::post('/update', [UserController::class, 'postEdit'])->name('post-edit');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
});

Route::get('/form', function() {
    $tasks = [['name'=> 'First taks'],['name'=> 'Second taks'],];
    return view('viewExcercise', compact('tasks')); 
});

Route::get('/dashboard', function() {
    return view('clients.dashboard'); 
});

Route::get('/component', function() {
    $tasks = [['name'=>'task1'],['name'=>'task2'],['name'=>'task3']];
    return view('component', compact('tasks'));
});

Route::get('/shop', function() {
    $sidebarItems = [['name'=>' Traditional  Wear1'],['name'=>' Traditional  Wear2'],['name'=>' Traditional  Wear3'],['name'=>' Traditional  Wear4'],['name'=>' Traditional  Wear5'],['name'=>' Traditional  Wear6'],['name'=>' Traditional  Wear7'],['name'=>' Traditional  Wear8'],['name'=>' Traditional  Wear9']];
    $dealItems =[['link'=>'https://product.hstatic.net/200000726949/product/balki_black_001-002-043_main_sq_nt_2400x2400_b0e22a4821cf469f9df4fd00987daae2_master.jpg', 'conten'=>'good product'], ['link'=>'https://product.hstatic.net/200000726949/product/balki_black_001-002-043_main_sq_nt_2400x2400_b0e22a4821cf469f9df4fd00987daae2_master.jpg', 'conten'=>'good product'], ['link'=>'https://product.hstatic.net/200000726949/product/balki_black_001-002-043_main_sq_nt_2400x2400_b0e22a4821cf469f9df4fd00987daae2_master.jpg', 'conten'=>'good product'], ['link'=>'https://product.hstatic.net/200000726949/product/balki_black_001-002-043_main_sq_nt_2400x2400_b0e22a4821cf469f9df4fd00987daae2_master.jpg', 'conten'=>'good product'],['link'=>'https://product.hstatic.net/200000726949/product/balki_black_001-002-043_main_sq_nt_2400x2400_b0e22a4821cf469f9df4fd00987daae2_master.jpg', 'conten'=>'good product'],];
    return view('layouts.shop', compact('sidebarItems', 'dealItems')); 
});

