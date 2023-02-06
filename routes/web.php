<?php

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

Route::get('/', function () {
    return view('v1.web.pages.dashboard');
});

Route::prefix('user')->group(function (){
    Route::view('login','v1.web.pages.auth.login');
    Route::view('register','v1.web.pages.auth.register');
    Route::view('password_recovery','v1.web.pages.auth.passwordRecovery');
});


Route::prefix('error')->group(function(){
    Route::view('404','v1.web.pages.errors.404');
    Route::view('500','v1.web.pages.errors.500');
    Route::view('maintenance','v1.web.pages.errors.maintenance');
});

                //   forms and charts
Route::prefix('/Forms&Charts')->group(function (){
                    //apps
        Route::prefix('/apps')->group(function (){
            Route::view('/calendar','v1.web.pages.forms&Charts.apps.calendar');
            Route::view('contact_app','v1.web.pages.forms&Charts.apps.contactApp');
            Route::view('/toDoApp','v1.web.pages.forms&Charts.apps.toDoApp');
            Route::view('/mail_box','v1.web.pages.forms&Charts.apps.mailBox');
    });
                    //widgets
        Route::prefix('/widgets')->group(function (){
                Route::prefix('custom')->group(function (){
                Route::view('/blogs','v1.web.pages.forms&Charts.widgets.custom.blogs');
                Route::view('/charts','v1.web.pages.forms&Charts.widgets.custom.charts');
                Route::view('list','v1.web.pages.forms&Charts.widgets.custom.list');
                Route::view('/social','v1.web.pages.forms&Charts.widgets.custom.social');
                Route::view('/statistic','v1.web.pages.forms&Charts.widgets.custom.statistic');
                Route::view('/weather','v1.web.pages.forms&Charts.widgets.custom.weather');
                Route::view('/widgets','v1.web.pages.forms&Charts.widgets.custom.widgets');
                Route::view('/emails','v1.web.pages.forms&Charts.widgets.custom.emails');
        });
        Route::prefix('/maps')->group(function (){
            Route::view('/google_maps','v1.web.pages.forms&Charts.widgets.maps.googleMaps');
            Route::view('/vector_maps','v1.web.pages.forms&Charts.widgets.maps.vectorMaps');
        });
        Route::prefix('/modals')->group(function (){
            Route::view('components','v1.web.pages.forms&Charts.widgets.modals.components');
            Route::view('/sweat_alert','v1.web.pages.forms&Charts.widgets.modals.sweatAlert');
            Route::view('/notification','v1.web.pages.forms&Charts.widgets.modals.notification');
        });
    });
                    //ecommerce
        Route::prefix('/ecommerce')->group(function (){
        Route::view('/products','v1.web.pages.forms&Charts.ecommerce.products');
        Route::view('/cart','v1.web.pages.forms&Charts.ecommerce.cart');
        Route::view('/edit','v1.web.pages.forms&Charts.ecommerce.edit');
        Route::view('/details','v1.web.pages.forms&Charts.ecommerce.details');
        Route::view('/orders','v1.web.pages.forms&Charts.ecommerce.orders');
        Route::view('/checkout','v1.web.pages.forms&Charts.ecommerce.checkout');
    });
        Route::prefix('/sample_pages')->group(function (){
            Route::view('inVoice','v1.web.pages.forms&Charts.samplePages.inVoice');
            Route::view('inVoice2','v1.web.pages.forms&Charts.samplePages.inVoice2');
            Route::view('inVoice_List','v1.web.pages.forms&Charts.samplePages.inVoiceList');
            Route::view('inVoice_List2','v1.web.pages.forms&Charts.samplePages.inVoiceList2');
            Route::view('contact_user_list','v1.web.pages.forms&Charts.samplePages.contactUserList');
            Route::view('sample_faq','v1.web.pages.forms&Charts.samplePages.sample_faq');





        });

});





// Route::prefix('emails')->group(function(){
//     Route::view('change_email','v1.web.emails.emailChange');
//     Route::view('account_close','v1.web.emails.accountClose');

// });
