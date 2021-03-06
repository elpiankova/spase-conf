<?php

use Illuminate\Database\Seeder;

class ConfinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('confinfos')->insert([
            'text_uk'=>'<h3>Шановні колеги!</h3>
                    <p>Запрошуємо Вас взяти участь в роботі 15-ї Української конференції з космічних досліджень, яка
                        відбудеться з 24 до 28 серпня 2015 року на базі Одеського національного університету імені
                        І.І. Мечникова, Чорноморка, Одеська обл., Україна.</p>
                    <p>Мови конференції: українська, російська, англійська</p>',
            'place'  =>'1',
        ]);
        DB::table('confinfos')->insert([
            'text_uk'=>'<h3>Плануються наступні тематичні секції:</h3>
                    <ul>
                        <li>Дослідження ближнього космосу (в тому числі Сонця, сонячно-земних зв’язків,
                            магнітосфери, іоносфери)                        </li>
                        <li>Космічна біологія, медицина і науки про мікрогравітацію</li>
                        <li>Астрофізичні та космологічні дослідження</li>
                        <li>Прилади, матеріали та технології для космічних досліджень</li>
                        <li>Космічні апарати та системи для космічних досліджень</li>
                        <li>Дослідження в області ракетних технологій</li>
                        <li>Спостереження Землі з космосу</li>
                    </ul>

                    <p>Під час конференції буде проведено робочу нараду по підготовці іоносферного проекту «Іоносат
                        – Мікро».</p>',
            'place'  =>'2',
        ]);
        DB::table('confinfos')->insert([
            'text_uk'=>'<h3>Регламент Конференції:</h3>
                    <p>На Конференції будуть представлені запрошені доповіді тривалістю 40 хв., пленарні доповіді –
                        30 хв. та сесійні доповіді тривалістю 20 хв. Планується стендова сесія, з можливістю
                        5-хвилинного усного представлення результатів. Один учасник може виступити з однією
                        пленарною доповіддю, або з двома сесійними.</p>
                    <p>Реєстрація учасників Конференції буде відкрита до 7 червня 2015 року. Реєстрація доповідачів
                        відбуватиметься тільки за умови наявності тез. Вимоги до оформлення тез знаходяться в
                        розділі ТЕЗИ. Крім того, учасники можуть зареєструватися в якості слухачів. Прохання не
                        реєструватися двічі.</p>
                    <p>Конференційний внесок складатиме 150 грн.</p>
                    <p>З питань організації і проведення Конференції звертайтесь до вченого секретаря Конференції
                        Скороход Тетяни.</p>
                    <p> період 16-23 серпня 2015 року на тій же базі, відбудеться 5-а Гамовська Міжнародна
                        конференція в Одесі: "Астрофізика і космологія після Гамова: прогрес та розвиток" і XV
                        Гамовська конференція-школа: <a herf="http://astro-soc.odessa.ua">astro-soc.odessa.ua</a>
                    </p> ',
            'place'  =>'3',
        ]);
    }
}
