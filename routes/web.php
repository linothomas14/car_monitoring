<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ApproverController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ApprovalController;
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
Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');;

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');;


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/actionlogin', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::post('logout', [AuthController::class, 'actionlogout'])->name('logout')->middleware('auth');

Route::group(['prefix' => 'booking', 'middleware' => ['auth','role:admin']], function(){
Route::get('/', [BookingController::class, 'add'])->name('booking');
Route::post('/save', [BookingController::class, 'save'])->name('booking.save');
});

Route::group(['prefix' => 'approvals', 'middleware' => ['auth']], function(){
    Route::get('/', [ApprovalController::class, 'readAll'])->name('approvals.index');
    Route::get('/export_excel', [ApprovalController::class, 'export_excel'])->name('approvals.export_excel');
    Route::post('/{id}', [ApprovalController::class, 'approved'])->name('approvals.approved');
    });

Route::group(['prefix' => 'drivers', 'middleware' => ['auth']], function(){
    Route::get('/', [DriverController::class, 'readAll'])->name("drivers.index");
    Route::get('/add', [DriverController::class, 'add'])->name("drivers.add")->middleware(['auth', 'role:boss,admin', ]);
    Route::post('/save',[DriverController::class, 'save'])->name('drivers.save');
    Route::delete('/{id}',[DriverController::class, 'delete'])->name('drivers.delete');
});  

Route::group(['prefix' => 'cars', 'middleware' => ['auth']], function(){
    Route::get('/', [CarController::class, 'readAll'])->name("cars.index");
    Route::get('/add', [CarController::class, 'add'])->name("cars.add")->middleware(['auth', 'role:boss,admin', ]);
    Route::post('/save',[CarController::class, 'save'])->name('cars.save')->middleware(['auth', 'role:boss,admin', ]);
    Route::delete('/{id}',[CarController::class, 'delete'])->name('cars.delete')->middleware(['auth', 'role:boss,admin', ]);
}); 

Route::group(['prefix' => 'approvers', 'middleware' => ['auth']], function(){
    Route::get('/', [ApproverController::class, 'readAll'])->name("approvers.index");
    Route::get('/add', [ApproverController::class, 'add'])->name("approvers.add")->middleware(['auth', 'role:admin', ]);
    Route::post('/save',[ApproverController::class, 'save'])->name('approvers.save')->middleware(['auth', 'role:admin', ]);
    Route::delete('/{id}',[ApproverController::class, 'delete'])->name('approvers.delete')->middleware(['auth', 'role:admin', ]);
}); 

// Route::group(['prefix' => 'cars', 'middleware' => ['auth']], function(){
//     Route::get('/', [CarsController::class, 'readAll'])->name("cars.add");
//     Route::get('/add', [CarsController::class, 'add'])->name("cars.add");
//     Route::post('/save',[CarsController::class, 'save'])->name('cars.save');
//     Route::delete('/{id}',[CarsController::class, 'delete'])->name('cars.delete');
// }   );