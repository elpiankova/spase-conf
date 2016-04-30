<?php

    use Illuminate\Database\Seeder;
    use App\City;

    class CitiesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public
        function run()
        {
            //Україна


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Київ',
                'title_en'     => 'Kyiv',
                'title_ru'     => 'Киев',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Днiпропетровськ',
                'title_en'     => 'Dnipropetrovsk',
                'title_ru'     => 'Днепропетровск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Донецьк',
                'title_en'     => 'Donetsk',
                'title_ru'     => 'Донецк',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Запорiжжя',
                'title_en'     => 'Zaporizhia',
                'title_ru'     => 'Запорожье',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Кривий Рiг',
                'title_en'     => 'Kryvyi Rih',
                'title_ru'     => 'Кривой Рог',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Львiв',
                'title_en'     => 'Lviv',
                'title_ru'     => 'Львов',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Луганськ',
                'title_en'     => 'Luhansk',
                'title_ru'     => 'Луганск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Марiуполь',
                'title_en'     => 'Mariupol',
                'title_ru'     => 'Мариуполь',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Миколаїв',
                'title_en'     => 'Mykolaiv',
                'title_ru'     => 'Николаев',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Одеса',
                'title_en'     => 'Odessa',
                'title_ru'     => 'Одесса',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Севастополь',
                'title_en'     => 'Sevastopol',
                'title_ru'     => 'Севастополь',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Сімферополь',
                'title_en'     => 'Simferopol',
                'title_ru'     => 'Симферополь',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Харкiв',
                'title_en'     => 'Kharkiv',
                'title_ru'     => 'Харьков',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Вінниця',
                'title_en'     => 'Vinnytsia',
                'title_ru'     => 'Винница',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Чернiгiв',
                'title_en'     => 'Chernihiv',
                'title_ru'     => 'Чернигов',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Тернопіль',
                'title_en'     => 'Ternopil',
                'title_ru'     => 'Тернополь',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'Ужгород',
                'title_en'     => 'Uzhgorod',
                'title_ru'     => 'Ужгород',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);


            City::create([
                'countries_id' => '1',
                'title_uk'     => 'АР Крим',
                'title_en'     => 'Crimea',
                'title_ru'     => 'АР Крым',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Богарія
            City::create([
                'countries_id' => '2',
                'title_uk'     => 'Burgas',
                'title_en'     => 'Burgas',
                'title_ru'     => 'Burgas',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '2',
                'title_uk'     => 'Dobrich',
                'title_en'     => 'Dobrich',
                'title_ru'     => 'Dobrich',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '2',
                'title_uk'     => 'Pleven',
                'title_en'     => 'Pleven',
                'title_ru'     => 'Pleven',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '2',
                'title_uk'     => 'Plovdiv',
                'title_en'     => 'Plovdiv',
                'title_ru'     => 'Plovdiv',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '2',
                'title_uk'     => 'Ruse',
                'title_en'     => 'Ruse',
                'title_ru'     => 'Ruse',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '2',
                'title_uk'     => 'Sliven',
                'title_en'     => 'Sliven',
                'title_ru'     => 'Sliven',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '2',
                'title_uk'     => 'Sofia',
                'title_en'     => 'Sofia',
                'title_ru'     => 'Sofia',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '2',
                'title_uk'     => 'Stara Zagora',
                'title_en'     => 'Stara Zagora',
                'title_ru'     => 'Stara Zagora',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '2',
                'title_uk'     => 'Varna',
                'title_en'     => 'Varna',
                'title_ru'     => 'Varna',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Польща
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Białystok',
                'title_en'     => 'Białystok',
                'title_ru'     => 'Białystok',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Bydgoszcz',
                'title_en'     => 'Bydgoszcz',
                'title_ru'     => 'Bydgoszcz',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Gdańsk',
                'title_en'     => 'Gdańsk',
                'title_ru'     => 'Gdańsk',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Gdynia',
                'title_en'     => 'Gdynia',
                'title_ru'     => 'Gdynia',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Katowice',
                'title_en'     => 'Katowice',
                'title_ru'     => 'Katowice',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Kraków',
                'title_en'     => 'Kraków',
                'title_ru'     => 'Kraków',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Lublin',
                'title_en'     => 'Lublin',
                'title_ru'     => 'Lublin',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Poznań',
                'title_en'     => 'Poznań',
                'title_ru'     => 'Poznań',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Szczecin',
                'title_en'     => 'Szczecin',
                'title_ru'     => 'Szczecin',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Warszawa',
                'title_en'     => 'Warszawa',
                'title_ru'     => 'Warszawa',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Wrocław',
                'title_en'     => 'Wrocław',
                'title_ru'     => 'Wrocław',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '3',
                'title_uk'     => 'Łódź',
                'title_en'     => 'Łódź',
                'title_ru'     => 'Łódź',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Китай
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Beijing',
                'title_en'     => 'Beijing',
                'title_ru'     => 'Beijing',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Changchun',
                'title_en'     => 'Changchun',
                'title_ru'     => 'Changchun',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Chengdu',
                'title_en'     => 'Chengdu',
                'title_ru'     => 'Chengdu',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Chongqing',
                'title_en'     => 'Chongqing',
                'title_ru'     => 'Chongqing',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Guangzhou',
                'title_en'     => 'Guangzhou',
                'title_ru'     => 'Guangzhou',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Harbin',
                'title_en'     => 'Harbin',
                'title_ru'     => 'Harbin',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Shanghai',
                'title_en'     => 'Shanghai',
                'title_ru'     => 'Shanghai',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Shenyang',
                'title_en'     => 'Shenyang',
                'title_ru'     => 'Shenyang',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Tianjin',
                'title_en'     => 'Tianjin',
                'title_ru'     => 'Tianjin',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Wuhan',
                'title_en'     => 'Wuhan',
                'title_ru'     => 'Wuhan',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '4',
                'title_uk'     => 'Xi\'an',
                'title_en'     => 'Xi\'an',
                'title_ru'     => 'Xi\'an',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Білорусія
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Бобруйськ',
                'title_en'     => 'Bobrujsk',
                'title_ru'     => 'Бобруйск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Мiнськ',
                'title_en'     => 'Minsk',
                'title_ru'     => 'Минск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Барановичi',
                'title_en'     => 'Baranovichi',
                'title_ru'     => 'Барановичи',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Брест',
                'title_en'     => 'Brest',
                'title_ru'     => 'Брест',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Вiтебськ',
                'title_en'     => 'Vitebsk',
                'title_ru'     => 'Витебск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Гомель',
                'title_en'     => 'Gomel',
                'title_ru'     => 'Гомель',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Гори',
                'title_en'     => 'Horki',
                'title_ru'     => 'Горки',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Гродно',
                'title_en'     => 'Grodno',
                'title_ru'     => 'Гродно',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Могильов',
                'title_en'     => 'Mogilev',
                'title_ru'     => 'Могилёв',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Мозир',
                'title_en'     => 'Mazyr',
                'title_ru'     => 'Мозырь',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Новополоцьк',
                'title_en'     => 'Navapolatsk',
                'title_ru'     => 'Новополоцк',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '5',
                'title_uk'     => 'Пiнськ',
                'title_en'     => 'Pinsk',
                'title_ru'     => 'Пинск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Казахстан
            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Астана',
                'title_en'     => 'Astana',
                'title_ru'     => 'Астана',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Алмати',
                'title_en'     => 'Almaty',
                'title_ru'     => 'Алматы',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Актау',
                'title_en'     => 'Aktau',
                'title_ru'     => 'Актау',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Актобе',
                'title_en'     => 'Aktobe',
                'title_ru'     => 'Актобе',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Атирау',
                'title_en'     => 'Atyrau',
                'title_ru'     => 'Атырау',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Байконур',
                'title_en'     => 'Baikonur',
                'title_ru'     => 'Байконур',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Караганда',
                'title_en'     => 'Karaganda',
                'title_ru'     => 'Караганда',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Кокшетау',
                'title_en'     => 'Kokshetau',
                'title_ru'     => 'Кокшетау',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Павлодар',
                'title_en'     => 'Pavlodar',
                'title_ru'     => 'Павлодар',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Петропавловськ',
                'title_en'     => 'Petropavlovsk',
                'title_ru'     => 'Петропавловск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Семипал',
                'title_en'     => 'Semey ',
                'title_ru'     => 'Семей',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Тараз',
                'title_en'     => 'Taraz',
                'title_ru'     => 'Тараз',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Уральськ',
                'title_en'     => 'Oral',
                'title_ru'     => 'Уральск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Усть-Каменогорськ',
                'title_en'     => 'Oskemen',
                'title_ru'     => 'Усть-Каменогорск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '6',
                'title_uk'     => 'Шимкент',
                'title_en'     => 'Shymkent',
                'title_ru'     => 'Шымкент',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Росія
            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Москва',
                'title_en'     => 'Moscow',
                'title_uk'     => 'Москва',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Санкт-Петербург',
                'title_en'     => 'Saint Petersburg',
                'title_uk'     => 'Санкт-Петербург',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Волгоград',
                'title_en'     => 'Volgograd',
                'title_uk'     => 'Волгоград',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Владивосток',
                'title_en'     => 'Vladivostok',
                'title_uk'     => 'Владивосток',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Хабаровськ',
                'title_en'     => 'Khabarovsk',
                'title_uk'     => 'Хабаровск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Єкатеринбург',
                'title_en'     => 'Yekaterinburg',
                'title_uk'     => 'Екатеринбург',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Казань',
                'title_en'     => 'Kazan',
                'title_uk'     => 'Казань',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Калiнiнград',
                'title_en'     => 'Kaliningrad',
                'title_uk'     => 'Калининград',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Краснодар',
                'title_en'     => 'Krasnodar',
                'title_uk'     => 'Краснодар',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Красноярськ',
                'title_en'     => 'Krasnoyarsk',
                'title_uk'     => 'Красноярск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Нижнiй Новгород',
                'title_en'     => 'Nizhny Novgorod',
                'title_uk'     => 'Нижний Новгород',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Новосибiрськ',
                'title_en'     => 'Novosibirsk',
                'title_uk'     => 'Новосибирск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Омськ',
                'title_en'     => 'Omsk',
                'title_uk'     => 'Омск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Перм',
                'title_en'     => 'Perm',
                'title_uk'     => 'Пермь',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Ростов-на-Дону',
                'title_en'     => 'Rostov-on-Don',
                'title_uk'     => 'Ростов-на-Дону',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Самара',
                'title_en'     => 'Samara',
                'title_uk'     => 'Самара',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Уфа',
                'title_en'     => 'Ufa',
                'title_uk'     => 'Уфа',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '7',
                'title_ru'     => 'Челябінськ',
                'title_en'     => 'Chelyabinsk',
                'title_uk'     => 'Челябинск',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Румунія
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Brăila',
                'title_en'     => 'Brăila',
                'title_uk'     => 'Brăila',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Braşov',
                'title_en'     => 'Braşov',
                'title_uk'     => 'Braşov',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Bucureşti',
                'title_en'     => 'Bucureşti',
                'title_uk'     => 'Bucureşti',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Cluj-Napoca',
                'title_en'     => 'Cluj-Napoca',
                'title_uk'     => 'Cluj-Napoca',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Constanţa',
                'title_en'     => 'Constanţa',
                'title_uk'     => 'Constanţa',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Craiova',
                'title_en'     => 'Craiova',
                'title_uk'     => 'Craiova',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Galaţi',
                'title_en'     => 'Galaţi',
                'title_uk'     => 'Galaţi',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Iaşi',
                'title_en'     => 'Iaşi',
                'title_uk'     => 'Iaşi',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Oradea',
                'title_en'     => 'Oradea',
                'title_uk'     => 'Oradea',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Ploieşti',
                'title_en'     => 'Ploieşti',
                'title_uk'     => 'Ploieşti',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '8',
                'title_ru'     => 'Timişoara',
                'title_en'     => 'Timişoara',
                'title_uk'     => 'Timişoara',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Франція

            City::create([
                'countries_id' => '9',
                'title_ru'     => 'Bordeaux',
                'title_en'     => 'Bordeaux',
                'title_uk'     => 'Bordeaux',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '9',
                'title_ru'     => 'Lille',
                'title_en'     => 'Lille',
                'title_uk'     => 'Lille',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '9',
                'title_ru'     => 'Lyon',
                'title_en'     => 'Lyon',
                'title_uk'     => 'Lyon',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '9',
                'title_ru'     => 'Marseille',
                'title_en'     => 'Marseille',
                'title_uk'     => 'Marseille',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '9',
                'title_ru'     => 'Montpellier',
                'title_en'     => 'Montpellier',
                'title_uk'     => 'Montpellier',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '9',
                'title_ru'     => 'Nantes',
                'title_en'     => 'Nantes',
                'title_uk'     => 'Nantes',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '9',
                'title_ru'     => 'Nice',
                'title_en'     => 'Nice',
                'title_uk'     => 'Nice',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '9',
                'title_ru'     => 'Paris',
                'title_en'     => 'Paris',
                'title_uk'     => 'Paris',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '9',
                'title_ru'     => 'Strasbourg',
                'title_en'     => 'Strasbourg',
                'title_uk'     => 'Strasbourg',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '9',
                'title_ru'     => 'Toulouse',
                'title_en'     => 'Toulouse',
                'title_uk'     => 'Toulouse',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Німечина
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Berlin',
                'title_en'     => 'Berlin',
                'title_uk'     => 'Berlin',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Bonn',
                'title_en'     => 'Bonn',
                'title_uk'     => 'Bonn',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Bremen',
                'title_en'     => 'Bremen',
                'title_uk'     => 'Bremen',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Dortmund',
                'title_en'     => 'Dortmund',
                'title_uk'     => 'Dortmund',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Düsseldorf',
                'title_en'     => 'Düsseldorf',
                'title_uk'     => 'Düsseldorf',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Essen',
                'title_en'     => 'Essen',
                'title_uk'     => 'Essen',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Frankfurt am Main',
                'title_en'     => 'Frankfurt am Main',
                'title_uk'     => 'Frankfurt am Main',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Hamburg',
                'title_en'     => 'Hamburg',
                'title_uk'     => 'Hamburg',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Hannover',
                'title_en'     => 'Hannover',
                'title_uk'     => 'Hannover',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Köln',
                'title_en'     => 'Köln',
                'title_uk'     => 'Köln',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Leipzig',
                'title_en'     => 'Leipzig',
                'title_uk'     => 'Leipzig',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'München',
                'title_en'     => 'München',
                'title_uk'     => 'München',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '10',
                'title_ru'     => 'Stuttgart',
                'title_en'     => 'Stuttgart',
                'title_uk'     => 'Stuttgart',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Італія
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Bari',
                'title_en'     => 'Bari',
                'title_uk'     => 'Bari',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Bologna',
                'title_en'     => 'Bologna',
                'title_uk'     => 'Bologna',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Firenze',
                'title_en'     => 'Firenze',
                'title_uk'     => 'Firenze',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Genova',
                'title_en'     => 'Genova',
                'title_uk'     => 'Genova',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Milano',
                'title_en'     => 'Milano',
                'title_uk'     => 'Milano',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Napoli',
                'title_en'     => 'Napoli',
                'title_uk'     => 'Napoli',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Palermo',
                'title_en'     => 'Palermo',
                'title_uk'     => 'Palermo',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Roma',
                'title_en'     => 'Roma',
                'title_uk'     => 'Roma',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Torino',
                'title_en'     => 'Torino',
                'title_uk'     => 'Torino',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Venezia',
                'title_en'     => 'Venezia',
                'title_uk'     => 'Venezia',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '11',
                'title_ru'     => 'Verona',
                'title_en'     => 'Verona',
                'title_uk'     => 'Verona',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Іспанія

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Barcelona',
                'title_en'     => 'Barcelona',
                'title_uk'     => 'Barcelona',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Bilbao',
                'title_en'     => 'Bilbao',
                'title_uk'     => 'Bilbao',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Granada',
                'title_en'     => 'Granada',
                'title_uk'     => 'Granada',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Las Palmas de Gran Canaria',
                'title_en'     => 'Las Palmas de Gran Canaria',
                'title_uk'     => 'Las Palmas de Gran Canaria',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Madrid',
                'title_en'     => 'Madrid',
                'title_uk'     => 'Madrid',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Málaga',
                'title_en'     => 'Málaga',
                'title_uk'     => 'Málaga',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Murcia',
                'title_en'     => 'Murcia',
                'title_uk'     => 'Murcia',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Palma',
                'title_en'     => 'Palma',
                'title_uk'     => 'Palma',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Santa Cruz de Tenerife',
                'title_en'     => 'Santa Cruz de Tenerife',
                'title_uk'     => 'Santa Cruz de Tenerife',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Sevilla',
                'title_en'     => 'Sevilla',
                'title_uk'     => 'Sevilla',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Valencia',
                'title_en'     => 'Valencia',
                'title_uk'     => 'Valencia',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '12',
                'title_ru'     => 'Zaragoza',
                'title_en'     => 'Zaragoza',
                'title_uk'     => 'Zaragoza',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //США
            City::create([
                'countries_id' => '13',
                'title_uk'     => 'Boston',
                'title_en'     => 'Boston',
                'title_ru'     => 'Boston',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '13',
                'title_uk'     => 'Chicago',
                'title_en'     => 'Chicago',
                'title_ru'     => 'Chicago',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '13',
                'title_uk'     => 'Houston',
                'title_en'     => 'Houston',
                'title_ru'     => 'Houston',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '13',
                'title_uk'     => 'Los Angeles',
                'title_en'     => 'Los Angeles',
                'title_ru'     => 'Los Angeles',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '13',
                'title_uk'     => 'New York City',
                'title_en'     => 'New York City',
                'title_ru'     => 'New York City',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '13',
                'title_uk'     => 'Philadelphia',
                'title_en'     => 'Philadelphia',
                'title_ru'     => 'Philadelphia',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '13',
                'title_uk'     => 'San Francisco',
                'title_en'     => 'San Francisco',
                'title_ru'     => 'San Francisco',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            City::create([
                'countries_id' => '13',
                'title_uk'     => 'Washington, D.C.',
                'title_en'     => 'Washington, D.C.',
                'title_ru'     => 'Washington, D.C.',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
            //Англія

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Belfast',
                'title_en'     => 'Belfast',
                'title_ru'     => 'Belfast',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Birmingham',
                'title_en'     => 'Birmingham',
                'title_ru'     => 'Birmingham',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Bristol',
                'title_en'     => 'Bristol',
                'title_ru'     => 'Bristol',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Cardiff',
                'title_en'     => 'Cardiff',
                'title_ru'     => 'Cardiff',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Edinburgh',
                'title_en'     => 'Edinburgh',
                'title_ru'     => 'Edinburgh',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Glasgow',
                'title_en'     => 'Glasgow',
                'title_ru'     => 'Glasgow',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Leeds',
                'title_en'     => 'Leeds',
                'title_ru'     => 'Leeds',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Liverpool',
                'title_en'     => 'Liverpool',
                'title_ru'     => 'Liverpool',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'London',
                'title_en'     => 'London',
                'title_ru'     => 'London',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Manchester',
                'title_en'     => 'Manchester',
                'title_ru'     => 'Manchester',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Newcastle',
                'title_en'     => 'Newcastle',
                'title_ru'     => 'Newcastle',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);

            City::create([
                'countries_id' => '14',
                'title_uk'     => 'Sheffield',
                'title_en'     => 'Sheffield',
                'title_ru'     => 'Sheffield',
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime,
            ]);
        }
    }
