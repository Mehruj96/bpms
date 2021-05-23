 <?php

use App\Http\Controllers\Admin\AboutusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\SalesController;
use App\Http\Controllers\Admin\BeauticianController;
use App\Http\Controllers\Admin\FprofileController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController as FrontUserController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\ServiceCartController;

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

    Route::get('login',[FrontUserController::class,'login'])->name('user.login');
    Route::post('dologin',[FrontUserController::class,'doLogin'])->name('user.doLogin');
    Route::group(['middleware' => 'verifyuser'],function () {

        Route::get('appointmentf/{id}', [HomeController::class, 'appointmentf'])->name('appointmentf');
        Route::post('appointment/make/{id}', [HomeController::class, 'appointmentMake'])->name('appointment.make');


        Route::get('servicecart/{id}', [ServiceCartController::class, 'servicecart'])->name('servicecart');
        // Route::post('servicecart/make/{id}', [ServiceCartController::class, 'servicecartMake'])->name('servicecart.make');
    });


Route::get('about', [HomeController::class, 'about'])->name('about.us');
Route::get('servicesf', [HomeController::class, 'servicesf'])->name('servicesf');
Route::get('servicesf/{id}', [HomeController::class, 'servicesView'])->name('services.view');
Route::get('beauticianf', [HomeController::class, 'beauticianf'])->name('beauticianf');
Route::get('beauticianf/{id}', [HomeController::class, 'beauticianView'])->name('beautician.view');
Route::get('contactf', [HomeController::class, 'contactf'])->name('contactf');
Route::get('adminf', [HomeController::class, 'adminf'])->name('adminf');

// Route::get('login', [FrontUserController::class, 'login'])->name('user.login');
// Route::post('dologin', [FrontUserController::class, 'doLogin'])->name('user.doLogin');
Route::get('register', [FrontUserController::class, 'register'])->name('user.register');
Route::post('doregister', [FrontUserController::class, 'doRegister'])->name('user.doRegister');
Route::get('logout', [FrontUserController::class, 'logout'])->name('user.logout');

Route::get('userprofile', [UserProfileController::class, 'userprofile'])->name('userprofile');

Route::get('servicecart/{id}', [ServiceCartController::class, 'servicecart'])->name('servicecart');
Route::get('viewcart', [ServiceCartController::class, 'viewcart'])->name('cart');
Route::get('/cart/delete/{rowId}',[ServiceCartController::class,'delete'])->name('cart.delete');
Route::get('/cart/delete/',[ServiceCartController::class,'alldelete'])->name('cart.alldelete');

// All Admin Controller(Backend)

Route::prefix('admin')->group(function(){

    Route::get('/login',[UserController::class,'showLoginForm'])->name('login-form');
    Route::post('/login',[UserController::class,'login'])->name('login');
    Route::group(['middleware' => 'auth'],function () {


    Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/master',[AdminController::class,'master']);
    Route::get('/logout',[UserController::class,'logout'])->name('logout');


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
     Route::get('/appointment/timeslot',[AppointmentController::class,'timeslot'])->name('timeslot');
     Route::post('/appointment/timeslot',[AppointmentController::class,'timeslotAdd'])->name('timeslot.add');
     Route::get('/slots/delete/{id}',[AppointmentController::class,'slotsDelete'])->name('slots.delete');

    Route::get('{id}/{status}',[AppointmentController::class,'updateStatus'])->name('appointment.status');



    //services//
    Route::get('/services',[ServiceController::class,'services'])->name('services');
    Route::post('/services/add',[ServiceController::class,'add'])->name('services.add');
    Route::get('/services/delete/{id}',[ServiceController::class,'delete'])->name('services.delete');
    Route::get('/services/edit/{id}',[ServiceController::class,'edit'])->name('services.edit');
    Route::post('/services/update/{id}',[ServiceController::class,'update'])->name('services.update');

    //pages//
    Route::get('pages/contact',[PagesController::class,'contact'])->name('contact');

    //reports//
    Route::get('/expanse',[ReportsController::class,'expanse'])->name('expanse');
    Route::get('/sales',[SalesController::class,'sales'])->name('sales');
    Route::get('/sales/create/{id}',[SalesController::class,'salesCreate'])->name('sales.create');
    Route::post('/sales/store/{id}',[SalesController::class,'salesStore'])->name('sales.store');
    Route::get('/salesprofile',[SalesController::class,'salesprofile'])->name('salesprofile');
    Route::get('/invoice/get/{id}',[SalesController::class,'invoice'])->name('invoice');

    //About//
    Route::get('/about',[AboutusController::class,'view'])->name('aboutus');
    Route::get('/about/form/create',[AboutusController::class,'form'])->name('aboutus.form.create');
    Route::post('/about/create',[AboutusController::class,'create'])->name('aboutus.create');
    Route::get('/about/delete/{id}',[AboutusController::class,'delete'])->name('aboutus.delete');

    //userprofile//
    Route::get('/profile',[FprofileController::class,'profile'])->name('profile');
    Route::get('/profile/delete/{id}',[FprofileController::class,'delete'])->name('profile.delete');

    });

});
