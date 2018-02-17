@extends('layouts.default', ['title' => 'Accueil'])


@section('content')

	<div class="row">
		<div class="col-md-6">
	  		<h2><center>Image dynamique</center></h2>
		 </div>
		<div class="col-md-6">
			<h3>Devenir membre de la communauté {{config('app.name')}}</h3>
	  		<form action="{{ route('contact_path') }}" method="POST" class="well" novalidate>
	  			{{csrf_field()}}

		  		{{--Name field--}}
		  		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
		  			<label for="name" class="control-label">Nom</label>
		  			<input type="text" name="name" id="name" class="form-control" required="required">
		  			{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
		  		</div>

		  		{{--Email field--}}
		  		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
		  			<label for="email" class="control-label">Email</label>
		  			<input type="email" name="email" id="email" class="form-control" required="required">
		  			{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
		  		</div>

		  		{{--Message field--}}
		  		<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
		  			<label for="message" class="control-label">Message</label>
		  			<textarea class="form-control" rows="5" cols="10" required="required" 
		  			name="message" id="message"></textarea>
		  			{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
		  		</div>

		  		{{--Button--}}
		  		<div class="form-group">
		  			<button class="btn btn-primary">Envoyer</button>
		  		</div>
	  		</form>
	  	</div>
	</div>

@stop