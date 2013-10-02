@extends('layouts.default')

@section('title')
Web2Carz Form
@endsection


@section('content')
	{{ Form::open(array('url' => 'add_sales', 'method' => 'post', 'class' => 'custom')) }}
	<div class="row">
		<div class="large-12 columns">
			<fieldset>
				<legend style="color: #2ba6cb;">Custom Form</legend>
				<table width="600px;">
				@foreach($custom_fields as $key => $value)
					<tr>
						<td style="font-weight: bold;" width="200px;">{{ $value }}:</td>
						<td>{{ Form::text($key, '', $attributes = array('readonly' => 'readonly')) }}</td>
					</tr>
				@endforeach
				</table>
			</fieldset>
			<fieldset>
				<legend style="color: #2ba6cb;">Edittable Form</legend>
				<table width="600px;">
				@foreach($edittable_fields as $test)
					<tr>
					@if($test['type'] == 'text')
						<td style="font-weight: bold;" width="200px;">{{ $test['label'] }}:</td>
						<td>{{ Form::text($test['name'], '') }}</td>
					@elseif($test['type'] == 'radio')
						<td style="font-weight: bold;" width="200px;">{{ $test['label'] }}:</td>
						<td>
							{{ Form::radio($test['name'], $test['choice1']) }} {{ $test['choice1'] }} &nbsp;&nbsp;&nbsp;&nbsp; 
							{{  Form::radio($test['name'], $test['choice2']) }} {{ $test['choice2'] }} 
							@if(isset($test['choice3']))
								&nbsp;&nbsp;&nbsp;&nbsp; 
								{{  Form::radio($test['name'], $test['choice3']) }} {{ $test['choice3'] }} 
							@endif
							@if(isset($test['choice4']))
								&nbsp;&nbsp;&nbsp;&nbsp; 
								{{  Form::radio($test['name'], $test['choice4']) }} {{ $test['choice4'] }} 
							@endif
						</td>
					@else
						<td style="font-weight: bold;" width="200px;">{{ $test['label'] }}:</td>
						<td>{{ Form::select($test['name'], $test['list']) }}</td>
					</tr>
					@endif
				@endforeach
				</table>
			</fieldset>
			<fieldset>
				<legend style="color: #2ba6cb;">Driver's Information</legend>
				<table width="600px;">
				@foreach($drivers_fields as $test)
					<tr>
					@if($test['type'] == 'text')
						<td style="font-weight: bold;" width="200px;">{{ $test['label'] }}:</td>
						<td>{{ Form::text($test['name'], '') }}</td>
					@elseif($test['type'] == 'radio')
						<td style="font-weight: bold;" width="200px;">{{ $test['label'] }}:</td>
						<td>
							{{ Form::radio($test['name'], $test['choice1']) }} {{ $test['choice1'] }} &nbsp;&nbsp;&nbsp;&nbsp; 
							{{  Form::radio($test['name'], $test['choice2']) }} {{ $test['choice2'] }} 
							@if(isset($test['choice3']))
								&nbsp;&nbsp;&nbsp;&nbsp; 
								{{  Form::radio($test['name'], $test['choice3']) }} {{ $test['choice3'] }} 
							@endif
							@if(isset($test['choice4']))
								&nbsp;&nbsp;&nbsp;&nbsp; 
								{{  Form::radio($test['name'], $test['choice4']) }} {{ $test['choice4'] }} 
							@endif
						</td>
					@else
						<td style="font-weight: bold;" width="200px;">{{ $test['label'] }}:</td>
						<td>{{ Form::select($test['name'], $test['list']) }}</td>
					</tr>
					@endif
				@endforeach
				</table>
			</fieldset>
			{{ Form::submit('ADD', array('class' => 'button radius')) }}
		</div>
 		
	</div>
	{{ Form::token(); }}
	{{ Form::close(); }}
	
@endsection


@section('scripts')
@endsection