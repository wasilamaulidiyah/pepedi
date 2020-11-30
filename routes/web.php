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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

});
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
	Route::prefix('admin')->name('a.')->group(function () {
		Route::prefix('petani')->name('petani.')->group(function () {
			Route::get('/','Admin\PetaniController@index')
				->name('index');
			Route::get('/create','Admin\PetaniController@create')
				->name('create');
			Route::get('/{id}','Admin\PetaniController@show')
				->name('show');
			Route::get('/{id}/edit','Admin\PetaniController@edit')
				->name('edit');
			Route::put('/{id}/update','Admin\PetaniController@update')
				->name('update');
			Route::post('/create','Admin\PetaniController@store')
				->name('store');
		});
		Route::prefix('indikator')->name('i.')->group(function () {
			Route::prefix('pratanam')->name('pr.')->group(function () {
				Route::get('/','Admin\IndikatorPratanamController@index')
					->name('pratanam');
				Route::get('/{id}','Admin\IndikatorPratanamController@show')
					->name('show');
				Route::get('/{id}/penjadwalan','Admin\IndikatorPratanamController@edit')
					->name('edit');
				Route::put('/{id}/unggah','Admin\IndikatorPratanamController@update')
					->name('update');
				Route::get('/{id}/penjadwalan/{idjadwal}/ubah','Admin\IndikatorPratanamController@editJadwal')
					->name('ubah.jadwal');
				Route::put('/{id}/penjadwalan/{idjadwal}/ubah','Admin\IndikatorPratanamController@updateJadwal')
					->name('update.jadwal');
			});
			Route::prefix('pascatanam')->name('ps.')->group(function () {
				Route::get('/','Admin\IndikatorPascaTanamController@index')
					->name('pascatanam');
				Route::get('/{id}','Admin\IndikatorPascaTanamController@show')
					->name('show');
				Route::get('/{id}/penjadwalan','Admin\IndikatorPascaTanamController@edit')
					->name('edit');
				Route::put('/{id}/unggah','Admin\IndikatorPascaTanamController@update')
					->name('update');
				Route::get('/{id}/penjadwalan/{idjadwal}/ubah','Admin\IndikatorPascaTanamController@editJadwal')
					->name('ubah.jadwal');
				Route::put('/{id}/penjadwalan/{idjadwal}/ubah','Admin\IndikatorPascaTanamController@updateJadwal')
					->name('update.jadwal');
			});
			Route::prefix('tanam')->name('tn.')->group(function () {
				Route::get('/','Admin\IndikatorTanamController@index')
					->name('tanam');
				Route::get('/{id}','Admin\IndikatorTanamController@show')
					->name('show');
				Route::get('/{id}/penjadwalan','Admin\IndikatorTanamController@edit')
					->name('edit');
				Route::put('/{id}/unggah','Admin\IndikatorTanamController@update')
					->name('update');
				Route::get('/{id}/penjadwalan/{idjadwal}/ubah','Admin\IndikatorTanamController@editJadwal')
					->name('ubah.jadwal');
				Route::put('/{id}/penjadwalan/{idjadwal}/ubah','Admin\IndikatorTanamController@updateJadwal')
					->name('update.jadwal');
			});
		});		
	});	
});	
Route::group(['middleware' => ['auth', 'checkRole:petani']], function () {
	Route::prefix('petani')->name('p.')->group(function () {
		Route::get('/', function () {
		    return 'pppp';
		});
		Route::prefix('padi')->name('padi.')->group(function () {
			Route::get('/','Petani\PadiController@index')
				->name('index');	
			Route::get('/create','Petani\PadiController@create')
				->name('create');		
			Route::get('/{id}','Petani\PadiController@show')
				->name('show');		
			Route::get('/{id}/edit','Petani\PadiController@edit')
				->name('edit');		
			Route::post('/create','Petani\PadiController@store')
				->name('store');
			Route::put('/createProses/{jenis_padi}/{varietas}','Petani\PadiController@storeProses')
				->name('store.proses');
			Route::put('/{id}/update','Petani\PadiController@update')
				->name('update');
			Route::delete('/{id}','Petani\PadiController@destroy')
				->name('delete');
		});		
		Route::prefix('indikator')->name('i.')->group(function () {

			// ==== PRATANAM ====/
			Route::get('/pratanam','Petani\IndikatorController@praTanam')
				->name('pra.tanam');
			Route::get('/pratanam/{id}','Petani\IndikatorController@showPraTanam')
				->name('pra.show');
			// ==== PASCATANAM ====/
			Route::get('/pascatanam','Petani\IndikatorController@pascaTanam')
				->name('ps.tanam');
			Route::get('/pascatanam/{id}','Petani\IndikatorController@showPascaTanam')
				->name('ps.show');
			// ==== TANAM ====/
			Route::get('/tanam/{id}','Petani\IndikatorController@showTanam')
				->name('in.show');	
			Route::get('/tanam','Petani\IndikatorController@tanam')
				->name('in.tanam');


			Route::put('/tanam/{varietas}/{jenis_padi}','Petani\IndikatorController@inikatorTanam')
				->name('tanam');
			Route::put('/pratanam/{varietas}/{jenis_padi}','Petani\IndikatorController@inikatorPrataman')
				->name('pratanam');
			Route::put('/pascatanam/{varietas}/{jenis_padi}','Petani\IndikatorController@inikatorPascatanam')
				->name('pascatanam');

		});		
	});	
});	