{!! Form::open(array('method' => 'post','class' => 'form-horizontal','enctype' => 'multipart/form-data')) !!}
	<br>
	<h3 id="subtitulo">Datos personales</h3>
	<br>
	<div class="form-group">
		{!! Form::label(null,'Estado civil',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('ms',Auth::user()->cnHistory->ms,array('class' => 'form-control')) !!}
		</div>
		{!! Form::label(null,'Ocupación',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('oc',Auth::user()->cnHistory->oc,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Escolaridad',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('sc',Auth::user()->cnHistory->sc,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Motivo de consulta',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-10">
			{!! Form::text('re',Auth::user()->cnHistory->re,array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<h3 id="subtitulo">Indicadores clínicos</h3>
	<br>
	<div class="form-group">
		{!! Form::label(null,'¿Ha llevado alguna dieta especial?',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-9">
			{!! Form::text('sd',Auth::user()->cnHistory->sd,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Cuántas?',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-3">
			{!! Form::text('hm',Auth::user()->cnHistory->hm,array('class' => 'form-control')) !!}
		</div>
		{!! Form::label(null,'¿Qué tipo de dieta?',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('dt',Auth::user()->cnHistory->dt,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Hace cuanto tiempo la realizó?',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-9">
			{!! Form::text('sw',Auth::user()->cnHistory->sw,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Obtuvo los resultados que esperaba?',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-9">
			{!! Form::text('or',Auth::user()->cnHistory->or,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Ha utilizado medicamento para bajar de peso?',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-3">
			{!! Form::text('ud',Auth::user()->cnHistory->ud,array('class' => 'form-control')) !!}
		</div>
		{!! Form::label(null,'¿Cuáles?',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-4">
			{!! Form::text('wd',Auth::user()->cnHistory->wd,array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<h3 id="subtitulo">Antecedentes Salud - Enfermedad</h3>
	<br>
	<div class="form-group">
		{!! Form::label(null,'Problemas actuales',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-9" id="semana">
			<label class="checkbox-inline">
				{!! Form::checkbox('ap1','ap1', Auth::user()->cnHistory->ap1) !!}Estreñimiento
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('ap2','ap2', Auth::user()->cnHistory->ap2) !!}Gastritis
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('ap3','ap3', Auth::user()->cnHistory->ap3) !!}Coilitis
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('ap4','ap4', Auth::user()->cnHistory->ap4) !!}Pirosis
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('ap5','ap5', Auth::user()->cnHistory->ap5) !!}Nauseas
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('ap6','ap6', Auth::user()->cnHistory->ap6) !!}Diarrea
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('ap7','ap7', Auth::user()->cnHistory->ap7) !!}Vómito
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('ap8','ap8', Auth::user()->cnHistory->ap8) !!}Úlcera
			</label>
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Dentadura',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-9">
			{!! Form::text('te',Auth::user()->cnHistory->te,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Padece alguna enfermedad diagnosticada?',array('class' => 'col-sm-5 control-label')) !!}
		<div class="col-sm-7">
			{!! Form::text('dd',Auth::user()->cnHistory->dd,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Ha padecido alguna enfermedad importante?',array('class' => 'col-sm-5 control-label')) !!}
		<div class="col-sm-7">
			{!! Form::text('im',Auth::user()->cnHistory->im,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Actualmente, ¿Toma algún medicamento?',array('class' => 'col-sm-5 control-label')) !!}
		<div class="col-sm-7">
			{!! Form::text('usd',Auth::user()->cnHistory->usd,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Cuál y qué dosis?',array('class' => 'col-sm-5 control-label')) !!}
		<div class="col-sm-7">
			{!! Form::text('whd',Auth::user()->cnHistory->whd,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Desde cuándo toma el medicamento?',array('class' => 'col-sm-5 control-label')) !!}
		<div class="col-sm-7">
			{!! Form::text('swu',Auth::user()->cnHistory->swu,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Le han practicado alguna cirugía?',array('class' => 'col-sm-5 control-label')) !!}
		<div class="col-sm-7">
			{!! Form::text('sur',Auth::user()->cnHistory->sur,array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<h3 id="subtitulo">Antecedentes Heredofamiliares</h3>
	<br>
	<div class="form-group">
		{!! Form::label(null,'Familiares con algún problema cómo',array('class' => 'col-sm-4 control-label')) !!}
		<div class="col-sm-8" id="semana">
			<label class="checkbox-inline">
				{!! Form::checkbox('obe','obe', Auth::user()->cnHistory->obe) !!}Obesidad
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('can','can', Auth::user()->cnHistory->can) !!}Cáncer
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('dia','dia', Auth::user()->cnHistory->dia) !!}Diabetes
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('ahi','ahi', Auth::user()->cnHistory->ahi) !!}HTA
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('hip','hip', Auth::user()->cnHistory->hip) !!}Hipercolesterolemia
			</label>
			<label class="checkbox-inline">
				{!! Form::checkbox('hep','hep', Auth::user()->cnHistory->hep) !!}HTGL
			</label>
		</div>
	</div>
	<br>
	<h3 id="subtitulo">Actividades</h3>
	<br>
	<div class="form-group">
		{!! Form::label(null,'¿Realiza actividad física?',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-4">
			@if(Auth::user()->cnHistory->fia == 'Sí')
			<label class="radio-inline">
				{!! Form::radio('fia', 'Sí',true,['class' => 'field','style' => 'top:-4px;']) !!}Sí
			</label>
			<label class="radio-inline">
				{!! Form::radio('fia', 'No',false,['class' => 'field','style' => 'top:-4px;']) !!}No
			</label>
			@else
			<label class="radio-inline">
				{!! Form::radio('fia', 'Sí',false,['class' => 'field','style' => 'top:-4px;']) !!}Sí
			</label>
			<label class="radio-inline">
				{!! Form::radio('fia', 'No',true,['class' => 'field','style' => 'top:-4px;']) !!}No
			</label>
			@endif
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Tipo de ejercicio',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-8">
			{!! Form::text('ext',Auth::user()->cnHistory->ext,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'Frecuencia',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-3">
			{!! Form::text('fre',Auth::user()->cnHistory->fre,array('class' => 'form-control')) !!}
		</div>
		{!! Form::label(null,'Duración',array('class' => 'col-sm-2 control-label')) !!}
		<div class="col-sm-3">
			{!! Form::text('dur',Auth::user()->cnHistory->dur,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Cuándo inició?',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-8">
			{!! Form::text('wst',Auth::user()->cnHistory->wst,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Fuma?',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-8">
			{!! Form::text('smo',Auth::user()->cnHistory->smo,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Consume alcohol?',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-8">
			{!! Form::text('dal',Auth::user()->cnHistory->dal,array('class' => 'form-control')) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label(null,'¿Consume café?',array('class' => 'col-sm-3 control-label')) !!}
		<div class="col-sm-8">
			{!! Form::text('dco',Auth::user()->cnHistory->dco,array('class' => 'form-control')) !!}
		</div>
	</div>
	<br>
	<div class="form-group">
		<label class="col-sm-3 control-label" for="formGroup"></label>
		<div class="col-sm-4">
			<button type="submit" class="btn btn-success btn-lg">
				<span class="glyphicon glyphicon-floppy-saved"></span> guardar cuestionario
			</button>
		</div>
	</div>{!! Form::close() !!}