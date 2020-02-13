@extends('template')

@section('content')
	<div class="col-sm-offset-4 col-sm-4">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Création d'un utilisateur</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::open(['route' => 'user.store', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('lastName') ? 'has-error' : '' !!}">
						{!! Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
						{!! $errors->first('lastName', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('firstName') ? 'has-error' : '' !!}">
						{!! Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'Prénom']) !!}
						{!! $errors->first('firstName', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('age') ? 'has-error' : '' !!}">
						{!! Form::text('age', null, ['class' => 'form-control', 'placeholder' => 'Age']) !!}
						{!! $errors->first('age', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('phone') ? 'has-error' : '' !!}">
						{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Téléphone']) !!}
						{!! $errors->first('phone', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('mail') ? 'has-error' : '' !!}">
						{!! Form::email('mail', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
						{!! $errors->first('mail', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
						{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
						{!! $errors->first('password', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group">
						{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe']) !!}
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								{!! Form::checkbox('admin', 1, null) !!} Administrateur
							</label>
						</div>
					</div>
					{!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection
