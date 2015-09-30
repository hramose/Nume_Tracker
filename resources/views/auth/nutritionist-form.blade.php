{!! Form::open(array('method' => 'post','class' => 'form-horizontal')) !!}
	<br>
	<h3 id="subtitulo">Cuenta</h3>
	<br>
	<div class="form-group">
		{!! Form::label(null,'Correo electrónico *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="input-group col-sm-4" id="text-icon">
			<span class="input-group-addon">@</span>
			{!! Form::email('email-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Contraseña *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::password('password-n',array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Confirmar contraseña *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::password('password_confirmation-n',array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<h3 id="subtitulo">Perfil</h3>
	<br>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="formGroup">
			<img src="assets/images/base/no-photo.png" alt="Foto de perfil" class="img-responsive img-circle img-thumbnail" id="photo">
		</label>
		<div class="col-sm-4" id="input-photo">
			{!! Form::file('photo-n') !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Nombre (s) *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('name-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Apellido (s) *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('last_name-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Fecha de nacimiento *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::date('birthday-n',null,array('class'=>'form-control','min' => '1950-01-01', 'max' => '2000-01-01')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Sexo',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			<label class="radio-inline">
				{!! Form::radio('gender-n','masculine',true,['class' => 'field','style' => 'top:-4px;']) !!}Masculino
			</label>
			<label class="radio-inline">
				{!! Form::radio('gender-n','feminine',false,['class' => 'field','style' => 'top:-4px;']) !!}Femenino
			</label>
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Teléfono',array('class' => 'col-sm-2 control-label')) !!}
		<div class="input-group col-sm-4" id="text-icon">
			<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
			{!! Form::text('phone-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<h3 id="subtitulo">Formación</h3>
	<br>
	<div class="form-group">
		{!! Form::label(null,'Grado *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('grade-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Cédula profesional *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('license-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Especialidad',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('speciality-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Acerca de mí',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::textarea('about_me-n',null,array('class' => 'form-control','rows'=>'4','id'=>'about_me')) !!}
		</div>
	</div>
	<br>
	<h4 id="subtitulo">Datos de Consultorio</h4>
	<br>
	<br/>
	<div class="form-group">
		{!! Form::label(null,'Calle y número',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-md-3">
			{!! Form::text('street-n',null,array('class' => 'form-control')) !!}
		</div>
		<div class="col-md-1">
			{!! Form::text('number-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Colonia',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-md-4">
			{!! Form::text('neighborhood-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Código postal',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-md-4">
			{!! Form::text('zip_code-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Ciudad',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-md-4">
			{!! Form::text('city-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Estado',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-md-4">
			{!! Form::text('state-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'País',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-md-4">
			{!! Form::text('country-n',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="formGroup"></label>
		<div class="col-sm-4">
			<button type="submit" class="btn btn-success btn-lg">
				<span class="glyphicon glyphicon-floppy-saved"></span> Crear cuenta
			</button>
		</div>
	</div>{!! Form::close() !!}