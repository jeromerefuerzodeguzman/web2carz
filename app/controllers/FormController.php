<?php

class FormController extends BaseController {

	public function form() {
		//insert record
		$record = Record::_create(Input::all());

		if($record) {
			return Redirect::to('record/' . $record->id . '/' . $record->d_agent);
		}

		return "Error code:002";
	}

	public function add() {
		$data = Input::all();
		var_dump($data);
		$agent = $data['agent'];

		//remove token
		unset($data['_token']);
		unset($data['agent']);

		$form = Field::where('record_id', '=', $data['record_id'])->update($data);
		/*$form->fill($data);
		$form->save();*/
		//$form = Field::create($data);

		if($form) {
			return Redirect::to('record/' . $data['record_id'] . '/' . $agent);
		}
	}

}