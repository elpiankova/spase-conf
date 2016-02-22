<?php

Admin::model('App\Confinfo')->title('Інформація')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('place')->label('Порядок'),
		Column::string('text_uk')->label('Текст'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('place', 'Порядок відображення'),
		FormItem::ckeditor('text_uk', 'Текст Uk'),
		FormItem::ckeditor('text_ru', 'Текст Ru'),
		FormItem::ckeditor('text_en', 'Текст En'),
	]);
	return $form;
});