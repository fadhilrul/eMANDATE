<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/emandate-dashboard', 'DashboardController@dashboard_emandate')->name('emandate.dashboard');
Route::get('/emandate-list', 'EmandateController@index')->name('Emandate_list.index');

Route::get('/emandate-listdetails', 'EmandateControllerDetails@index')->name('Emandate_listDetails.index');
Route::resource('link','EmandateControllerDetails');

Route::resource('linkmainenrp','EmandateController');

/* for view search  result*/
Route::get('/EmandateInfo', 'EmandateInfoController@index')->name('EmandateInfo.index');
Route::resource('linkviewsearch','EmandateInfoController');

//livewire component route for search
Route::get('/search-box', 'searchController@index')->name('search.index');
//end livewire component route for search

Route::get('/cft-list', 'CFTController@index')->name('cft_list.index');
Route::get('/cft-listdetails', 'CFTControllerDetails@index')->name('cft_listdetails.index');
Route::resource('linkcft','CFTControllerDetails');

Route::resource('linkmainCFT','CFTController');

Route::get('/search_cftlist', 'searchCFTController@index')->name('searchcft.index');

Route::resource('change-status','StatusController');

Route::get('/search_mainenrp', 'searchMainENRPController@index')->name('searchenrp.index');




/* TEST FOR CRUD USING Product */
Route::resource('products','ProductController');

