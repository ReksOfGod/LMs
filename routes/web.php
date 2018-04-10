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

Route::get('/','StockController@samplePlot');

Route::get('create-chart/{type}','ChartController@makeChart');
//Stock Chart routes
Route::get('stock/add','StockController@create');
Route::post('stock/add','StockController@store');
Route::get('stocks','StockController@index');
Route::get('stock/chart','StockController@chart');

//Recaptcha ContactusPage
Route::get('contactus', 'ContactUsController@getContactus');
Route::post('contactus', 'ContactUsController@postContactus')->name('contactus');

//Security Upload files
Route::get('file','FileController@create');

Route::post('file','FileController@store');

//Image Upload examples routes
Route::get('images-upload', 'HomeController@imagesUpload');

Route::post('images-upload', 'HomeController@imagesUploadPost')->name('images.upload');

//Comment system routes
Route::get('/{pageId}', function($pageId) {
	return view('page',['pageId' => $pageId]);
});
// Route for index page
Route::get('comments/{pageId}', 'CommentController@index');
// Route for store comment
Route::post('comments', 'CommentController@store');
// Route for update comment
Route::post('comments/{commentId}/{type}', 'CommentController@update');
/*

//Bank Account routes
Route::get('stock/add','BankAccountsController@create');
Route::post('stock/add','BankAccountsController@store');
Route::get('stocks','BankAccountsController@index');
Route::get('stock/chart','BankAccountsController@chart');

// Disbursement routes
Route::get('disbursement/add','DisbursementController@create');
Route::post('disbursement/add','DisbursementController@store');
Route::get('disbursements','DisbursementController@index');
Route::get('disbursement/chart','DisbursementController@chart');

// Guarantor routes
Route::get('stock/add','GuarantorController@create');
Route::post('stock/add','GuarantorController@store');
Route::get('stocks','GuarantorController@index');
Route::get('stock/chart','GuarantorController@chart');

//Income and Expenditure routes
Route::get('stock/add','IncomeAndExpenditureController@create');
Route::post('stock/add','IncomeAndExpenditureController@store');
Route::get('stocks','IncomeAndExpenditureController@index');
Route::get('stock/chart','IncomeAndExpenditureController@chart');

//loan routes
Route::get('stock/add','LoanController@create');
Route::post('stock/add','LoanController@store');
Route::get('stocks','LoanController@index');
Route::get('stock/chart','LoanController@chart');

//member routes
Route::get('member/add','MemberController@create');
Route::post('member/add','MemberController@store');
Route::get('members','MemberController@index');
//Route::get('member/chart','MemberController@chart');

//member routes
Route::get('stock/add','LoanRepaymentsController@create');
Route::post('stock/add','LoanRepaymentsController@store');
Route::get('loan_repayments','LoanRepaymentsController@index');
Route::get('stock/chart','LoanRepaymentsController@chart');
*/


//widget
//Route::resource('widget', 'WidgetController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
