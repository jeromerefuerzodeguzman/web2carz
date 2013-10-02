<?php

class Field extends Eloquent {
	
	public static function form_field() {

		$list = array(
			'l_phone' => 'Phone Number',
			'l_first_name' => 'First Name',
			'l_last_name' => 'Last Name',
			'l_address_1' => 'Address 1',
			'l_address_2' => 'Address 2',
			'l_city' => 'City',
			'l_state' => 'State',
			'l_zip_code' => 'Zip Code',
			'l_phone_alt' => 'Alternate Phone',
			'l_email' => 'Email',
			'l_fax' => 'Fax',
			'l_dob' => 'Date of Birth',
			'l_employer' => 'Employer',
			'l_job_title' => 'Job Title',
			'l_work_phone' => 'Work Phone',
			'l_home_phone' => 'Home Phone',
			'l_yrs_work' => 'Years Work',
			'l_monthly_income' => 'Monthly Gross Income',
			'l_residence' => 'Residence',
			'l_residence_monthly' => 'Monthly Residence Payment',
			'l_residence_yrs' => 'Years Residence',
			'l_ssn' => 'Social Security Number',
			'l_banckruptcy' => 'Banckruptcy',
			'l_cosigner' => 'Cosigner'
			);

		return $list;
	}

	public static function custom_field() {

		$list = array(
						array(
							'type' => 'radio',
							'name' => 'f_car_loan',
							'label' => 'Still in the market for car loan',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'text',
							'name' => 'f_phone_number',
							'label' => 'Phone No',
						),
						array(
							'type' => 'text',
							'name' => 'f_first_name',
							'label' => 'First Name',
						),
						array(
							'type' => 'text',
							'name' => 'f_last_name',
							'label' => 'Last Name',
						),
						array(
							'type' => 'text',
							'name' => 'f_adress',
							'label' => 'Home Address',
						),
						array(
							'type' => 'text',
							'name' => 'f_city',
							'label' => 'City Address',
						),
						array(
							'type' => 'text',
							'name' => 'f_state',
							'label' => 'State',
						),
						array(
							'type' => 'text',
							'name' => 'f_zipcode',
							'label' => 'Zip code',
						),
						array(
							'type' => 'text',
							'name' => 'f_email',
							'label' => 'Email',
						),
						array(
						'type' => 'select',
						'name' => 'f_long_state_address',
						'label' => 'How long have you been living at state address',
						'list' => array(
								'' => '',
								'1' => '1',
								'2' => '2',
								'3' => '3',
								'4' => '4',
								'5' => '5',
								'6' => '6',
								'7' => '7',
								'8' => '8',
								'9' => '9',
								'10 Above' => '10 Above'
							)
						),
						array(
							'type' => 'radio',
							'name' => 'f_ownhome',
							'label' => 'Do you own or rent your home',
							'choice1' => 'Rent',
							'choice2' => 'Own',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'text',
							'name' => 'f_monthly_payment',
							'label' => 'Monthly payment',
						),
						array(
							'type' => 'text',
							'name' => 'f_date_of_birth',
							'label' => 'Date of birth',
						),
						array(
							'type' => 'text',
							'name' => 'f_employername',
							'label' => 'Employer name',
						),
						array(
							'type' => 'text',
							'name' => 'f_job_title',
							'label' => 'Job title',
						),
						array(
						'type' => 'select',
						'name' => 'f_length_of_employment',
						'label' => 'Length of employment',
						'list' => array(
								'' => '',
								'1' => '1',
								'2' => '2',
								'3' => '3',
								'4' => '4',
								'5' => '5',
								'6' => '6',
								'7' => '7',
								'8' => '8',
								'9' => '9',
								'10 Above' => '10 Above'
							)
						),
						array(
							'type' => 'text',
							'name' => 'f_monthly_gross',
							'label' => 'Total monthly gross income all sources',
						),
						array(
							'type' => 'text',
							'name' => 'f_work_phone',
							'label' => 'Work phone',
						),
						array(
							'type' => 'radio',
							'name' => 'f_declared_bankruptcy',
							'label' => 'Declared bankruptcy in the last 7 years',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'radio',
							'name' => 'f_cosigner',
							'label' => 'Cosigner available if needed',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'radio',
							'name' => 'f_credit_check',
							'label' => 'Permission to run a credit check',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'text',
							'name' => 'f_social_security_number',
							'label' => 'Social Security number',
						),
						array(
							'type' => 'radio',
							'name' => 'f_qualifying_question_1',
							'label' => 'Qualifying question 1',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'radio',
							'name' => 'f_qualifying_question_2',
							'label' => 'Qualifying question 2',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'radio',
							'name' => 'f_qualifying_question_3',
							'label' => 'Qualifying question 3',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'radio',
							'name' => 'f_final_step',
							'label' => 'Final step',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'radio',
							'name' => 'f_auto_loan_lead',
							'label' => 'Auto Loan Lead',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'radio',
							'name' => 'f_credit_repair',
							'label' => 'Credit repair up-sell',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'radio',
							'name' => 'f_auto_refinance_lead',
							'label' => 'Auto Refinance lead',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'radio',
							'name' => 'f_auto_insurance',
							'label' => 'Auto Insurance up-sell',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'text',
							'name' => 'f_year_of_car',
							'label' => 'Year of car',
						),
						array(
							'type' => 'text',
							'name' => 'f_make',
							'label' => 'Make',
						),
						array(
							'type' => 'text',
							'name' => 'f_model_and_sub_model',
							'label' => 'Model and Sub model',
						),
						array(
							'type' => 'radio',
							'name' => 'f_vehicle_owned',
							'label' => 'Is this vehicle owned or leased',
							'choice1' => 'Owned',
							'choice2' => 'Leased',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'radio',
							'name' => 'f_vehicle_salvage',
							'label' => 'Is this vehicle salvage',
							'choice1' => 'Yes',
							'choice2' => 'No',
							'choice3' => 'No Value'
						),
						array(
							'type' => 'text',
							'name' => 'f_use_of_vehicle',
							'label' => 'Primary use of this vehicle',
						),
						array(
							'type' => 'text',
							'name' => 'f_used_for',
							'label' => 'If used for commuting or business what is average one-way mileage',
						),
						array(
							'type' => 'text',
							'name' => 'f_annual_mileage',
							'label' => 'Approximate Annual Mileage',
						),
						array(
							'type' => 'radio',
							'name' => 'f_vehicle_kept',
							'label' => 'Where is this vehicle being kept at night',
							'choice1' => 'No Cover',
							'choice2' => 'Carport',
							'choice3' => 'Locked',
							'choice4' => 'Private'
						),
						array(
							'type' => 'text',
							'name' => 'f_comprehensive_deductible',
							'label' => 'Desired comprehensive deductible',
						),
						array(
							'type' => 'text',
							'name' => 'f_desired_collision_deductible',
							'label' => 'Desired collision deductible'
						),
						array(
								'type' => 'radio',
								'name' => 'f_gender',
								'label' => 'Gender',
								'choice1' => 'Male',
								'choice2' => 'Female'
							),
							array(
								'type' => 'text',
								'name' => 'f_martial_status',
								'label' => 'Martial Status',
							),
							array(
								'type' => 'text',
								'name' => 'f_date_of_birth_driver',
								'label' => 'Date of birth',
							),
							array(
							'type' => 'select',
							'name' => 'f_age_receive_license',
							'label' => 'At what age did you first receive your license',
							'list' => array(
									'' => '',
									'16' => '16',
									'17' => '16',
									'18' => '18',
									'19' => '19',
									'20' => '20',
									'21' => '21',
									'22' => '22',
									'23' => '23',
									'24' => '24',
									'25' => '25',
									'25' => '25',
									'27' => '27',
									'28' => '28',
									'29' => '29',
									'30' => '30',
									'31' => '31',
									'32' => '32',
									'33' => '33',
									'34' => '34',
									'35' => '35',
									'36' => '36',
									'37' => '37',
									'38' => '38',
									'39' => '39',
									'40' => '40',
									'41' => '41',
									'42' => '42',
									'43' => '43',
									'44' => '44',
									'45' => '45',
									'46' => '46',
									'47' => '47',
									'48' => '48',
									'49' => '49',
									'50' => '50',
									'51' => '51',
									'52' => '52',
									'53' => '53',
									'54' => '54',
									'55' => '55'
								)
							),
							array(
								'type' => 'text',
								'name' => 'f_state_currently_licensed',
								'label' => 'In which state you are currently licensed?',
							),
							array(
							'type' => 'select',
							'name' => 'f_drivers_license_status',
							'label' => 'What is your drivers license status',
							'list' => array(
									'' => '',
									'Active' => 'Active',
									'Suspended' => 'Suspended',
									'Probation' => 'Probation',
									'Resticted' => 'Resticted',
									'Learner' => 'Learner',
									'Temporary' => 'Temporary',
									'International' => 'International'
								)
							),
							array(
							'type' => 'select',
							'name' => 'f_highest_education_level',
							'label' => 'What is you highest education level',
							'list' => array(
									'' => '',
									'Less than High School' => 'Less than High School',
									'Some High School' => 'Some High School',
									'High School Diploma' => 'High School Diploma',
									'Some College' => 'Some College',
									'Associate Degree' => 'Associate Degree',
									'Bachelors Degree' => 'Bachelors Degree',
									'Master Degree' => 'Master Degree',
									'Doctorate Degree' => 'Doctorate Degree'
								)
							),
							array(
								'type' => 'text',
								'name' => 'f_field_of_occupation',
								'label' => 'Classification or field of occupation',
							),
							array(
								'type' => 'radio',
								'name' => 'f_gpa',
								'label' => 'Are you a full time student with a GPA of 3.0 or above',
								'choice1' => 'Yes',
								'choice2' => 'No',
								'choice3' => 'No Value'
							),
							array(
								'type' => 'radio',
								'name' => 'f_statement',
								'label' => 'Do you require an SR22 or Financial Responsibility statement?',
								'choice1' => 'Yes',
								'choice2' => 'No',
								'choice3' => 'No Value'
							),
							array(
								'type' => 'radio',
								'name' => 'f_suspended_or_revoked',
								'label' => 'In the past 5 years has your license been suspended or revoked',
								'choice1' => 'Yes',
								'choice2' => 'No',
								'choice3' => 'No Value'
							),
							array(
								'type' => 'text',
								'name' => 'f_incidents',
								'label' => 'Have you had any incidents in the past 5 years?',
							),
							array(
								'type' => 'text',
								'name' => 'f_remarks',
								'label' => 'Remarks',
							),
							array(
								'type' => 'text',
								'name' => 'f_desired_coverage',
								'label' => 'Desired Coverage',
							),
							array(
								'type' => 'radio',
								'name' => 'f_insured',
								'label' => 'Are you currently insured, or have been insured during past 30 days on any policy, for any vehicle',
								'choice1' => 'Yes',
								'choice2' => 'No',
								'choice3' => 'No Value'
							),
							array(
								'type' => 'text',
								'name' => 'f_insurance_company',
								'label' => 'What is you current or most recent insurance company',
							),
							array(
								'type' => 'text',
								'name' => 'f_current_coverage',
								'label' => 'What is your current coverage?',
							),
							array(
								'type' => 'text',
								'name' => 'f_policy_expire',
								'label' => 'When does you policy expire?',
							),
							array(
								'type' => 'text',
								'name' => 'f_how_long_insured',
								'label' => 'How long have you been continuously insured?',
							),
							array(
								'type' => 'radio',
								'name' => 'f_basic_information_confirmed',
								'label' => 'Basic information confirmed',
								'choice1' => 'Yes',
								'choice2' => 'No',
								'choice3' => 'No Value'
							),
							array(
								'type' => 'radio',
								'name' => 'f_homeowner',
								'label' => 'Are you a homeowner',
								'choice1' => 'Yes',
								'choice2' => 'No',
								'choice3' => 'No Value'
							),
							array(
								'type' => 'radio',
								'name' => 'f_credit_score',
								'label' => 'Please, estimate your credit score',
								'choice1' => 'Good',
								'choice2' => 'No Value'
							),
							array(
								'type' => 'radio',
								'name' => 'f_complete_lead',
								'label' => 'Completed Lead',
								'choice1' => 'Yes',
								'choice2' => 'No'
							),

			);

		return $list;
	}

}