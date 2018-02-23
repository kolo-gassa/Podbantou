@extends('layouts.default', ['title' => "Inscription"])


@section('content')

<div class="row">
	<div class="col-md-6">
  		<h3>Devenir membre de la communauté {{config('app.name')}}</h3>
		<form action="{{ route('registration_path') }}" method="POST" 
			  class="well" novalidate>
			{{csrf_field()}}

			{{--Name field--}}
			<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
				<label for="name" class="control-label">Nom :</label>
				<input type="text" name="name" id="name" class="form-control" 
				required="required" value="{{old('name')}}">
				{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
			</div>

			{{--Pseudo field--}}
			<div class="form-group {{ $errors->has('pseudo') ? 'has-error' : '' }}">
				<label for="pseudo" class="control-label">Pseudo :</label>
				<input type="text" name="pseudo" id="pseudo" class="form-control" 
				required="required" value="{{old('pseudo')}}">
				{!! $errors->first('pseudo', '<span class="help-block">:message</span>') !!}
			</div>

			{{--Email field--}}
			<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
				<label for="email" class="control-label">Email :</label>
				<input type="email" name="email" id="email" class="form-control" 
				required="required" value="{{old('email')}}">
				{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
			</div>

			{{--Password field--}}
			<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
				<label for="password" class="control-label">Mot de passe : </label>
				<input type="password" name="password" id="password" 
				class="form-control" required="required">
				{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
			</div>

			{{--Password confirmation field--}}
			<div class="form-group {{ $errors->has('passwordConf') ? 'has-error' : '' }}">
				<label for="password_confirmation" class="control-label">
					Confirmer votre mot de passe : 
				</label>
				<input type="password" name="password_confirmation" 
				id="password_confirmation" class="form-control" required="required">
				{!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
			</div>

			{{--Button--}}
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Inscription</button>
			</div>

			<a href="#" style="float:right">Se connecter</a>
		</form>
	 </div>
</div>



@stop