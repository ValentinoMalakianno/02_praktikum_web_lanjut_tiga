<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);

//produk
Route::prefix('product')->group(function (){
    Route::get('/', [ProductController::class, 'home']);
    Route::get('/1', function(){
        return redirect("https://www.educastudio.com/category/marbel-edu-games");
    });
    Route::get('/2', function(){
        return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
    });
    Route::get('/3', function(){
        return redirect("https://www.educastudio.com/category/riri-story-books");
    });
    Route::get('/4', function(){
        return redirect("https://www.educastudio.com/category/kolak-kids-songs");
    });

});

//news
Route::get('/news', [NewsController::class, 'home']);
Route::get('/news/{id}', function ($id){
    if ($id ==1){
        return redirect("https://www.educastudio.com/news");
    }else if ($id ==2){
        return redirect("https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19");
    }

});

//program
Route::prefix('program')->group(function (){
    Route::get('/', [ProgramController::class, 'home']);
    Route::get('/karir', function(){
        return redirect("https://www.educastudio.com/program/karir");
    });
    Route::get('/magang', function(){
        return redirect("https://www.educastudio.com/program/magang");
    });
    Route::get('/kunjunganindustri', function(){
        return redirect("https://www.educastudio.com/program/kunjungan-industri");
    });
});

//about us
Route::get('/aboutus', function(){
    return redirect("https://www.educastudio.com/about-us");
});

//contact us
Route::get('/contactus', function(){
    return redirect("https://www.educastudio.com/contact-us");
});




