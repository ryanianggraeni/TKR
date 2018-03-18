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
    return view('index');
});
Route::get('prestasi',function(){
	return view('frontend.prestasi');
});
Route::get('contact',function(){
	return view('frontend.contact');
});
Route::get('alumni',function(){
	return view('frontend.alumni');
});
Route::get('kurikulum',function(){
	return view('frontend.kurikulum');
});
Route::get('fasilitas',function(){
	return view('frontend.fasilitas');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth', 'role:admin']], function(){
	Route::resource('prestasi','PrestasiController');
	Route::resource('alumni','AlumniController');
	Route::resource('kurikulum','KurikulumController');
	Route::resource('fasilitas','FasilitasController');
	Route::resource('perusahaan','PerusahaansController');
	Route::resource('komponen','KomponenController');
	Route::resource('pesan','PesanController');
	Route::resource('industri','IndustriController');
	Route::resource('berita','BeritaController');
	Route::resource('prestasi','PrestasiController');
	Route::resource('kategoriberita','KategoriberitaController');
	Route::resource('user','UserController');
});

Route::group(['middleware'=>['auth', 'role:author|admin']],function(){
	Route::resource('prestasi','PrestasiController');
	Route::resource('alumni','AlumniController');
	Route::resource('kurikulum','KurikulumController');
	Route::resource('fasilitas','FasilitasController');
	Route::resource('perusahaan','PerusahaansController');
	Route::resource('komponen','KomponenController');
	Route::resource('pesan','PesanController');
	Route::resource('industri','IndustriController');
	Route::resource('berita','BeritaController');
	Route::resource('prestasi','PrestasiController');
	Route::resource('kategoriberita','KategoriberitaController');
});


Route::get('akun/profile','AkunController@profile');
Route::get('akun/profile/edit','AkunController@editProfile');
Route::post('akun/profile','AkunController@updateProfile');
Route::get('akun/password','AkunController@editPassword');
Route::post('akun/password','AkunController@updatePassword');




Route::get('/index', 'HomeController@index')->name('home');
Route::get('/show/{id}', 'BeritaController@selengkapnya');

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>'Cors'], function(){
	Route::get('/listdata','ApiController@listdata');
});

Route::middleware('Cors')->group( function (){
	Route::get('/contoh','ApiController@listdata');
});

