@extends('layouts.default', ['title' => "Nous contacter"])


@section('content')

	<h2>Nous contacter ?</h2>

		<div class="row">
			<div class="col-md-6">
		  		<form action="#" method="POST" class="card bg-light p-3">
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
		  	</div>
		  	<div class="col-md-6">
		  		<h2><center>Ou via nos réseaux sociaux</center></h2>
		  		On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web...
		  	</div>
		</div>

@stop