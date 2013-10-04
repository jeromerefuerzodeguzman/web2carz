<?php

class RecordController extends BaseController {

	public function view($id,$agent = NULL) {
		$record = Record::find($id);

		//var_dump($record);

		$agent_list = Record::where('d_agent', '=', $agent)
						->get(array('l_phone', 'l_first_name', 'l_last_name'));

		$form_field = Field::form_field();

		$edit_field = Field::custom_field();
		
		return View::make('section_form')
			->with('record', $record)
			->with('agent_lists', $agent_list)
			->with('edittable_fields', $edit_field)
			->with('custom_fields', $form_field);
	}

}