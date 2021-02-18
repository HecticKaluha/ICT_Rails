<?php

use App\Http\Controllers\DepotController;
use App\Http\Controllers\DepotLineCategoryController;
use App\Http\Controllers\DepotLineController;
use App\Http\Controllers\LineController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RunController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceStatusController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\VehicleClassController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleStatusController;
use App\Http\Controllers\VehicleTypeController;
use App\Models\Line;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DepotController::class, 'index'])->name('home');
Route::get('/depot', [DepotController::class, 'index'])->name('depotIndex');
Route::get('/depot-line', [DepotLineController::class, 'index'])->name('depotLineIndex');
Route::get('/depot-line-category', [DepotLineCategoryController::class, 'index'])->name('depotLineCategoryIndex');
Route::get('/line', [LineController::class, 'index'])->name('lineIndex');
Route::get('/role', [RoleController::class, 'index'])->name('roleIndex');
Route::get('/run', [RunController::class, 'index'])->name('runIndex');
Route::get('/service', [ServiceController::class, 'index'])->name('serviceIndex');
Route::get('/service-status', [ServiceStatusController::class, 'index'])->name('serviceStatusIndex');
Route::get('/service-type', [ServiceTypeController::class, 'index'])->name('serviceTypeIndex');
Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicleIndex');
Route::get('/vehicle-class', [VehicleClassController::class, 'index'])->name('vehicleClassIndex');
Route::get('/vehicle-type', [VehicleTypeController::class, 'index'])->name('vehicleTypeIndex');
Route::get('/vehicle-status', [VehicleStatusController::class, 'index'])->name('vehicleStatusIndex');
    //->middleware(['auth'])->name('depots');


Route::get('/test', function(){
    $data = Line::all();
    return view('test.test', compact('data'));
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
