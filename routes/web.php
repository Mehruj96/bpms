 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\BeauticianController;
use App\Http\Controllers\Frontend\HomeController;

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

// All Frontend Controller
Route::get('/', function () {
    return view('frontend.layouts.index');
})->name('home');

Route::get('about', [HomeController::class, 'about'])->name('about.us');
Route::get('servicesf', [HomeController::class, 'servicesf'])->name('servicesf');
Route::get('beauticianf', [HomeController::class, 'beauticianf'])->name('beauticianf');
Route::get('contactf', [HomeController::class, 'contactf'])->name('contactf');
Route::get('adminf', [HomeController::class, 'adminf'])->name('adminf');
Route::get('appointmentf', [HomeController::class, 'appointmentf'])->name('appointmentf');
Route::post('appointment/make', [HomeController::class, 'appointmentMake'])->name('appointment.make');



// All Admin Contrioller
Route::prefix('admin')->group(function(){

    Route::get('/', function () {
        return view('backend.layouts.dashboard');
    });
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/master',[AdminController::class,'master']);


    //customer//
    Route::get('/customer',[CustomerController::class,'customer'])->name('customer');
    Route::post('/customer/add',[CustomerController::class,'add'])->name('customer.add');
    Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::put('/customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');

    //Beautician//
    Route::get('/beautician',[BeauticianController::class,'list'])->name('beautician');
    Route::post('/beautician/add',[BeauticianController::class,'add'])->name('beautician.add');
    Route::get('/beautician/edit/{id}',[BeauticianController::class,'edit'])->name('beautician.edit');
    Route::put('/beautician/update/{id}',[BeauticianController::class,'update'])->name('beautician.update');
    Route::get('/beautician/delete/{id}',[BeauticianController::class,'delete'])->name('beautician.delete');

    //appointment//
    Route::get('/appointment',[AppointmentController::class,'all'])->name('all');
    Route::get('/appointment/new',[AppointmentController::class,'new'])->name('new');
    Route::get('/appointment/delete/{id}',[AppointmentController::class,'delete'])->name('appointment.delete');
    Route::get('/appointment/unread/{id}',[AppointmentController::class,'unread'])->name('appointment.unread');
    Route::get('/appointment/force/{id}',[AppointmentController::class,'force'])->name('appointment.force');
    Route::post('/appointment/mark-read',[AppointmentController::class,'markRead'])->name('appointment.markread');
    Route::post('/appointment/mark-delete',[AppointmentController::class,'markDelete'])->name('appointment.markdelete');
    //Route::get('/admin/appointment/{id}',[AppointmentController::class,'show'])->name('show');
    // Route::get('/appointment/accepted',[AppointmentController::class,'accepted'])->name('accepted');
    // Route::get('/appointment/rejected',[AppointmentController::class,'rejected'])->name('rejected');

    //services//
    Route::get('/services',[ServiceController::class,'services'])->name('services');
    Route::post('/services/add',[ServiceController::class,'add'])->name('services.add');
    Route::get('/services/delete/{id}',[ServiceController::class,'delete'])->name('services.delete');


    //pages//
    Route::get('pages/about',[PagesController::class,'about'])->name('about');
    Route::get('pages/contact',[PagesController::class,'contact'])->name('contact');

    //reports//
    Route::get('/expanse',[ReportsController::class,'expanse'])->name('expanse');
    Route::get('/sales',[ReportsController::class,'sales'])->name('sales');

});
