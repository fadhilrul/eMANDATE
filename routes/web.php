<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticatedUser;
use App\Http\Controllers\AuthenticationUser;
// use App\Http\Controllers\DashboardController;

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

Route::get('/logmasuk', [AuthenticationUser::class, 'logmasuk'])->name('logmasuk');
Route::post('/loggingin', [AuthenticationUser::class, 'loggingin'])->name('loggingin');
Route::get('/logkeluar', [AuthenticationUser::class, 'logkeluar'])->name('logkeluar');

Route::middleware([AuthenticatedUser::class])->group(function() {
     
     /* Dashboard */
      Route::get('/', 'DashboardController@index')->name('dashboard');
      Route::get('/emandate-dashboard', 'DashboardController@dashboard_emandate')->name('emandate.dashboard');
      Route::get('/emandate-list', 'EmandateController@index')->name('Emandate_list.index');
        
      /* Report */
      Route::get('/emandate-report', 'EmandateReportController@index')->name('report.dashboard');
      Route::get('/emandate-report/sekatan-pemotongan', 'EmandateReportController@Blockedpayment')->name('report.blockedpayment');

      /* emandate_info */
      Route::get('/search-box', 'searchController@index')->name('search.index');
      Route::get('/EmandateInfo', 'EmandateInfoController@index')->name('EmandateInfo.index');
      Route::post('/emandateinfoaactstatus', 'EmandateInfoController@activestatus')->name('EmandateInfo.activestatus');
      Route::resource('linkviewsearch','EmandateInfoController');

      /* for CFT */
      Route::resource('linkmainCFT','CFTController');
      Route::get('/search_cftlist', 'searchCFTController@index')->name('searchcft.index');
      Route::resource('linkcft','CFTControllerDetails');

      /* For ENRP */
      Route::get('/search_mainenrp', 'searchMainENRPController@index')->name('searchenrp.index');
      Route::resource('linkmainenrp','EmandateController');
      Route::resource('link','EmandateControllerDetails');

      /*TESTING SP */
      Route::get('/sp_info', 'DashboardController@sp_info')->name('dashboard.sp_info');


      /* TEST FOR CRUD USING Product */
      //Route::resource('products','ProductController');
      //Route::resource('change-status','StatusController');
      //Route::get('/cft-list', 'CFTController@index')->name('cft_list.index');
     //Route::get('/cft-listdetails', 'CFTControllerDetails@index')->name('cft_listdetails.index');
     //Route::get('/emandate-listdetails', 'EmandateControllerDetails@index')->name('Emandate_listDetails.index'); 
     
});