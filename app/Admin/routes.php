<?php

//	Route::get('', [
//			'as'   => 'admin.dashboard',
//			'uses' => '\App\Http\Controllers\AdminController@index',
//		]);

	Route::get('', [
		'as' => 'admin.dashboard', function () {
			$user_count = App\User::count();
			$reqest_count= App\Conferequest::where('status', '!=', '1')->count();
			$content    = view('admin.index', ['user' => $user_count, 'reqest'=>$reqest_count]);

			return AdminSection::view($content, 'Інформація');
		},
	]);
Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Define your information here.';
	return AdminSection::view($content, 'Information');
}
]);
	Route::get('index', [
		'as' => 'admin.index.page', function () {
			$content = 'Define index';

			return AdminSection::view($content, 'Information');
}]);