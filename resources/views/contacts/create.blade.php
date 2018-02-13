@extends('layouts.default', ['title' => "Nous contacter"])


@section('content')
		<h2>Nous contacter ?</h2>

		  	<form action="#" method="POST" class="card bg-light p-3 col-md-6">
		  		{{--Name field--}}
		  		<div class="form-group">
		  			<label for="name" class="control-label">Nom</label>
		  			<input type="text" name="name" id="name" class="form-control" required="required">
		  		</div>

		  		{{--Email field--}}
		  		<div class="form-group">
		  			<label for="email" class="control-label">Email</label>
		  			<input type="email" name="email" id="email" class="form-control" required="required">
		  		</div>

		  		{{--Message field--}}
		  		<div class="form-group">
		  			<label for="message" class="control-label">Message</label>
		  			<textarea class="form-control" rows="5" cols="10" required="required" 
		  			name="message" id="message"></textarea>
		  		</div>

		  		{{--Button--}}
		  		<div class="form-group">
		  			<button class="btn btn-primary">Envoyer</button>
		  		</div>
		  	</form>
@stop