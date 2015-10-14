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

.photo{
  width:50px!important;
  height:50px!important;
}

.thumbnail,.margin1{
  margin-bottom: 10px !important;
}

.pagination li.active span{
    color: #fff;
    background-color:rgb(141,198,63) !important;
    border-color:rgb(141,198,63) !important;
}

.pagination li a{
    color:rgb(141,198,63) !important;
}

.meeting_item a{
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
  color: #333;
}

.meeting_item a:hover{
  color:rgb(180,220,100) !important;
  text-decoration: none;
  transform: scale(1.05);
}

.meeting_item .link-download:hover{
  color:green !important;
  text-decoration: none;
  transform: scale(1.05);
}

.link-vd, .link-vd:active, .link-vd:link, .link-vd:hover, .link-vd:visited{
  color:white!important;
  text-decoration: none!important;
  transform:none!important;
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
                            <li>
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
                            <li class="active">
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
                                    &nbsp;&nbsp;&nbsp;&nbsp;Histórico de citas&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </li>
                        </ul>
                        <br>
                        <br>
                        <div class="tab-content">
                            @if(session('success'))
                            <div class="alert alert-success">
                              <span class="glyphicon glyphicon-ok"></span>
                              &nbsp;&nbsp;&nbsp;{{ session('success') }}
                            </div>
                            @endif
                            @if ( session('errors') )
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if ( session('file_error') )
                            <div class="alert alert-danger">
                                <span class="glyphicon glyphicon-remove"></span>
                                &nbsp;&nbsp;&nbsp;{{ session('file_error') }}
                            </div>
                            @endif
                            <div class="tab-pane active" id="tab_default_1">
                                
                                @foreach ($meetings as $meeting)
                                @if(!$meeting->isSunday())
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-bottom:0px;">
                                  <div class="panel" style="border:0px; box-shadow:none;" >
                                    <div class="panel-heading" role="tab" id="{{ 'heading-'.$meeting->id }}" style="padding:0px;">


                                      <div class="row meeting_item">
                                        <div class="col-sm-1" style="padding:0px;">
                                          <a href="{{ url('/') }}" class="thumbnail">
                                            @if($meeting->nutritionist->photo == '')
                                            <img src="{{ asset('assets/images/base/no-photo.png') }}" alt="" class="img-responsive img-circle img-thumbnail photo">
                                            @else
                                            <img src="{{ asset('storage/'.$meeting->nutritionist->photo) }}" alt="" class="img-responsive img-circle img-thumbnail photo">
                                            @endif
                                          </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <h4 style="text-transform:none !important; color:#333; font-size:15px;margin-top:15px;">
                                              <a href="{{ url('/') }}">
                                                {{ $meeting->nutritionist->getCompleteName() }}
                                              </a>
                                            </h4>
                                        </div>
                                        <div class="col-sm-6">
                                          <p style="margin-top:15px; padding-bottom:0px;">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                            {{ $meeting->getScheduleDateTime() }}
                                            &nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-time"></span>
                                            {{ $meeting->getTime() }}
                                            &nbsp;&nbsp;
                                            @if($meeting->plan != '')
                                            <span class="glyphicon glyphicon-cloud-download"></span>
                                            <a href="{{ url('historial/descarga/'.$meeting->id) }}" class="link-download">Descargar plan</a>
                                            @else
                                            <span class="glyphicon glyphicon-remove-circle" style="color:red;"></span>
                                            <strong style="color:red;">Plan no disponible</strong>
                                            @endif
                                          </p>
                                        </div>
                                        <div class="col-sm-2">
                                          <p style="margin-top:10px;padding-bottom:0px;">
                                            <button type="button" class="btn btn-primary btn-sm" style="text-transform:none !important; padding:7px 23px 7px 10px;">
                                                <span class="glyphicon glyphicon-eye-open"></span>&nbsp;
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="{{ '#collapse'.$meeting->id }}" aria-expanded="false" aria-controls="{{ 'collapse'.$meeting->id }}" class="link-vd" style="color:white!important;">
                                                  Ver detalle
                                                </a>
                                            </button>
                                          </p>
                                        </div>
                                      </div>
                                      <hr class="margin1">

                                    </div>
                                    <div id="{{ 'collapse'.$meeting->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="{{ 'heading-'.$meeting->id }}" style="margin-bottom:10px;">
                                      <div class="row">
                                        <div class="col-sm-12">
                                          <h4 style="text-transform:none;margin:10px 0px 10px 10px;">
                                            Antropometría
                                          </h4>
                                          <div class="panel-body" style="border-top:0px;padding:0px">
                                            <div class="bs-example" data-example-id="striped-table">
                                              <div class="table-responsive">
                                                <table class="table table-striped" style="font-size:13px;">
                                                  <thead>
                                                    <tr>
                                                      <th>Peso<br>(kg)</th>
                                                      <th>Altura<br>(cm)</th>
                                                      <th>Cintura<br>(cm)</th>
                                                      <th>Cadera<br>(cm)</th>
                                                      <th>Perímetro del brazo<br>(cm)</th>
                                                      <th>Pliege bicipital<br>(mm)</th>
                                                      <th>Pliege tricipital<br>(mm)</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td>{{ $meeting->weight }}</td>
                                                      <td>{{ $meeting->height }}</td>
                                                      <td>{{ $meeting->waist }}</td>
                                                      <td>{{ $meeting->hip }}</td>
                                                      <td>{{ $meeting->arm_perimeter }}</td>
                                                      <td>{{ $meeting->bicipital }}</td>
                                                      <td>{{ $meeting->tricipital }}</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-8">
                                          <h4 style="text-transform:none;margin-left:10px;">
                                            Minuta
                                          </h4>
                                          <p style="margin-left:10px;margin-top:10px;">{{ $meeting->comment }}</p>
                                        </div>
                                        <div class="col-sm-4">
                                          <strong>Valoración de consulta</strong>
                                          <br><br>
                                          <div class="row">
                                            {!! Form::open(array('method' => 'post','class' => 'form-horizontal')) !!}
                                            {!! Form::hidden('id', $meeting->id) !!}
                                            <div class="col-xs-1">
                                              <span class="glyphicon glyphicon-star" style="font-size:25px;top:5px;"></span>
                                            </div>
                                            <div class="col-xs-5">
                                              {!! Form::select('review', [5=>5,4=>4,3=>3,2=>2,1=>1], $meeting->review,['class' => 'form-control','style'=>'margin-left:0px;']) !!}
                                            </div>
                                            <div class="col-xs-5">
                                              <button type="submit" class="btn btn-success btn-lg" style="text-transform:none;padding:9px 18px 9px 10px;">
                                                <span class="glyphicon glyphicon-hand-right"></span>&nbsp;Calificar
                                              </button>
                                            </div>
                                            {!! Form::close() !!}
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                @endif
                                @endforeach

                                <div class="row">
                                  <div class="col-sm-12" style="text-align:center;">
                                    {!! $meetings->setPath('')->render() !!}
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

@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('#accordion .collapse').collapse();
  });
</script>
@endsection