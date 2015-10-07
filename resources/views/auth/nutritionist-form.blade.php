{!! Form::open(array('method' => 'post','class' => 'form-horizontal','enctype' => 'multipart/form-data')) !!}
	{!! Form::hidden('role', 'nutritionist') !!}
	<br>
	<h3 id="subtitulo">Cuenta</h3>
	<br>
	<div class="form-group">
		{!! Form::label(null,'Correo electrónico *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="input-group col-sm-4" id="text-icon">
			<span class="input-group-addon">@</span>
			{!! Form::email('email',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Contraseña *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::password('password',array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Confirmar contraseña *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::password('password_confirmation',array('class' => 'form-control')) !!}
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
			{!! Form::hidden('photo', '') !!}
			{!! Form::file('photo') !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Nombre (s) *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('first_name',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Apellido (s) *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('last_name',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Fecha de nacimiento *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::date('birthday',null,array('class'=>'form-control','min' => '1950-01-01', 'max' => '2000-01-01')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Sexo',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			<label class="radio-inline">
				{!! Form::radio('gender','masculine',true,['class' => 'field','style' => 'top:-4px;']) !!}Masculino
			</label>
			<label class="radio-inline">
				{!! Form::radio('gender','feminine',false,['class' => 'field','style' => 'top:-4px;']) !!}Femenino
			</label>
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Teléfono',array('class' => 'col-sm-2 control-label')) !!}
		<div class="input-group col-sm-4" id="text-icon">
			<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
			{!! Form::text('phone',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<h3 id="subtitulo">Formación</h3>
	<br>
	<div class="form-group">
		{!! Form::label(null,'Grado *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('grade',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Cédula profesional *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('license',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Especialidad',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('speciality',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Acerca de mí',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::textarea('about_me',null,array('class' => 'form-control','rows'=>'4','id'=>'about_me')) !!}
		</div>
	</div>
	<br>
	<h4 id="subtitulo">Datos de Consultorio</h4>
	<br>
	<div class="form-group">
		{!! Form::label(null,'Calle y número *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-3">
			{!! Form::text('street',null,array('class' => 'form-control')) !!}
		</div>
		<div class="col-sm-1">
			{!! Form::text('number',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Colonia *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('neighborhood',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Código postal *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('zip_code',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Ciudad *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('city',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Estado *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('state',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'País *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('country',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Teléfono *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="input-group col-sm-4" id="text-icon">
			<span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
			{!! Form::text('office_phone',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Días de atención *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4" id="semana">
			<label class="checkbox-inline">
				{!! Form::checkbox('Mon','Mon', true) !!}L
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('Tue','Tue', true) !!}M
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('Wed','Wed', true) !!}Mi
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('Thu','Thu', true) !!}J
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('Fri','Fri', true) !!}V
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('Sat','Sat', false) !!}S
			</label>
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Horario *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-2">
			{!! Form::input('time','initial_hour',null,array('class' => 'form-control')) !!}
		</div>
		<div class="col-sm-2">
			{!! Form::input('time','final_hour',null,array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<div class="form-group">
		{!! Form::label(null,null,array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Captcha::img() !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Captcha *',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('captcha',null,array('class' => 'form-control','placeholder' => 'Verificación Anti-Spam')) !!}
		</div>
	</div>
	<br>
	<br>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="formGroup"></label>
		<div class="col-sm-4">
			<button type="submit" class="btn btn-success btn-lg">
				<span class="glyphicon glyphicon-floppy-saved"></span> Crear cuenta
			</button>
		</div>
	</div>{!! Form::close() !!}