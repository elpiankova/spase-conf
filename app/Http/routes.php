<?php

	/*
	|--------------------------------------------------------------------------
	| Routes File
	|--------------------------------------------------------------------------
	|
	| Here is where you will register all of the routes in an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the controller to call when that URI is requested.
	|
	*/


	/*
	|--------------------------------------------------------------------------
	| Application Routes
	|--------------------------------------------------------------------------
	|
	| This route group applies the "web" middleware group to every route
	| it contains. The "web" middleware group is defined in your HTTP
	| kernel and includes session state, CSRF protection, and more.
	|
	*/

	Route::group(['middleware' => ['web']], function () {


		Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

		Route::get('/', 'WelcomeController@index');
		Route::get('/archive', 'WelcomeController@archive');
		Route::get('/contact', 'WelcomeController@contact');
		Route::post('/contact', 'WelcomeController@contactpost');

		Route::get('/conference/info', 'WelcomeController@confInfo');
		Route::get('/conference/thesis', 'WelcomeController@confThesis');
		Route::get('/conference/place', 'WelcomeController@confPlace');
		Route::get('/conference/committee', 'WelcomeController@confCommittee');
		// Вызов страницы регистрации пользователя
		Route::get('register', 'AuthController@register');
// Пользователь заполнил форму регистрации и отправил
		Route::post('register', 'AuthController@registerProcess');
// Пользователь получил письмо для активации аккаунта со ссылкой сюда
		Route::get('activate/{id}/{code}', 'AuthController@activate');
// Вызов страницы авторизации
		Route::get('login', 'AuthController@login');
// Пользователь заполнил форму авторизации и отправил
		Route::post('login', 'AuthController@loginProcess');
// Выход пользователя из системы
		Route::get('logout', 'AuthController@logoutuser');
// Пользователь забыл пароль и запросил сброс пароля. Это начало процесса -
// Страница с запросом E-Mail пользователя
		Route::get('reset', 'AuthController@resetOrder');
// Пользователь заполнил и отправил форму с E-Mail в запросе на сброс пароля
		Route::post('reset', 'AuthController@resetOrderProcess');
// Пользователю пришло письмо со ссылкой на эту страницу для ввода нового пароля
		Route::get('reset/{id}/{code}', 'AuthController@resetComplete');
// Пользователь ввел новый пароль и отправил.
		Route::post('reset/{id}/{code}', 'AuthController@resetCompleteProcess');
// Сервисная страничка, показываем после заполнения рег формы, формы сброса и т.
// о том, что письмо отправлено и надо заглянуть в почтовый ящик.
		Route::get('wait', 'AuthController@wait');

		Route::get('phpinfo', function () {
			phpinfo();
		});
		Route::get('gitpull', function () {
			system('git pull');
		});
	});

	Route::group(['middleware' => ['web', 'authuser']], function () {
//    Головна сторінка користувача
		Route::get('home', 'UserController@home');
//    Редагування особистих даних
		Route::get('home/edit', 'UserController@edit');
		Route::post('home/edit', 'UserController@editProcess');
//    Редагування email
		Route::get('home/email', 'UserController@email');
		Route::post('home/email', 'UserController@emailProcess');
//    Редагування паролю
		Route::get('home/pass', 'UserController@pass');
		Route::post('home/pass', 'UserController@passProcess');
//    Заявка на конференцію
		Route::group(['middleware' => ['conf_control']], function () {
			Route::get('home/conf', 'UserController@conf');
			Route::post('home/conf', 'UserController@confProcess');
		});
//    Заявка на конференцію як слухач
		Route::get('home/conf_user', 'UserController@confUserProcess');
	});
	Route::group(['middleware' => ['web', 'isadmin']], function () {
		Route::get('migrate', 'AdminController@migrate');
		Route::get('config_author', 'AdminController@author');
		Route::get('config_section', 'AdminController@section');
		Route::get('clear_organisation', 'AdminController@clear_organisation');
		Route::get('user_email', 'AdminController@user_email');
	});
