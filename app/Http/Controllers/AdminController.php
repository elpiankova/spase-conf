<?php

	namespace App\Http\Controllers;

	use AdminSection;
	use App\Conferauthor;
	use App\Conferequest;
	use App\Http\Requests;
	use App\Spaceorganization;
	use App\User;
	use App\UserInfo;
	use App\Сategory;
	use Illuminate\Support\Facades\Input;
	use Illuminate\Support\Facades\Log;
	use SleepingOwl\Admin\Http\Controllers\AdminController as SleepingOwl;

	class AdminController extends SleepingOwl
	{
		public
		function index()
		{
			$content = 'ok';

			return $this->renderContent(view('auth.login'));
		}

		public
		function request()
		{
			$contents = Conferequest::where('status', '!=', '1')->get();
			$categories = Сategory::orderBy('place')->get();
			$select = ['title' => true, 'author' => true, 'email' => true, 'text' => true, 'organization' => 'all'];

			return $this->renderContent(view('admin.request', ['contents' => $contents, 'categories' => $categories, 'id_category' => $select]));
		}

		public
		function requestPost()
		{
			$all = Input::all();
			if ($all['organization'] == 'all') {
				$contents = Conferequest::where('status', '!=', '1')->get();
			} else {
				$contents = Conferequest::where('status', '!=', '1')->where('section_id', $all['organization'])->get();
			}

			$categories = Сategory::orderBy('place')->get();

			return $this->renderContent(view('admin.request', ['contents' => $contents, 'categories' => $categories, 'id_category' => $all]));
		}

		public
		function migrate()
		{
			$users = User::get();
			foreach ($users as $user) {
				$user_info = UserInfo::where('user_id', '=', $user->id)->first();
//                dd($user_info);
				$user->middle_name = $user_info->middle_name;
				$user->birth = $user_info->birth;
				$user->organization_id = $user_info->organization_id;
				$user->country_id = $user_info->country_id;
				$user->city_id = $user_info->city_id;
				$user->phone = $user_info->phone;
				$user->photo = $user_info->photo;
				$user->gender = $user_info->gender;
				$user->save();
				$log = $user->middle_name . $user->first_name . $user->last_name . ' з email :' . $user->email . ' перенесено';
				Log::info($user->id, ['context' => $log]);

			}
		}

		public
		function author()
		{
			$autors = Conferauthor::get();
			foreach ($autors as $autor) {
				$reqests = Conferequest::where('user_id', $autor->conferequests_id)->get();
				foreach ($reqests as $reqest) {
					$autor->conferequests_id = $reqest->id;
					$autor->save();
				}
			}

			return redirect('home');
		}

		public
		function section()
		{
			$sections = Conferequest::where('status', 0)->get();
			foreach ($sections as $section) {
				$section->section_id = $section->section_id + 1;
				$section->save();
			}

			return redirect('home');
		}

		public function clear_organisation()
		{
			$organisations = Spaceorganization::all();
			foreach ($organisations as $organisation) {
				$identicals = Spaceorganization::where('title_uk', '=', $organisation->title_uk)->get();
				foreach ($identicals as $key => $identical) {
					if ($key == 0) {
						$first_id = $identical->id;
					} else {
						User::where('organization_id', '=', $identical->id)->update(['organization_id' => $first_id]);
						Conferauthor::where('organization_id', '=', $identical->id)->update(['organization_id' => $first_id]);
						$identical->delete();
					}
				}
			}
		}

		public function user_email()
		{
			$users = User::all();
			foreach ($users as $user) {
				print $user->email . '<br>';
			}
		}

		public function tableUser()
		{
			$users = User::all();

			$file_name = 'Site_User.odt';
			$phpWord = new \PhpOffice\PhpWord\PhpWord();
			$phpWord->setDefaultFontSize(8);
			$phpWord->setDefaultFontName('Times New Roman');

			$section = $phpWord->addSection();
			$table = $section->addTable();
			$table->addRow();
			$table->addCell(1000)->addText('Ім\'я');
			$table->addCell(1000)->addText('Прізвище');
			$table->addCell(1000)->addText('По-батькові');
			$table->addCell(1000)->addText('email');
			$table->addCell(1000)->addText('Телефон');
			$table->addCell(1000)->addText('Країна');
			$table->addCell(1000)->addText('Місто');
			$table->addCell(2000)->addText('Організація');
			foreach ($users as $user) {
				$table->addRow();
				$table->addCell(1000)->addText(($user->first_name));
				$table->addCell(1000)->addText(($user->middle_name));
				$table->addCell(1000)->addText(($user->last_name));
				$table->addCell(1000)->addText(($user->email));
				$table->addCell(1000)->addText(($user->phone));
				$table->addCell(1000)->addText($user->usercountry($user->country_id));
				$table->addCell(1000)->addText($user->usercity($user->city_id));
				$table->addCell(2000)->addText($user->userorganization($user->organization_id));
			}
			$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
			$objWriter->save($file_name);

			return $this->renderContent(view('admin.table.users', ['file_name' => $file_name, 'users' => $users]));
		}
	}
