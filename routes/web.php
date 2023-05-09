<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;


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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/dash', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('AdminPanel.dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('AdminPanel.billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('AdminPanel.profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('AdminPanel.rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples.user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('AdminPanel.tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('AdminPanel.virtual-reality');
	})->name('virtual-reality');

	Route::get('slider', [SliderController::class, 'index']);
    Route::get('add-slider', [SliderController::class, 'create']);
    Route::post('add-slider', [SliderController::class, 'store']);
    Route::get('edit-slider/{id}', [SliderController::class, 'edit']);
    Route::put('update-slider/{id}', [SliderController::class, 'update']);
    Route::delete('delete-slider/{id}', [SliderController::class, 'destroy']);

	Route::get('designForm', [FormController::class, 'indexdesign']);
    Route::get('add-designForm', [FormController::class, 'createdesign']);
    Route::post('add-designForm', [FormController::class, 'storedesign']);
    Route::get('view-designForm/{id}', [FormController::class, 'viewdesign']);
    Route::put('update-designForm/{id}', [FormController::class, 'updatedesign']);
    Route::post('designform_status_upadated/{id}', [FormController::class, 'designform_status_upadated']);
    Route::delete('delete-designForm/{id}', [FormController::class, 'destroydesign']);

	Route::get('appForm', [FormController::class, 'indexapp']);
    Route::get('add-appForm', [FormController::class, 'createapp']);
    Route::post('add-appForm', [FormController::class, 'storeapp']);
    Route::get('view-appForm/{id}', [FormController::class, 'viewapp']);
    Route::put('update-appForm/{id}', [FormController::class, 'updateapp']);
    Route::post('appform_status_upadated/{id}', [FormController::class, 'appform_status_upadated']);
    Route::delete('delete-appForm/{id}', [FormController::class, 'destroyapp']);

	Route::get('webForm', [FormController::class, 'indexweb']);
    Route::get('add-webForm', [FormController::class, 'createweb']);
    Route::post('add-webForm', [FormController::class, 'storeweb']);
    Route::get('view-webForm/{id}', [FormController::class, 'viewweb']);
    Route::put('update-webForm/{id}', [FormController::class, 'updateweb']);
    Route::post('webform_status_upadated/{id}', [FormController::class, 'webform_status_upadated']);
    Route::delete('delete-webForm/{id}', [FormController::class, 'destroyweb']);


	Route::get('hostingform', [FormController::class, 'indexhost']);
    Route::get('add-hostingform', [FormController::class, 'createhost']);
    Route::post('add-hostingform', [FormController::class, 'storehost']);
    Route::get('view-hostingform/{id}', [FormController::class, 'viewhost']);
    Route::put('update-hostingform/{id}', [FormController::class, 'updatehost']);
    Route::post('hostingform_status_upadated/{id}', [FormController::class, 'hostform_status_upadated']);
    Route::delete('delete-hostingform/{id}', [FormController::class, 'destroyhost']);

    
	Route::get('tech_supportform', [FormController::class, 'indextech']);
    Route::get('add-tech_supportform', [FormController::class, 'createtech']);
    Route::post('add-tech_supportform', [FormController::class, 'storetech']);
    Route::get('view-tech_supportform/{id}', [FormController::class, 'viewtech']);
    Route::put('update-tech_supportform/{id}', [FormController::class, 'updatetech']);
    Route::post('tech_supportform_status_upadated/{id}', [FormController::class, 'techform_status_upadated']);
    Route::delete('delete-tech_supportform/{id}', [FormController::class, 'destroytech']);



	Route::get('marketingform', [FormController::class, 'indexmarket']);
    Route::get('add-marketingform', [FormController::class, 'createmarket']);
    Route::post('add-marketingform', [FormController::class, 'storemarket']);
    Route::get('view-marketingform/{id}', [FormController::class, 'viewmarket']);
    Route::put('update-marketingform/{id}', [FormController::class, 'updatemarket']);
    Route::post('marketingform_status_upadated/{id}', [FormController::class, 'marketform_status_upadated']);
    Route::delete('delete-marketingform/{id}', [FormController::class, 'destroymarket']);



    Route::get('static-sign-in', function () {
		return view('AdminPanel.static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('AdminPanel.static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');


Route::get('/',  [FrontendController::class, 'index']);
Route::get('/ourProducts',  [FrontendController::class, 'ourProducts']);
Route::get('/connect',  [FrontendController::class, 'connect']);
Route::get('/stockholder',  [FrontendController::class, 'stockholder']);
Route::get('/addComment',  [FrontendController::class, 'addComment']);