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

#nut_item p{
  padding: 0px;
  margin-bottom: 5px;
}

#nut_item h3{
  margin-bottom: 7px;
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

#nut_item h3:hover, .email_link:hover{
  color:rgb(180,220,100) !important;
  text-decoration: none;
  transform: scale(1.01);
}

#nut_item .thumbnail{
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

#nut_item #link-h3:hover{
  text-decoration: none !important;
}

#nut_item .thumbnail:hover{
  transform: scale(1.05);
}

.email_link{
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  color: #333;
}

#photo{
  width: 100px;
  height: 100px;
}

.pagination li.active span{
    color: #fff;
    background-color:rgb(141,198,63) !important;
    border-color:rgb(141,198,63) !important;
}

.pagination li a{
    color:rgb(141,198,63) !important;
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
                            <li>
                                <a href="{{ url('historia-clinica') }}">
                                    <span>HCN</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li class="active">
                                <a href="{{ url('agendar-cita') }}">
                                    <span>Agendar cita</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li>
                                <a href="{{ url('seguimiento') }}">
                                    <span>Seguimiento</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li>
                                <a href="{{ url('historial') }}">
                                    <span>Historial</span>
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
                                    &nbsp;&nbsp;&nbsp;&nbsp;Directorio de Nutriólogos&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </li>
                            {!! Form::model(Request::all(),['url' => 'agendar-cita','method' => 'GET','class' => 'navbar-form navbar-left pull-right','role' => 'search'])!!}
                              <div class="form-group">
                                {!! Form::text('nombre',null,['class' => 'form-control','placeholder' => 'Buscar por nombre','style'=>'height:34px;padding:8px 14px 8px 14px;border-radius:4px;']) !!}
                                {!! Form::select('orden',['ASC' =>'A-Z','DESC' => 'Z-A'],null,['class'=>'form-control','placeholder'=>'Ordenar ...'])!!}
                              </div>
                              <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                              </button>
                            {!! Form::close() !!}
                        </ul>
                        <br>
                        <br>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">

                                @foreach ($users as $user)

                                <div class="row" id="nut_item">
                                  <div class="col-sm-2">
                                    <a href="{{ url('nutriologo/'.$user->id) }}" class="thumbnail">
                                      @if($user->photo == '')
                                      <img src="{{ asset('assets/images/base/no-photo.png') }}" alt="" class="img-responsive img-circle img-thumbnail" id="photo">
                                      @else
                                      <img src="{{ asset('storage/'.$user->photo) }}" alt="" class="img-responsive img-circle img-thumbnail" id="photo">
                                      @endif
                                    </a>
                                  </div>
                                  <div class="col-sm-6">
                                    <a href="{{ url('nutriologo/'.$user->id) }}" id="link-h3">
                                      <h3 style="text-transform:none !important; color:#333;">
                                        <span class="glyphicon glyphicon-apple"></span>&nbsp;
                                        {{ $user->first_name.' '.$user->last_name }}
                                      </h3>
                                    </a>
                                    <p><span class="glyphicon glyphicon-education"></span>&nbsp;
                                      {{ $user->nutritionistFile->grade.', '.$user->nutritionistFile->speciality }}
                                    </p>
                                    <p class="subir_item"><span class="glyphicon glyphicon-map-marker"></span>&nbsp;
                                      {{ $user->street.' '.$user->number.', '.$user->neighborhood.', '.$user->city }}</p>
                                  </div>
                                  <div class="col-sm-4">
                                    <p><span class="glyphicon glyphicon-star"></span>
                                      &nbsp;{{ $user->nutritionistFile->ranking }}</p>
                                    <p><span class="glyphicon glyphicon-earphone"></span>
                                      &nbsp;{{ $user->nutritionistFile->office_phone }}</p>
                                    <p><span class="glyphicon glyphicon-envelope"></span>
                                      &nbsp;<a href="mailto:{{ $user->email }}" class="email_link">{{ $user->email }}</a></p>
                                  </div>
                                </div>
                                <br>
                                <hr class="margin1">
                                <br>
                                
                                @endforeach

                                <div class="row">
                                  <div class="col-sm-12" style="text-align:center;">
                                    {!! $users->setPath('')->appends(Request::only(['nombre','orden']))->render() !!}
                                  </div>
                                </div>

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