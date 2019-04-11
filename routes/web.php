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
Auth::routes();

// HOME 
Route::get('/', 'HomeController@index')->name('home');

// TEMAS
Route::post('/temas', 'HomeController@store')->name('home');
Route::get('/temas/edit', 'HomeController@editIndex');
Route::get('/temas/temaEdit/{id}', 'HomeController@edit');
Route::patch('/temas/editTema/{id}', 'HomeController@update');
Route::delete('/temas/deleteTema/{id}', 'HomeController@destroy');

// SECTIONS
Route::get('/temas/{id}', 'SectionController@index')->name('sections');
Route::post('/section', 'SectionController@store');
Route::get('/sections/edit/{id}', 'SectionController@editIndex');
Route::get('/sections/sectionEdit/{id}', 'SectionController@edit');
Route::patch('/sections/editSection/{id}', 'SectionController@update');
Route::delete('/sections/deleteSection/{id}', 'SectionController@destroy');

// NOTAS
Route::get('/sections/{id}', 'NotasController@index')->name('notas');
Route::post('/nota', 'NotasController@store');
Route::get('/nota/edit/{id}', 'NotasController@editIndex');
Route::get('/notas/notaEdit/{id}', 'NotasController@edit');
Route::patch('/notas/editNota/{id}', 'NotasController@update');
Route::delete('/notas/deleteNota/{id}', 'NotasController@destroy');
Route::get('/nota/{id}', 'NotasController@indexNota');
Route::patch('/nota/contenido/{id}', 'NotasController@storeContenido');

// LINKS NOTAS
Route::post('/storeLinksNota', 'LinksnotasController@store');
Route::post('/storeLinksSections', 'LinkssectionsController@store');

