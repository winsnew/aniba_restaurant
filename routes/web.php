<?php

use App\Http\Controllers\Cms\CategoryController;
use App\Http\Controllers\Cms\ContactUsController;
use App\Http\Controllers\Cms\HomeController as CmsHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cms\LoginController;
use App\Http\Controllers\Cms\MenuController;
use App\Http\Controllers\Cms\MetadataController;
use App\Http\Controllers\Cms\OperationHourController;
use App\Http\Controllers\Cms\OurBarController;
use App\Http\Controllers\Cms\OurChefsController;
use App\Http\Controllers\Cms\OurStoryController;
use App\Http\Controllers\Cms\OurTeamController;
use App\Http\Controllers\Cms\PopupMenuController;
use App\Http\Controllers\Cms\PressController;
use App\Http\Controllers\Cms\GalleryController;
use App\Http\Controllers\Cms\PrivateEventController;
use App\Http\Controllers\Cms\ReservationController;
use App\Http\Controllers\Cms\UsersController;
use Illuminate\Support\Facades\Artisan;
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

// Route::get('/', function () {
//     return view('/front/pages/index');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/question/send', [HomeController::class, 'question']);

Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('proses_login', [LoginController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin'], function() {
        Route::group(['prefix' => 'home'], function(){
            Route::get('', [CmsHomeController::class, 'index'])->name('cms_home');
            Route::post('/background/{content}/{type}', [CmsHomeController::class, 'edit_background'])->name('edit_home_desktop');
            Route::post('/logo', [CmsHomeController::class, 'edit_logo']);
            Route::post('/favicon', [CmsHomeController::class, 'edit_favicon']);
        });
        Route::group(['prefix' => 'our-story'], function() {
            Route::get('', [OurStoryController::class, 'index'])->name('our_story');
            Route::post('title', [OurStoryController::class, 'edit_title'])->name('edit_story_title');
            Route::post('content/{content}', [OurStoryController::class, 'edit_content']);
        });
        Route::group(['prefix' => 'our-chefs'], function(){
            Route::get('', [OurChefsController::class, 'index'])->name('our_chefs');
            Route::post('/{chef}', [OurChefsController::class, 'edit_chef']);
            Route::post('/image/{content}', [OurChefsController::class, 'edit_image']);
            Route::post('/background/{type}', [OurChefsController::class, 'edit_background']);
        });
        Route::group(['prefix' => 'our-teams'], function(){
            Route::get('', [OurTeamController::class, 'index'])->name('our_teams');
            Route::post('/{team}', [OurTeamController::class, 'edit_team']);
            Route::post('/image/{content}', [OurTeamController::class, 'edit_image']);
            Route::post('/background/{type}', [OurTeamController::class, 'edit_background']);
        });
        Route::group(['prefix' => 'our-bar'], function(){
            Route::get('', [OurBarController::class, 'index'])->name('our_bar');
            Route::post('', [OurBarController::class, 'edit_content']);
            Route::post('/background/{content}/{type}', [OurBarController::class, 'edit_background']);
        });
        Route::group(['prefix' => 'operation-hours'], function(){
            Route::get('', [OperationHourController::class, 'index'])->name('operation_hours');
            Route::post('', [OperationHourController::class, 'edit_operation']);
            Route::post('/background/{content}/{type}', [OperationHourController::class, 'edit_background']);
        });
        Route::group(['prefix' => 'private-events'], function(){
            Route::get('', [PrivateEventController::class, 'index'])->name('private_events');
            Route::post('/content/{content}', [PrivateEventController::class, 'edit_content']);
            Route::post('/background/{content}/{type}', [PrivateEventController::class, 'edit_background']);
        });
        Route::group(['prefix' => 'contact-us'], function(){
            Route::get('', [ContactUsController::class, 'index'])->name('contact_us');
            Route::post('', [ContactUsController::class, 'edit_contact']);
            Route::post('/background/{content}/{type}', [ContactUsController::class, 'edit_background']);
        });
        Route::group(['prefix' => 'press'], function(){
            Route::get('', [PressController::class, 'index'])->name('press');
            Route::post('', [PressController::class, 'create']);
            Route::post('/update/{id}', [PressController::class, 'update']);
            Route::post('/delete/{id}', [PressController::class, 'delete']);
            Route::post('/background/{content}/{type}', [PressController::class, 'edit_background']);
        });

        Route::group(['prefix' => 'category'], function(){
            Route::get('', [CategoryController::class, 'index'])->name('category');
            Route::post('', [CategoryController::class, 'create']);
            Route::post('/updateposition', [CategoryController::class, 'changeCategoryPosition'])->name('category');
            Route::post('/update/{id}', [CategoryController::class, 'update']);
            Route::post('/delete/{id}', [CategoryController::class, 'delete']);
            Route::get('/{category}/galleries', [GalleryController::class, 'index'])->name('category.galleries');
            Route::post('/{category}/galleries', [GalleryController::class, 'store'])->name('category.galleries.store');
        });

        Route::group(['prefix' => 'popup'], function(){
            Route::get('', [PopupMenuController::class, 'index'])->name('popup');
            Route::post('', [PopupMenuController::class, 'create']);
            Route::post('/update/{id}', [PopupMenuController::class, 'edit_popup']);
            Route::post('/background/{type}', [PopupMenuController::class, 'edit_background']);
        });
        Route::group(['prefix' => 'user'], function(){
            Route::get('', [UsersController::class, 'index'])->name('users');
            Route::post('', [UsersController::class, 'save']);
            Route::get('/delete/{id}', [UsersController::class, 'delete']);
        });
        Route::group(['prefix' => 'reservation'], function(){
            Route::get('', [ReservationController::class, 'index'])->name('reservations');
            Route::post('', [ReservationController::class, 'edit_reservation'])->name('edit_reservation');
        });
        Route::group(['prefix' => 'navbar'], function(){
            Route::get('', [MenuController::class, 'index'])->name('navbar');
            Route::post('/{menu}', [MenuController::class, 'update'])->name('edit_navbar');
            Route::post('/submenu/create', [MenuController::class, 'createSubmenu'])->name('create_submenu');
            Route::post('/submenu/changelist', [MenuController::class, 'changeSubmenuList'])->name('change_submenu_list');
            Route::post('/submenu/{submenu}', [MenuController::class, 'updateSubmenu'])->name('edit_submenu');
            Route::post('/submenu/{submenu}/delete', [MenuController::class, 'deleteSubmenu'])->name('delete_submenu');
        });

        Route::group(['prefix' => 'metadata'], function(){
            Route::get('', [MetadataController::class, 'index'])->name('metadata');
            Route::post('', [MetadataController::class, 'edit_metadata'])->name('edit_metadata');
        });

        Route::get('storage-link', function(){
            Artisan::call('storage:link --relative');
        });
    });
});
