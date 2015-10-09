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
  font-size: 17px;
}

#nut_item h2{
  margin-top:0px;
  margin-bottom: 7px;
  font-size: 35px;
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

#nut_item h2:hover, .email_link:hover{
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

.pagination li.active span{
    color: #fff;
    background-color:rgb(141,198,63) !important;
    border-color:rgb(141,198,63) !important;
}

.pagination li a{
    color:rgb(141,198,63) !important;
}

#pam{
  font-size: 13px !important;
}

#photo{
  width: 130px;
  height: 130px;
}

th{
  font-size: 16px;
  padding:15px 20px 15px 20px !important;
  /*color:rgb(141,198,63);*/
}

th span{
  margin-right:30px;
}

th a{
  margin: 0px 10px 0px 10px;
  color:rgb(141,198,63);
}

th a:hover{
  color:#333;
}

.nd{
  font-size:12px;
  margin:5px 0px 0px 0px;
  padding:0px;
  color:#adadad;
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
                                    &nbsp;&nbsp;&nbsp;&nbsp;Ficha de Nutriólogo&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </li>
                        </ul>
                        <br>
                        <br>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_default_1">
                                <div class="row" id="nut_item">
                                	<div class="col-sm-2">
	                                  	<a href="{{ url('nutriologo/'.$user->id) }}" class="thumbnail" id=>
	                                  		@if($user->photo == '')
	                                  		<img src="{{ asset('assets/images/base/no-photo.png') }}" alt="" class="img-responsive img-circle img-thumbnail" id="photo">
	                                  		@else
	                                  		<img src="{{ asset('storage/'.$user->photo) }}" alt="" class="img-responsive img-circle img-thumbnail" id="photo">
	                                  		@endif
	                                    </a>
                                	</div>
	                                <div class="col-sm-6">
	                                    <a href="{{ url('nutriologo/'.$user->id) }}" id="link-h3">
	                                    	<h2 style="text-transform:none !important; color:#333;">
	                                        <span class="glyphicon glyphicon-apple"></span>&nbsp;
	                                        {{ $user->first_name.' '.$user->last_name }}
	                                    	</h2>
	                                    </a>
	                                    <p><span class="glyphicon glyphicon-education"></span>&nbsp;
	                                      {{ $user->nutritionistFile->grade.', '.$user->nutritionistFile->speciality }}
	                                    </p>
                                      <hr style="margin:15px 0 15px 0;">
                                      <p class="subir_item" id="pam">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                        &nbsp;{{ $user->nutritionistFile->about_me }}
                                      </p>
	                                </div>
	                                <div class="col-sm-4">
	                                    <h2>
                                        <span class="glyphicon glyphicon-star"></span>
	                                      &nbsp;{{ $user->nutritionistFile->ranking }}
                                      </h2>
	                                    <p>
                                        <span class="glyphicon glyphicon-earphone"></span>
	                                      &nbsp;{{ $user->nutritionistFile->office_phone }}
                                      </p>
	                                    <p>
                                        <span class="glyphicon glyphicon-envelope"></span>
	                                      &nbsp;<a href="mailto:{{ $user->email }}" class="email_link">
	                                      {{ $user->email }}</a>
	                                  	</p>
                                      <p>
                                        <span style="font-weight:bold;">Cédula: </span>
                                        {{ $user->nutritionistFile->license }}
                                      </p>
	                                </div>
                                </div>
                                <br>
                                <hr class="margin1">
                                <br>
                                <div class="row">
                                	<div class="col-sm-4">
                                    <h3 style="text-transform:none;">Detalles de consultorio</h3>
                                    <br>
                                    <p><span class="glyphicon glyphicon-map-marker"></span>&nbsp;
                                        {{ $user->getAddress() }}
                                    </p>
                                    <p>
                                      <span class="glyphicon glyphicon-calendar"></span>
                                      &nbsp;Días de atención
                                      <br>
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      {{ $user->nutritionistFile->getDays() }}
                                    </p>
                                    <p>
                                        <span class="glyphicon glyphicon-time"></span>
                                        &nbsp;Horario de {{ $user->nutritionistFile->getSchedule() }}
                                    </p>
                                	</div>
                                  <div class="col-sm-8">
                                    <figure class="g_map" style="margin:0px; border-radius:20px;">
                                        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q={{ $user->getUrlLocation() }}&key=AIzaSyDtoXbvnzu2iTYSJxGkJkuXFL1L0Cs9EVQ" allowfullscreen>
                                        </iframe>
                                    </figure>
                                  </div>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <div class="row">
                                  <div class="col-sm-12">
                                    <h3 style="text-transform:none;">Citas disponibles</h3>
                                    <br>
                                    <table class="table table-hover">
                                      <tbody>
                                        <tr>
                                          <th>
                                            <div class="col-xs-3">
                                              <span>Lunes {{ $user->nutritionistFile->getDateDay(1) }}</span>
                                            </div>
                                            <div class="col-xs-9">
                                              @if($user->nutritionistFile->mon)
                                                @foreach($user->nutritionistFile->getAvailableMeetings(1) as $meeting)
                                                <a href="">{{ $meeting }}</a>
                                                @endforeach
                                              @else
                                                <p class="nd"><i>Día sin consultas</i></p>
                                              @endif
                                            </div>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                            <div class="col-xs-3">
                                              <span>Martes {{ $user->nutritionistFile->getDateDay(2) }}</span>
                                            </div>
                                            <div class="col-xs-9">
                                              @if($user->nutritionistFile->tue)
                                                @foreach($user->nutritionistFile->getAvailableMeetings(2) as $meeting)
                                                <a href="">{{ $meeting }}</a>
                                                @endforeach
                                              @else
                                                <p class="nd"><i>Día sin consultas</i></p>
                                              @endif
                                            </div>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                            <div class="col-xs-3">
                                              <span>Miércoles {{ $user->nutritionistFile->getDateDay(3) }}</span>
                                            </div>
                                            <div class="col-xs-9">
                                              @if($user->nutritionistFile->wed)
                                                @foreach($user->nutritionistFile->getAvailableMeetings(3) as $meeting)
                                                <a href="">{{ $meeting }}</a>
                                                @endforeach
                                              @else
                                                <p class="nd"><i>Día sin consultas</i></p>
                                              @endif
                                            </div>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                            <div class="col-xs-3">
                                              <span>Jueves {{ $user->nutritionistFile->getDateDay(4) }}</span>
                                            </div>
                                            <div class="col-xs-9">
                                              @if($user->nutritionistFile->thu)
                                                @foreach($user->nutritionistFile->getAvailableMeetings(4) as $meeting)
                                                <a href="">{{ $meeting }}</a>
                                                @endforeach
                                              @else
                                                <p class="nd"><i>Día sin consultas</i></p>
                                              @endif
                                            </div>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                            <div class="col-xs-3">
                                              <span>Viernes {{ $user->nutritionistFile->getDateDay(5) }}</span>
                                            </div>
                                            <div class="col-xs-9">
                                              @if($user->nutritionistFile->fri)
                                                @foreach($user->nutritionistFile->getAvailableMeetings(5) as $meeting)
                                                <a href="">{{ $meeting }}</a>
                                                @endforeach
                                              @else
                                                <p class="nd"><i>Día sin consultas</i></p>
                                              @endif
                                            </div>
                                          </th>
                                        </tr>
                                        <tr>
                                          <th>
                                            <div class="col-xs-3">
                                              <span>Sábado {{ $user->nutritionistFile->getDateDay(6) }}</span>
                                            </div>
                                            <div class="col-xs-9">
                                              @if($user->nutritionistFile->sat)
                                                @foreach($user->nutritionistFile->getAvailableMeetings(6) as $meeting)
                                                <a href="">{{ $meeting }}</a>
                                                @endforeach
                                              @else
                                                <p class="nd"><i>Día sin consultas</i></p>
                                              @endif
                                            </div>
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
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