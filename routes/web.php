<?php

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

Route::get('/getuserinfo', 'UserSystemInfoController@getUserSystemInfo');
Route::get('/', 'DietPlanController@setLocale');

Route::group(['prefix' => '{lang}'], function() {

    Route::get('/', 'DietPlanController@index');
    Route::get('/showdiet/{key?}/week/{week_num}', 'DietPlanController@showDietPlan');
    Route::post('/showdiet/{key?}/week/{week_num}', 'DietPlanController@weekPlan');
    Route::get('/dietdetail/{key}/recipe/{id}', 'DietPlanController@dietDetail');
    Route::get('/pdfdownload', 'PdfdownloadController@downloadpdf');
    
});

Route::post('/savedietplan', 'DietPlanController@saveDietPlan');
Route::post('/stripepayment', 'DietPlanController@stripePayment')->name('stripepayment');
Route::post('/sendemail', 'SendEmailController@send');
