@extends('layouts.default', ['title' => 'Accueil'])


@section('content')


	<div class="row">
		<div class="col-md-6">
	  		<h2><center>Image dynamique</center></h2>
		 </div>
		<div class="col-md-6">

			

    	<h3>Connectez-vous</h3>
    
    	<form action="#" method="POST" 
    		  class="well" novalidate>
			{{csrf_field()}}

	  		{{--Pseudo field--}}
	  		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
	  			<label for="pseudo" class="control-label">Pseudo : </label>
	  			<input type="text" name="pseudo" id="pseudo" class="form-control" required="required">
	  			{!! $errors->first('pseudo', '<span class="help-block">:message</span>') !!}
	  		</div>
	  		
	  		{{--Password field--}}
	  		<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
	  			<label for="password" class="control-label">Mot de passe : </label>
	  			<input type="password" name="password" id="password" 
	  			class="form-control" required="required">
	  			{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
	  		</div>

	  		{{--Button--}}
	  		<div class="form-group">
	  			<button class="btn btn-primary" type="submit">Connexion</button>
	  		</div>
		</form>
	</div>
@stop