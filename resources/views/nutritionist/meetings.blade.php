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
                            <div class="tab-pane active" id="tab_default_1">
                                
                                @foreach ($meetings as $meeting)

                                <div class="row meeting_item">
                                  <div class="col-sm-2">
                                    <a href="{{ url('/') }}" class="thumbnail">
                                      @if($meeting->patient->photo == '')
                                      <img src="{{ asset('assets/images/base/no-photo.png') }}" alt="" class="img-responsive img-circle img-thumbnail photo">
                                      @else
                                      <img src="{{ asset('storage/'.$meeting->patient->photo) }}" alt="" class="img-responsive img-circle img-thumbnail photo">
                                      @endif
                                    </a>
                                  </div>
                                  <div class="col-sm-3">
                                      <h4 style="text-transform:none !important; color:#333; font-size:17px;margin-top:15px;">
                                        <a href="{{ url('/') }}">
                                          {{ $meeting->patient->getCompleteName() }}
                                        </a>
                                      </h4>
                                  </div>
                                  <div class="col-sm-5">
                                    <p style="margin-top:15px; padding-bottom:0px;">
                                      <span class="glyphicon glyphicon-calendar"></span>
                                      {{ $meeting->getScheduleDateTime() }}
                                      &nbsp;&nbsp;
                                      <span class="glyphicon glyphicon-time"></span>
                                      {{ $meeting->getTime() }}
                                      &nbsp;&nbsp;&nbsp;&nbsp;
                                      <span class="glyphicon glyphicon-list-alt"></span>
                                      <a href="{{ url('/') }}" class="link-hcn">HCN</a>
                                    </p>
                                  </div>
                                  <div class="col-sm-2">
                                    <p style="margin-top:10px;padding-bottom:0px;">
                                      <button type="button" class="btn btn-primary btn-sm btn-record" style="text-transform:none !important; padding:7px 23px 7px 10px;">
                                          <span class="glyphicon glyphicon-pencil"></span>&nbsp;
                                          Record
                                        </button>
                                    </p>
                                  </div>
                                </div>
                                <hr class="margin1">
                                
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
        <h4 class="modal-title" style="text-transform:none;">
          Rgistro de avance 
        </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          
        </div>
      </div>
      <div class="modal-footer">
        {!! Form::open(array('method' => 'post','class' => 'form-horizontal')) !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="btn_confirmar" class="btn btn-primary">
          <span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;
          Guardar
        </button>
        {!! Form::close() !!}
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
    $('#myModal').modal('show');
  }
</script>
@endsection