<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use App\Models\Submenu;

Route::group(['namespace' => 'App\Http\Controllers' ,'prefix' => '/'] , function () {

    $sitemenus= Menu::select('slug', 'class', 'submenu')->whereStatus(4)->get();
    $submenus = Submenu::select('id', 'slug', 'class')->whereStatus(4)->get();

//    $userAgent = request()->header('User-Agent');
//    $deviceDetector = new DeviceDetector($userAgent);
//    $deviceDetector->parse();
//    if ($deviceDetector->isMobile()) {
//        Session::put('device', 'mobile');
//    } else {
//        Session::put('device', 'desktop');
//    }
//    if (Session::get('device') == 'desktop') {
        foreach ($sitemenus as $menu) {
            if ($menu->submenu == 0) {
                Route::get($menu->slug, 'Site\IndexController@' . $menu->class)->name($menu->slug);
            } else {
                foreach ($submenus as $submenu) {
                    if ($submenu->menu_id == $menu->id) {
                        Route::get($menu->slug . '/' . $submenu->slug, 'Site\IndexController@' . $submenu->class);
                    }
                }
            }
        }
//    }elseif (Session::get('device') == 'mobile'){
//
//        foreach ($sitemenus as $menu) {
//            if ($menu->submenu == 0) {
//                Route::get($menu->slug, 'Mobile\IndexController@' . $menu->class)->name($menu->slug);
//            } else {
//                foreach ($submenus as $submenu) {
//                    if ($menu->submenu_route == 1) {
//                        if ($submenu->menu_id == $menu->id) {
//                            Route::get($menu->slug . '/' . $submenu->slug, 'Mobile\IndexController@' . $submenu->class);
//                        }
//                    }
//                }
//            }
//        }
//    }
});

//Route::get('/setclass'                       , [App\Http\Controllers\Site\IndexController::class, 'setclass'])           ->name('setclass');
//Route::get('/sendmail'                       , [App\Http\Controllers\Site\IndexController::class, 'sendmail'])           ->name('sendmail');
//Route::post('/getcategory'                   , [App\Http\Controllers\Site\IndexController::class, 'getcategory'])        ->name('getcategory');
//Route::post('/Consultationrequest'           , [App\Http\Controllers\Site\IndexController::class, 'Consultationrequest'])->name('Consultationrequest');
//Route::get('شرایط-ضوابط'                     , [App\Http\Controllers\Site\IndexController::class, 'terms'])              ->name('شرایط-ضوابط');
//Route::post('invoice'                        , [App\Http\Controllers\Site\IndexController::class, 'invoice'])            ->name('invoice');
//Route::get('showinvoice'                     , [App\Http\Controllers\Site\IndexController::class, 'showinvoice'])        ->name('showinvoice');
//Route::delete('invoicedestroy'               , [App\Http\Controllers\Site\IndexController::class, 'invoicedestroy'])     ->name('invoicedestroy');
//Route::get('invoicetotal'                    , [App\Http\Controllers\Site\IndexController::class, 'invoicetotal'])       ->name('invoicetotal');
//Route::get('order'                           , [App\Http\Controllers\Site\IndexController::class, 'order'])              ->name('order');
//Route::get('اخبار'.'/'.'{slug}'              , [App\Http\Controllers\Site\IndexController::class, 'singleakhbar']);
//Route::get('نمونه-قراردادها'.'/'.'{slug}'    , [App\Http\Controllers\Site\IndexController::class, 'singlecontract']);
//Route::get('تیم-ما'.'/'.'رزومه'.'/'.'{slug}' , [App\Http\Controllers\Site\IndexController::class, 'emploeeresume']);
//Route::get('محتوای-آموزشی'.'/'.'{slug}'      , [App\Http\Controllers\Site\IndexController::class, 'singlepost']);
//Route::get('/reload-captcha'                 , [App\Http\Controllers\Site\IndexController::class, 'reloadCaptcha']);
//Route::get('دپارتمان-اموزش-و-پژوهش/دوره-های-آموزشی'.'/'.'{slug}'   , [App\Http\Controllers\Site\IndexController::class, 'singleworkshop']);

