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
  width:50px;
  height:50px;
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

.meeting_item .link-cancelar:hover{
  color:red !important;
  text-decoration: none;
  transform: scale(1.05);
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
                                    &nbsp;&nbsp;&nbsp;&nbsp;Mi Agenda&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </li>
                        </ul>
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
                            <div class="tab-pane active" id="tab_default_1">
                                
                                @foreach ($meetings as $meeting)
                                @if(!$meeting->isSunday())
                                <div class="row meeting_item">
                                  <div class="col-sm-1" style="padding:0px;">
                                    <a href="{{ url('paciente/'.$meeting->user_id) }}" class="thumbnail">
                                      @if($meeting->patient->photo == '')
                                      <img src="{{ asset('assets/images/base/no-photo.png') }}" alt="" class="img-responsive img-circle img-thumbnail photo">
                                      @else
                                      <img src="{{ asset('storage/'.$meeting->patient->photo) }}" alt="" class="img-responsive img-circle img-thumbnail photo">
                                      @endif
                                    </a>
                                  </div>
                                  <div class="col-sm-3">
                                      <h4 style="text-transform:none !important; color:#333; font-size:15px;margin-top:15px;">
                                        <a href="{{ url('paciente/'.$meeting->user_id) }}">
                                          {{ $meeting->patient->getCompleteName() }}
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
                                      <span class="glyphicon glyphicon-list-alt"></span>
                                      <a href="{{ url('paciente/'.$meeting->user_id) }}">HCN</a>
                                      &nbsp;&nbsp;
                                      <span class="glyphicon glyphicon-remove-circle"></span>
                                      <a href="{{ url('citas/'.$meeting->id) }}" class="link-cancelar">Cancelar</a>
                                    </p>
                                  </div>
                                  <div class="col-sm-2">
                                    <p style="margin-top:10px;padding-bottom:0px;">
                                      <button type="button" class="btn btn-primary btn-sm btn-record" style="text-transform:none !important; padding:7px 23px 7px 10px;"
                                      data-mid="{{ $meeting->id }}"
                                      data-weight="{{ $meeting->weight }}"
                                      data-height="{{ $meeting->height }}"
                                      data-waist="{{ $meeting->waist }}"
                                      data-hip="{{ $meeting->hip }}"
                                      data-armperimeter="{{ $meeting->arm_perimeter }}"
                                      data-bicipital="{{ $meeting->bicipital }}"
                                      data-tricipital="{{ $meeting->tricipital }}"
                                      data-comment="{{ $meeting->comment }}">
                                          <span class="glyphicon glyphicon-pencil"></span>&nbsp;
                                          Record
                                        </button>
                                    </p>
                                  </div>
                                </div>
                                <hr class="margin1">
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

<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-transform:none;color:#333;font-weight:bold;">
          Registro de avance <span style="font-weight:normal;">(todos los campos son obligatorios)</span>
        </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          {!! Form::open(array('method' => 'post','class' => 'form-horizontal','style' => 'padding:0 20px 0 20px;','enctype' => 'multipart/form-data')) !!}
            <input name="id" type="hidden" value="" id="in-id">
            <h4 style="text-transform:none;margin-left:10px;margin-bottom:20px;">Ficha antropométrica</h4>
            <div class="form-group">
              {!! Form::label(null,'Peso (Kg)',array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-2">
                {!! Form::text('weight',null,array('class' => 'form-control','id' => 'in-weight')) !!}
              </div>
              {!! Form::label(null,'Altura (cm)',array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-2">
                {!! Form::text('height',null,array('class' => 'form-control','id' => 'in-height')) !!}
              </div>
              {!! Form::label(null,'Cintura (cm)',array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-2">
                {!! Form::text('waist',null,array('class' => 'form-control','id' => 'in-waist')) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label(null,'Cadera (cm)',array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-2">
                {!! Form::text('hip',null,array('class' => 'form-control','id' => 'in-hip')) !!}
              </div>
              {!! Form::label(null,'Perímetro del brazo (cm)',array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-2">
                {!! Form::text('arm_perimeter',null,array('class' => 'form-control','id' => 'in-arm-perimeter')) !!}
              </div>
              {!! Form::label(null,'Pliegue bicipital (mm)',array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-2">
                {!! Form::text('bicipital',null,array('class' => 'form-control','id' => 'in-bicipital')) !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label(null,'Pliegue tricipital (mm)',array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-2">
                {!! Form::text('tricipital',null,array('class' => 'form-control','id' => 'in-tricipital')) !!}
              </div>
            </div>
            <h4 style="text-transform:none;margin-left:10px;margin-bottom:20px;">Plan alimenticio</h4>
            <div class="form-group">
              {!! Form::label(null,'Subir archivo (.pdf)',array('class' => 'col-sm-3 control-label')) !!}
              <div class="col-sm-4">
                {!! Form::hidden('plan', '') !!}
                {!! Form::file('plan') !!}
              </div>
            </div>
            <h4 style="text-transform:none;margin-left:10px;margin-bottom:20px;">Minuta</h4>
            <div class="form-group">
              <div class="col-sm-12">
                {!! Form::textarea('comment',null,array('class' => 'form-control','rows'=>'10','id' => 'in-comment')) !!}
              </div>
            </div>
          <div class="modal-footer" style="padding-bottom:0px;">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">
              <span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;
              Guardar
            </button>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('.btn-record').click(recordModal);
  });

  function recordModal() {
    $('#in-id').val($(this).attr('data-mid'));
    $('#in-weight').val($(this).attr('data-weight'));
    $('#in-height').val($(this).attr('data-height'));
    $('#in-waist').val($(this).attr('data-waist'));
    $('#in-hip').val($(this).attr('data-hip'));
    $('#in-arm-perimeter').val($(this).attr('data-armperimeter'));
    $('#in-bicipital').val($(this).attr('data-bicipital'));
    $('#in-tricipital').val($(this).attr('data-tricipital'));
    $('#in-comment').val($(this).attr('data-comment'));
    $('#myModal').modal('show');
  }
</script>
@endsection