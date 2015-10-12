@extends('base.appframe')

@section('styles')
<style>
/* Tabs panel */
.tabbable-panel {
  border:0px solid #eee;
  padding: 10px;
  font-family: raleway !important;
}

/* Default mode */
.tabbable-line > .nav-tabs {
  border: none;
  margin: 0px;
}
.tabbable-line > .nav-tabs > li {
  margin-right: 2px;
}
.tabbable-line > .nav-tabs > li > a {
  border: 0;
  margin-right: 0;
  color: #737373;
  font-size: 1.5em;
}
.tabbable-line > .nav-tabs > li > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
  border-bottom: 4px solid rgb(172,220,60);
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
  border: 0;
  background: none !important;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
  margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
  border-bottom: 4px solid rgb(172,220,60);
  position: relative;
}
.tabbable-line > .nav-tabs > li.active > a {
  border: 0;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.active > a > i {
  color: #404040;
}
.tabbable-line > .tab-content {
  margin-top: -3px;
  background-color: #fff;
  border: 0;
  /*border-top: 1px solid #eee;*/
  padding: 15px 0;
}
.portlet .tabbable-line > .tab-content {
  padding-bottom: 0;
}

#photo{
  width: 130px;
  height: 130px;
}

#pat p{
  padding: 0px;
  margin-bottom: 5px;
  font-size: 14px;
}

#pat h2{
  margin-top:0px;
  margin-bottom: 7px;
  font-size: 35px;
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

.email_link{
    -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  color:#333;
}

#pat h2:hover, .email_link:hover{
  color:rgb(180,220,100) !important;
  text-decoration: none;
  transform: scale(1.01);
}

#pat link-h3:hover{
  text-decoration: none !important;
}

#form-ro input{
  color:#333;
}

#form-ro h3{
  text-transform: none;
}

#semana input{
  top:-4px;
}

</style>
@endsection