//Route::middleware('admin')->namespace('App\Http\Controllers\Panel')->group(function () {
//    Route::get('panel'                    , 'IndexController@index')->name('dashboard');
//    Route::get('panel/getcities/{id}'      , 'IndexController@getcities')->name('getcities');
//    Route::resource('panel/finance'      , 'FinancialController');
//    Route::resource('panel/owner'        , 'OwnerController');
//    Route::resource('panel/menupanel'    , 'MenupanelController');
//    Route::resource('panel/submenupanel' , 'SubmenupanelController');
//    Route::resource('panel/menusite'     , 'MenusiteController');
//    Route::resource('panel/submenusite'  , 'SubmenusiteController');
//    Route::resource('panel/typeuser'     , 'TypeuserController');
//    Route::resource('panel/siteuser'     , 'SiteuserController');
//    Route::resource('panel/paneluser'    , 'PaneluserController');
//    Route::resource('panel/roleuser'     , 'RoleuserController');
//    Route::resource('panel/leveluser'    , 'LeveluserController');
//    Route::resource('panel/useraccess'   , 'UseraccessController');
//    Route::resource('panel/filemanager'  , 'FilemanagerController');
//    Route::resource('panel/project'      , 'ProjectController');
//    Route::resource('panel/paidmanage'   , 'PaidController');
//    Route::resource('panel/receivemanage', 'ReceiveController');
//    Route::resource('panel/account'      , 'AccountController');
//    Route::resource('panel/company'      , 'CompanyController');
//    Route::resource('company'            , 'CompanyController');
//    Route::resource('minute'             , 'MinuteController');
//    Route::resource('panel/flow'         , 'FlowController');
//
//
//    Route::get('panel/calendar'                 , 'CalendarController@index')->name('calendar.index');
//    Route::get('panel/calendar/events'          , 'CalendarController@getEvents')->name('calendar.events');
//    Route::post('panel/calendar/store'          , 'CalendarController@store')->name('calendar.store');
//    Route::patch('panel/calendar/update/{id}'   , 'CalendarController@update')->name('calendar.update');
//    Route::delete('panel/calendar/delete/{id}'  , 'CalendarController@destroy')->name('calendar.destroy');
//
//    Route::get('profile'                   , 'ProfileController@index')->name('profile');
//    Route::get('panel/changepassword'      , 'ChangePasswordController@index')->name('password.change.form');
//    Route::post('panel/changepassword'     , 'ChangePasswordController@change')->name('password.change.submit');
//
//    Route::post('panel/filestatus'         , 'FilemanagerController@filestatus')->name('filestatus');
//    Route::post('panel/store'              , 'FilemanagerController@store')     ->name('storemedia');
//    Route::get('panel/selectfile'          , 'FilemanagerController@selectfile')->name('selectfile');
//    Route::delete('panel/deletefile'       , 'FilemanagerController@deletefile')->name('deletefile');
//
//    /*charts*/
//    Route::get('panel/invest-month'          , 'ChartController@invest')->name('invest-month');
//
//});

Route::get('/toggle-theme', function () {
    $theme = session('theme') === 'theme-default-dark' ? 'theme-default' : 'theme-default-dark';
    session(['theme' => $theme]);
    return back();
})->name('toggle-theme');

//Auth::routes();
//
//Route::post('panel/fullregister', [App\Http\Controllers\Auth\FullRegisterController::class, 'register'])->name('fullregister');
//Route::patch('panel/fullregister/{id}', [App\Http\Controllers\Auth\FullRegisterController::class, 'update'])->name('fullregister.update');
//Route::get('logout'             , [App\Http\Controllers\Auth\FullRegisterController::class, 'logout'])->name('logout');
//Route::post('logout'            , [App\Http\Controllers\Auth\FullRegisterController::class, 'logout'])->name('logout');



