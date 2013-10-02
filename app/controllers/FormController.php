<?php

class FormController extends BaseController {

	public function form() {

		$form_field = Field::form_field();

		$edit_field = Field::custom_field();
		
		return View::make('section_form')
				->with('edittable_fields', $edit_field)
				->with('custom_fields', $form_field);

	}

}