<?php

use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('records', function($table)
		{
		    $table->increments('id');
		    $table->string('l_phone', 20);
		    $table->string('l_first_name', 40);
		    $table->string('l_last_name', 40);
		    $table->string('l_address_1', 70);
		    $table->string('l_address_2', 70);
		    $table->string('l_city', 50);
		    $table->string('l_state', 50);
		    $table->string('l_zip_code', 20);
		    $table->string('l_phone_alt', 20);
		    $table->string('l_email', 50);
		    $table->string('l_fax', 20);
		    $table->string('l_dob', 40);
		    $table->string('l_employer', 100);
		    $table->string('l_job_title', 70);
		    $table->string('l_work_phone', 50);
		    $table->string('l_home_phone', 50);
		    $table->string('l_yrs_work', 20);
		    $table->string('l_monthly_income', 40);
		    $table->string('l_residence', 40);
		    $table->string('l_residence_monthly', 40);
		    $table->string('l_residence_yrs', 20);
		    $table->string('l_ssn', 40);
		    $table->string('l_banckruptcy', 50);
		    $table->string('l_cosigner', 20);
		    $table->string('d_date', 30);
		    $table->string('d_time', 30);
		    $table->string('d_agent', 20);
		    $table->string('d_record_id', 70);
		    $table->string('d_buffer1', 100);
		    $table->string('d_buffer2', 100);
		    $table->string('d_buffer3', 100);
		    $table->string('d_buffer4', 100);
		    $table->string('d_buffer5', 100);
		    $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('records');
	}

}