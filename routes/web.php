<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
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

