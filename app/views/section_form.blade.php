@extends('layouts.default')

@section('title')
Web2Carz Form
@endsection


@section('content')
	<div class="row">
		<div class="section-container auto" data-section>
			<section>
				<p class="title"><a href="#section1" style="font-weight: bold;">Custom Form</a></p>
				<div class="content" data-slug="section2">
					<table class="large-8">
						@foreach($custom_fields as $key => $value)
						<tr>
							<td style="font-weight: bold;" class="large-5">{{ $value }}:</td>
							<td>{{ Form::text($key, $record->$key, $attributes = array('readonly' => 'readonly')) }}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</section>
			<section>
				<p class="title"><a href="#section1" style="font-weight: bold;">Editable Form</a></p>
				<div class="content" data-slug="section2">
					{{ Form::open(array('url' => 'form/add', 'method' => 'post', 'class' => 'custom')) }}
					<table class="large-8">
						@foreach($edittable_fields as $test)
						@if($test['label'] == 'Gender')
						<tr style="text-align: center;">
							<td colspan="2" style="font-weight: bold; color: #2ba6cb;" class="large-5">DRIVERS INFORMATION</td>
						</tr>
						@endif
						<tr>
							@if($test['type'] == 'text')
							<td style="font-weight: bold;" width="200px;">{{ $test['label'] }}:</td>
							<td>{{ Form::text($test['name'], $record->form->$test['name']) }}</td>
							@elseif($test['type'] == 'radio')
							<td style="font-weight: bold;" width="200px;">{{ $test['label'] }}:</td>
							<td>
								{{ Form::radio($test['name'], $test['choice1'], $record->form->$test['name']==$test['choice1']?true:false) }} {{ $test['choice1'] }} &nbsp;&nbsp;&nbsp;&nbsp; 
								{{  Form::radio($test['name'], $test['choice2'], $record->form->$test['name']==$test['choice2']?true:false) }} {{ $test['choice2'] }} 
								@if(isset($test['choice3']))
								&nbsp;&nbsp;&nbsp;&nbsp; 
								{{  Form::radio($test['name'], $test['choice3'], $record->form->$test['name']==$test['choice3']?true:false) }} {{ $test['choice3'] }} 
								@endif
								@if(isset($test['choice4']))
								&nbsp;&nbsp;&nbsp;&nbsp; 
								{{  Form::radio($test['name'], $test['choice4'], $record->form->$test['name']==$test['choice4']?true:false) }} {{ $test['choice4'] }} 
								@endif
							</td>
							@else
							<td style="font-weight: bold;" width="200px;">{{ $test['label'] }}:</td>
							<td>{{ Form::select($test['name'], $test['list'], $record->form->$test['name']) }}</td>
						</tr>
						@endif
						@endforeach
					</table>
					{{ Form::hidden('record_id', $record->id) }}
					{{ Form::hidden('agent', $record->d_agent) }}
					{{ Form::submit('SAVE', array('class' => 'button radius')) }}
					{{ Form::token(); }}
					{{ Form::close(); }}
				</div>
			</section>
			<section>
				<p class="title"><a href="#section1" style="font-weight: bold;">Agents List</a></p>
				<div class="content" data-slug="section2">
					<table class="large-12">
						<tr style="text-align: center;">
							<th>Phone Number</th>
							<th>First Name</th>
							<th>Last Name</th>
						</tr>
						@foreach($agent_lists as $list)
						<tr style="text-align: center;">
							<td>{{ $list->l_phone }}</td>
							<td>{{ $list->l_first_name }}</td>
							<td>{{ $list->l_last_name }}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</section>
		</div>
	</div>
	
@endsection


@section('scripts')
@endsection