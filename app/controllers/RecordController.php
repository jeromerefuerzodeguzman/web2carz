<?php

class RecordController extends BaseController {

	public function view($id) {
		$record = Record::find($id);

		//var_dump($record);

		$form_field = Field::form_field();

		$edit_field = Field::custom_field();
		
		return View::make('section_form')
			->with('record', $record)
			->with('edittable_fields', $edit_field)
			->with('custom_fields', $form_field);
	}

}