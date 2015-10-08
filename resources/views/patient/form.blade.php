{!! Form::open(array('method' => 'post','class' => 'form-horizontal','enctype' => 'multipart/form-data')) !!}
	{!! Form::hidden('role', 'patient') !!}
	<br>
	<!--<h3 id="subtitulo">Cuenta</h3>
	<br>-->
	<div class="form-group">
		{!! Form::label(null,'Correo electrónico',array('class' => 'col-sm-3 control-label')) !!}
		<div class="input-group col-sm-5" id="text-icon">
			<span class="input-group-addon">@</span>
			<input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" readonly>
		</div>
	</div>
	<!--<div class="form-group">
		{!! Form::label(null,'Contraseña *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::password('password',array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Confirmar contraseña *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::password('password_confirmation',array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<h3 id="subtitulo">Perfil</h3>
	<br>-->
	<div class="form-group">
		<label class="col-sm-3 control-label" for="formGroup">
			@if(Auth::user()->photo == '')
			<img src="assets/images/base/no-photo.png" alt="Foto de perfil" class="img-responsive img-circle img-thumbnail" id="photo">
			@else
			<img src="{{ 'storage/'.Auth::user()->photo }}" alt="Foto de perfil" class="img-responsive img-circle img-thumbnail" id="photo">
			@endif
		</label>
		<div class="col-sm-5" id="input-photo">
			{!! Form::hidden('photo', '') !!}
			{!! Form::file('photo') !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Nombre (s) *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('first_name',Auth::user()->first_name,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Apellido (s) *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('last_name',Auth::user()->last_name,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Fecha de nacimiento *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::date('birthday',Auth::user()->birthday,array('class'=>'form-control','min' => '1950-01-01', 'max' => '2000-01-01')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Sexo',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			@if(Auth::user()->gender == 'masculine')
			<label class="radio-inline">
				{!! Form::radio('gender', 'masculine',true,['class' => 'field','style' => 'top:-4px;']) !!}Masculino
			</label>
			<label class="radio-inline">
				{!! Form::radio('gender', 'feminine',false,['class' => 'field','style' => 'top:-4px;']) !!}Femenino
			</label>
			@else
			<label class="radio-inline">
				{!! Form::radio('gender', 'masculine',false,['class' => 'field','style' => 'top:-4px;']) !!}Masculino
			</label>
			<label class="radio-inline">
				{!! Form::radio('gender', 'feminine',true,['class' => 'field','style' => 'top:-4px;']) !!}Femenino
			</label>
			@endif
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Teléfono',array('class' => 'col-sm-3 control-label')) !!}
		<div class="input-group col-sm-5" id="text-icon">
			<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
			{!! Form::text('phone',Auth::user()->phone,array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
		<h4 id="subtitulo">Dirección</h4>
	<br>
	<br/>
	<div class="form-group">
		{!! Form::label(null,'Calle y número',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-3">
			{!! Form::text('street',Auth::user()->street,array('class' => 'form-control')) !!}
		</div>
		<div class="col-sm-2">
			{!! Form::text('number',Auth::user()->number,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Colonia',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('neighborhood',Auth::user()->neighborhood,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Código postal',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('zip_code',Auth::user()->zip_code,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Ciudad',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('city',Auth::user()->city,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Estado',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('state',Auth::user()->state,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'País',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('country',Auth::user()->country,array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="formGroup"></label>
		<div class="col-sm-5">
			<button type="submit" class="btn btn-success btn-lg">
				<span class="glyphicon glyphicon-floppy-saved"></span> guardar cambios
			</button>
		</div>
	</div>
{!! Form::close() !!}