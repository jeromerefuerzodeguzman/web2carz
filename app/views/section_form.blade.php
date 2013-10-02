@extends('layouts.default')

@section('title')
Web2Carz Form
@endsection


@section('content')
	{{ Form::open(array('url' => 'add_sales', 'method' => 'post', 'class' => 'custom')) }}
	<div class="row">
		<div class="section-container auto" data-section>
			<section>
				<p class="title"><a href="#section1" style="font-weight: bold;">Custom Form</a></p>
				<div class="content" data-slug="section2">
					<fieldset>
					<legend style="color: #2ba6cb;">Custom Form</legend>
					<table width="600px;" style="margin-top: 10px;">
						@foreach($custom_fields as $key => $value)
						<tr>
							<td style="font-weight: bold;" width="200px;">{{ $value }}:</td>
							<td>{{ Form::text($key, '', $attributes = array('readonly' => 'readonly')) }}</td>
						</tr>
						@endforeach
					</table>
					</fieldset>
				</div>
			</section>
			<section>
				<p class="title"><a href="#section1" style="font-weight: bold;">Edittable Form</a></p>
				<div class="content" data-slug="section2">
					<fieldset>
					<legend style="color: #2ba6cb;">Edittable Form</legend>
					<table width="600px;" style="margin-top: 10px;">
						@foreach($edittable_fields as $test)
						@if($test['label'] == 'Gender')
						<tr style="text-align: center;">
							<td colspan="2" style="font-weight: bold; color: #2ba6cb;" width="200px;">DRIVERS INFORMATION</td>
						</tr>
						@endif
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
				</div>
			</section>
		</div>
		{{ Form::submit('SAVE', array('class' => 'button radius')) }}
	</div>
	{{ Form::token(); }}
	{{ Form::close(); }}
	
@endsection


@section('scripts')
@endsection