<?php

class Record extends Eloquent {

	protected $guarded = array();

	public function form()
    {
        return $this->hasOne('Field');
    }

	public static function _create($data) {
		//insert new record
		$record = Record::create($data);
		
		//insert form
		$form = new Field();
		$record->form()->save($form);
		return $record;
	}
}