@section('menu')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="navbar" id="navigation">
                <div class="navbar-inner container">
                    <div class="navbar-collapse collapse">
                        <ul class="sf-menu sf-js-enabled">
                            <li>
                                <a href="{{ url('perfil') }}">
                                    <span>Perfil</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li class="active">
                                <a href="{{ url('citas') }}">
                                    <span>Citas</span>
                                </a>
                                <strong></strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="brand">
                <a href="{{ url('/') }}">
                    <img class="img-responsive center-block" src="{{ asset('assets/images/home/logo.png') }}" alt="">
                </a>
            </h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div id="content">
    <div class="container">
        <div class="row">
          <hr class="margin1">
            <div class="col-sm-offset-1 col-sm-10">
                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab_default_1" data-toggle="tab">
                                    &nbsp;&nbsp;&nbsp;&nbsp;Historia Clínica - Nutriológica&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </li>
                        </ul>
                        <br>
                        <br>
                        <div class="tab-content">
                          <div class="row" id="pat">
                            <div class="col-sm-2">
                              @if($user->photo == '')
                              <img src="{{ asset('assets/images/base/no-photo.png') }}" alt="" class="img-responsive img-circle img-thumbnail" id="photo">
                              @else
                              <img src="{{ asset('storage/'.$user->photo) }}" alt="" class="img-responsive img-circle img-thumbnail" id="photo">
                              @endif
                            </div>
                            <div class="col-sm-6">
                                <h2 style="text-transform:none !important; color:#333;">
                                  <span class="glyphicon glyphicon-user"></span>&nbsp;
                                  {{ $user->getCompleteName() }}
                                </h2>
                                <p>
                                  <span class="glyphicon glyphicon-calendar"></span>
                                  &nbsp;<strong>Fecha de nacimiento:</strong>
                                  {{ date('d/m/Y',strtotime($user->birthday))." ".$user->getAge() }}
                                </p>
                                <p>
                                  <span class="glyphicon glyphicon-adjust"></span>
                                  &nbsp;<strong>Sexo:</strong>
                                  {{ $user->getGender() }}
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <p>
                                  <span class="glyphicon glyphicon-map-marker"></span>
                                  &nbsp;<strong>Dirección:</strong>
                                  {{ $user->getAddress() }}
                                </p>
                                <p>
                                  <span class="glyphicon glyphicon-earphone"></span>
                                  &nbsp; {{ $user->phone }}

                                </p>
                                <p>
                                  <span class="glyphicon glyphicon-envelope"></span>
                                  &nbsp;<a href="mailto:{{ $user->email }}" class="email_link">
                                  {{ $user->email }}</a>
                                </p>
                            </div>
                          </div>
                          <hr style="margin-top:20px;">
                          <div class="row">
                            {!! Form::open(array('method' => 'post','class' => 'form-horizontal','enctype' => 'multipart/form-data','id'=>'form-ro')) !!}
                              <br>
                              <h3 id="subtitulo">Datos personales</h3>
                              <br>
                              <div class="form-group">
                                {!! Form::label(null,'Estado civil',array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-4">
                                  {!! Form::text('ms',$user->cnHistory->ms,array('class' => 'form-control','disabled')) !!}
                                </div>
                                {!! Form::label(null,'Ocupación',array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-4">
                                  {!! Form::text('oc',$user->cnHistory->oc,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'Escolaridad',array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-4">
                                  {!! Form::text('sc',$user->cnHistory->sc,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'Motivo de consulta',array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-10">
                                  {!! Form::text('re',$user->cnHistory->re,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <br>
                              <h3 id="subtitulo">Indicadores clínicos</h3>
                              <br>
                              <div class="form-group">
                                {!! Form::label(null,'¿Ha llevado alguna dieta especial?',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                  {!! Form::text('sd',$user->cnHistory->sd,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Cuántas?',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-3">
                                  {!! Form::text('hm',$user->cnHistory->hm,array('class' => 'form-control','disabled')) !!}
                                </div>
                                {!! Form::label(null,'¿Qué tipo de dieta?',array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-4">
                                  {!! Form::text('dt',$user->cnHistory->dt,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Hace cuanto tiempo la realizó?',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                  {!! Form::text('sw',$user->cnHistory->sw,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Obtuvo los resultados que esperaba?',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                  {!! Form::text('or',$user->cnHistory->or,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Ha utilizado medicamento para bajar de peso?',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-3">
                                  {!! Form::text('ud',$user->cnHistory->ud,array('class' => 'form-control','disabled')) !!}
                                </div>
                                {!! Form::label(null,'¿Cuáles?',array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-4">
                                  {!! Form::text('wd',$user->cnHistory->wd,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <br>
                              <h3 id="subtitulo">Antecedentes Salud - Enfermedad</h3>
                              <br>
                              <div class="form-group">
                                {!! Form::label(null,'Problemas actuales',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-9" id="semana">
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('ap1','ap1', $user->cnHistory->ap1,['disabled'],['disabled']) !!}Estreñimiento
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('ap2','ap2', $user->cnHistory->ap2,['disabled']) !!}Gastritis
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('ap3','ap3', $user->cnHistory->ap3,['disabled']) !!}Coilitis
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('ap4','ap4', $user->cnHistory->ap4,['disabled']) !!}Pirosis
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('ap5','ap5', $user->cnHistory->ap5,['disabled']) !!}Nauseas
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('ap6','ap6', $user->cnHistory->ap6,['disabled']) !!}Diarrea
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('ap7','ap7', $user->cnHistory->ap7,['disabled']) !!}Vómito
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('ap8','ap8', $user->cnHistory->ap8,['disabled']) !!}Úlcera
                                  </label>
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'Dentadura',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-9">
                                  {!! Form::text('te',$user->cnHistory->te,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Padece alguna enfermedad diagnosticada?',array('class' => 'col-sm-5 control-label')) !!}
                                <div class="col-sm-7">
                                  {!! Form::text('dd',$user->cnHistory->dd,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Ha padecido alguna enfermedad importante?',array('class' => 'col-sm-5 control-label')) !!}
                                <div class="col-sm-7">
                                  {!! Form::text('im',$user->cnHistory->im,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'Actualmente, ¿Toma algún medicamento?',array('class' => 'col-sm-5 control-label')) !!}
                                <div class="col-sm-7">
                                  {!! Form::text('usd',$user->cnHistory->usd,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Cuál y qué dosis?',array('class' => 'col-sm-5 control-label')) !!}
                                <div class="col-sm-7">
                                  {!! Form::text('whd',$user->cnHistory->whd,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Desde cuándo toma el medicamento?',array('class' => 'col-sm-5 control-label')) !!}
                                <div class="col-sm-7">
                                  {!! Form::text('swu',$user->cnHistory->swu,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Le han practicado alguna cirugía?',array('class' => 'col-sm-5 control-label')) !!}
                                <div class="col-sm-7">
                                  {!! Form::text('sur',$user->cnHistory->sur,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <br>
                              <h3 id="subtitulo">Antecedentes Heredofamiliares</h3>
                              <br>
                              <div class="form-group">
                                {!! Form::label(null,'Familiares con algún problema cómo',array('class' => 'col-sm-4 control-label')) !!}
                                <div class="col-sm-8" id="semana">
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('obe','obe', $user->cnHistory->obe,['disabled']) !!}Obesidad
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('can','can', $user->cnHistory->can,['disabled']) !!}Cáncer
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('dia','dia', $user->cnHistory->dia,['disabled']) !!}Diabetes
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('ahi','ahi', $user->cnHistory->ahi,['disabled']) !!}HTA
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('hip','hip', $user->cnHistory->hip,['disabled']) !!}Hipercolesterolemia
                                  </label>
                                  <label class="checkbox-inline">
                                    {!! Form::checkbox('hep','hep', $user->cnHistory->hep,['disabled']) !!}HTGL
                                  </label>
                                </div>
                              </div>
                              <br>
                              <h3 id="subtitulo">Actividades</h3>
                              <br>
                              <div class="form-group">
                                {!! Form::label(null,'¿Realiza actividad física?',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-4">
                                  @if($user->cnHistory->fia == 'Sí')
                                  <label class="radio-inline">
                                    {!! Form::radio('fia', 'Sí',true,['class' => 'field','style' => 'top:-4px;','disabled']) !!}Sí
                                  </label>
                                  <label class="radio-inline">
                                    {!! Form::radio('fia', 'No',false,['class' => 'field','style' => 'top:-4px;','disabled']) !!}No
                                  </label>
                                  @else
                                  <label class="radio-inline">
                                    {!! Form::radio('fia', 'Sí',false,['class' => 'field','style' => 'top:-4px;','disabled']) !!}Sí
                                  </label>
                                  <label class="radio-inline">
                                    {!! Form::radio('fia', 'No',true,['class' => 'field','style' => 'top:-4px;','disabled']) !!}No
                                  </label>
                                  @endif
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'Tipo de ejercicio',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-8">
                                  {!! Form::text('ext',$user->cnHistory->ext,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'Frecuencia',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-3">
                                  {!! Form::text('fre',$user->cnHistory->fre,array('class' => 'form-control','disabled')) !!}
                                </div>
                                {!! Form::label(null,'Duración',array('class' => 'col-sm-2 control-label')) !!}
                                <div class="col-sm-3">
                                  {!! Form::text('dur',$user->cnHistory->dur,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Cuándo inició?',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-8">
                                  {!! Form::text('wst',$user->cnHistory->wst,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Fuma?',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-8">
                                  {!! Form::text('smo',$user->cnHistory->smo,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Consume alcohol?',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-8">
                                  {!! Form::text('dal',$user->cnHistory->dal,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              <div class="form-group">
                                {!! Form::label(null,'¿Consume café?',array('class' => 'col-sm-3 control-label')) !!}
                                <div class="col-sm-8">
                                  {!! Form::text('dco',$user->cnHistory->dco,array('class' => 'form-control','disabled')) !!}
                                </div>
                              </div>
                              {!! Form::close() !!}
                          </div>
                        </div>
                    </div>
                </div>
            </div>
          <hr class="margin1">
        </div>
    </div>
</div>
@endsection
