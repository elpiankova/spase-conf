<?php

//	Route::get('', [
//			'as'   => 'admin.dashboard',
//			'uses' => '\App\Http\Controllers\AdminController@index',
//		]);

	Route::get('', [
		'as' => 'admin.dashboard', function () {
			$user_count   = App\User::count();
			$reqest_count = App\Conferequest::where('status', '!=', '1')->count();
			$countres     = App\Country::get();
			$user_map     = [];
			foreach ($countres as $countre) {
				$user         = App\User::where('country_id', '=', $countre->id)->count();
				if($user > 0){
					$user_map[$countre->code] = $user;
				}
			}
//			dd($user_map);
			$user_map = json_encode($user_map);

			$grafs     = App\User::get();
			$user_graf = [];
			foreach ($grafs as $key => $graf) {
				$grafuser['y'] = date_format($graf->created_at, "Y") . ' Q' . $key;
				$grafuser['item1'] = count($user_graf);
				$grafuser= json_encode($grafuser);
//				{y: '2011 Q1', item1: 2},
//				$punkt = '{ y : ' . date_format($graf->created_at, "Y") . ' Q' . $key . '\', item1: ' . count($user_graf) . '}';
				array_push($user_graf, $grafuser);
				unset($grafuser);
			}
//			dd($user_graf);
			$content = view('admin.index', ['user' => $user_count, 'reqest' => $reqest_count, 'user_map' => $user_map, 'user_graf' => $user_graf]);

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