<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//User configurations
Route::get('/user/profile', 'UserController@profile')->name('user.profile');

/////////////////Models CRUD operations

//Earning
Route::get('/earning/create', 'EarningController@create')->name('earning.create');
Route::post('/earning/save', 'EarningController@save')->name('earning.save');
Route::patch('/earning/update/{id}', 'EarningController@update')->name('earning.update');
Route::delete('/earning/delete/{id}', 'EarningController@delete')->name('earning.delete');
Route::get('/earning/get/{id}', 'EarningController@get')->name('earning.get');
Route::get('/earning/all', 'EarningController@all')->name('earning.all');

//Advice
Route::get('/advice/create', 'AdviceController@create')->name('advice.create');
Route::post('/advice/save', 'AdviceController@save')->name('advice.save');
Route::post('/advice/update', 'AdviceController@update')->name('advice.update');
Route::delete('/advice/delete', 'AdviceController@delete')->name('advice.delete');
Route::get('/advice/get/{id}', 'AdviceController@get')->name('advice.get');
Route::get('/advice/all', 'AdviceController@all')->name('advice.all');

//Expense
Route::get('/expense/create', 'ExpenseController@create')->name('expense.create');
Route::post('/expense/save', 'ExpenseController@save')->name('expense.save');
Route::patch('/expense/update/{id}', 'ExpenseController@update')->name('expense.update');
Route::delete('/expense/delete/{id}', 'ExpenseController@delete')->name('expense.delete');
Route::get('/expense/get/{id}', 'ExpenseController@get')->name('expense.get');
Route::get('/expense/all', 'ExpenseController@all')->name('expense.all');

//milestone
Route::get('/milestone/create', 'MileStoneController@create')->name('milestone.create');
Route::post('/milestone/save', 'MileStoneController@save')->name('milestone.save');
Route::patch('/milestone/update/{id}', 'MileStoneController@update')->name('milestone.update');
Route::delete('/milestone/delete/{id}', 'MileStoneController@delete')->name('milestone.delete');
Route::get('/milestone/get/{id}', 'MileStoneController@get')->name('milestone.get');
Route::get('/milestone/all', 'MileStoneController@all')->name('milestone.all');