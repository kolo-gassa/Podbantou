@extends('layouts.default', ['title' => 'Connexion'])


@section('content')



	<div class="row">

		<div class="col-md-6">
			
			<div class="panel panel-default">
			  <div class="panel-heading"><h3>Connectez-vous!</h3></div>
			  <div class="panel-body">
			     <form action="{{ route('login_path') }}" method="POST" class="well" novalidate>
					{{csrf_field()}}

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

			  		{{--Remember me button--}}
			  		<div class="checkbox">
					    <label>
					      <input type="checkbox" name="remember"> Se souvenir de moi
					    </label>
					 </div>

			  		{{--Button--}}
			  		<div class="form-group">
			  			<button class="btn btn-primary" type="submit">Connexion</button>
			  		</div>
				</form>
			  </div>
			</div>
		</div>
		
	</div>
@stop