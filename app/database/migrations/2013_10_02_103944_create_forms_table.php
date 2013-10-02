<?php

use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forms', function($table)
		{
		    $table->increments('id');
		    $table->integer('record_id');
		    $table->string('f_car_loan', 20);
		    $table->string('f_phone_number', 40);
		    $table->string('f_first_name', 40);
		    $table->string('f_last_name', 40);
		    $table->string('f_adress', 100);
		    $table->string('f_city', 50);
		    $table->string('f_state', 50);
		    $table->string('f_zipcode', 20);
		    $table->string('f_email', 50);
		    $table->string('f_long_state_address', 40);
		    $table->string('f_ownhome', 20);
		    $table->string('f_monthly_payment', 50);
		    $table->string('f_date_of_birth', 40);
		    $table->string('f_employername', 70);
		    $table->string('f_job_title', 50);
		    $table->string('f_length_of_employment', 50);
		    $table->string('f_monthly_gross', 50);
		    $table->string('f_work_phone', 20);
		    $table->string('f_declared_bankruptcy', 20);
		    $table->string('f_cosigner', 20);
		    $table->string('f_credit_check', 20);
		    $table->string('f_social_security_number', 50);
		    $table->string('f_qualifying_question_1', 20);
		    $table->string('f_qualifying_question_2', 20);
		    $table->string('f_qualifying_question_3', 20);
		    $table->string('f_final_step', 20);
		    $table->string('f_auto_loan_lead', 20);
		    $table->string('f_credit_repair', 20);
		    $table->string('f_auto_refinance_lead', 20);
		    $table->string('f_auto_insurance', 20);
		    $table->string('f_year_of_car', 30);
		    $table->string('f_make', 70);
		    $table->string('f_model_and_sub_model', 100);
		    $table->string('f_vehicle_owned', 50);
		    $table->string('f_vehicle_salvage', 50);
		    $table->string('f_use_of_vehicle', 100);
		    $table->string('f_used_for', 50);
		    $table->string('f_annual_mileage', 50);
		    $table->string('f_vehicle_kept', 20);
		    $table->string('f_comprehensive_deductible', 50);
		    $table->string('f_collision_deductible', 50);
		    $table->string('f_gender', 20);
		    $table->string('f_martial_status', 20);
		    $table->string('f_date_of_birth_driver', 40);
		    $table->string('f_age_receive_license', 20);
		    $table->string('f_state_currently_licensed', 20);
		    $table->string('f_drivers_license_status', 40);
		    $table->string('f_highest_education_level', 70);
		    $table->string('f_field_of_occupation', 70);
		    $table->string('f_gpa', 30);
		    $table->string('f_statement', 20);
		    $table->string('f_suspended_or_revoked', 20);
		    $table->string('f_incidents', 20);
		    $table->string('f_remarks', 250);
		    $table->string('f_desired_coverage', 70);
		    $table->string('f_insured', 20);
		    $table->string('f_insurance_company', 70);
		    $table->string('f_current_coverage', 30);
		    $table->string('f_policy_expire', 30);
		    $table->string('f_how_long_insured', 20);
		    $table->string('f_basic_information_confirmed', 20);
		    $table->string('f_homeowner', 20);
		    $table->string('f_credit_score', 20);
		    $table->string('f_complete_lead', 20);
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
		Schema::drop('forms');
	}

}