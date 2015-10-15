{!! Form::open(array('method' => 'post','class' => 'form-horizontal','enctype' => 'multipart/form-data')) !!}
	{!! Form::hidden('role', 'nutritionist') !!}
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
	<div class="form-group">
		<label class="col-sm-3 control-label" for="formGroup">
			@if(Auth::user()->photo == '')
			<img src="{{ asset('assets/images/base/no-photo.png') }}" alt="Foto de perfil" class="img-responsive img-circle img-thumbnail" id="photo">
			@else
			<img src="{{ asset('storage/'.Auth::user()->photo) }}" alt="Foto de perfil" class="img-responsive img-circle img-thumbnail" id="photo">
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
	<h3 id="subtitulo">Formación</h3>
	<br>
	<div class="form-group">
		{!! Form::label(null,'Grado *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('grade',Auth::user()->nutritionistFile->grade,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Cédula profesional *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('license',Auth::user()->nutritionistFile->license,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Especialidad',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('speciality',Auth::user()->nutritionistFile->speciality,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Acerca de mí',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::textarea('about_me',Auth::user()->nutritionistFile->about_me,array('class' => 'form-control','rows'=>'4','id'=>'about_me')) !!}
		</div>
	</div>
	<br>
	<h4 id="subtitulo">Datos de Consultorio</h4>
	<br>
	<div class="form-group">
		{!! Form::label(null,'Calle y número *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-3">
			{!! Form::text('street',Auth::user()->street,array('class' => 'form-control')) !!}
		</div>
		<div class="col-sm-2">
			{!! Form::text('number',Auth::user()->number,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Colonia *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('neighborhood',Auth::user()->neighborhood,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Código postal *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('zip_code',Auth::user()->zip_code,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Ciudad *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('city',Auth::user()->city,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Estado *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('state',Auth::user()->state,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'País *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5">
			{!! Form::text('country',Auth::user()->country,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Teléfono *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="input-group col-sm-5" id="text-icon">
			<span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
			{!! Form::text('office_phone',Auth::user()->nutritionistFile->office_phone,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Días de atención *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-5" id="semana">
			<label class="checkbox-inline">
				{!! Form::checkbox('Mon','Mon', Auth::user()->nutritionistFile->mon) !!}L
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('Tue','Tue', Auth::user()->nutritionistFile->tue) !!}M
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('Wed','Wed', Auth::user()->nutritionistFile->wed) !!}Mi
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('Thu','Thu', Auth::user()->nutritionistFile->thu) !!}J
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('Fri','Fri', Auth::user()->nutritionistFile->fri) !!}V
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('Sat','Sat', Auth::user()->nutritionistFile->sat) !!}S
			</label>
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Horario *',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-2">
			{!! Form::input('time','initial_hour',Auth::user()->nutritionistFile->initial_hour,array('class' => 'form-control')) !!}
		</div>
		<div class="col-sm-2">
			{!! Form::input('time','final_hour',Auth::user()->nutritionistFile->final_hour,array('class' => 'form-control')) !!}
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
	</div>{!! Form::close() !!}