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

.meeting_item .link-cancelar:hover{
  color:red !important;
  text-decoration: none;
  transform: scale(1.05);
}

.trash span:hover{
  color:red!important;
}

.pencil span:hover{
  color:blue!important;
}


</style>
@endsection

@section('menu')
<div class="container-fluid">
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
                                    &nbsp;&nbsp;&nbsp;&nbsp;Usuarios registrados&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </li>
                            {!! Form::model(Request::all(),['url' => 'admon-usuarios','method' => 'GET','class' => 'navbar-form navbar-left pull-right','role' => 'search'])!!}
                              <div class="form-group">
                                {!! Form::text('nombre',null,['class' => 'form-control','placeholder' => 'Buscar por nombre','style'=>'height:34px;padding:8px 14px 8px 14px;border-radius:4px;']) !!}
                                {!! Form::select('rol',['paciente'=>'Paciente','nutriologo'=>'Nutriólogo'],null,['class'=>'form-control','placeholder'=>'Rol'])!!}
                                {!! Form::select('orden',['id_asc'=>'ID asc','id_desc'=>'ID desc','nombre_asc' =>'Nombre A-Z','nombre_desc' => 'Nombre Z-A','email_asc' =>'E-mail A-Z','email_desc' => 'E-mail Z-A'],null,['class'=>'form-control','placeholder'=>'Ordenar ...'])!!}
                              </div>
                              <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                              </button>
                            {!! Form::close() !!}
                        </ul>
                        <br>
                        <div class="tab-content">
                            @if(session('success'))
                            <div class="alert alert-success">
                              <span class="glyphicon glyphicon-ok"></span>
                              &nbsp;&nbsp;&nbsp;{{ session('success') }}
                            </div>
                            @endif
                            <div class="tab-pane active" id="tab_default_1">
                                @foreach ($users as $user)
                                <div class="row meeting_item">
                                  <div class="col-sm-1" style="padding:0px;">
                                    @if($user->role == 'nutritionist')
                                    <a href="{{ url('nutriologo-p/'.$user->id) }}" class="thumbnail">
                                    @else
                                    <a href="{{ url('paciente/'.$user->id ) }}" class="thumbnail">
                                    @endif
                                      @if($user->photo == '')
                                      <img src="{{ asset('assets/images/base/no-photo.png') }}" alt="" class="img-responsive img-circle img-thumbnail photo">
                                      @else
                                      <img src="{{ asset('storage/'.$user->photo) }}" alt="" class="img-responsive img-circle img-thumbnail photo">
                                      @endif
                                    </a>
                                  </div>
                                  <div class="col-sm-3">
                                      <h4 style="text-transform:none !important; color:#333; font-size:15px;margin-top:15px;">
                                        @if($user->role == 'nutritionist')
                                        <a href="{{ url('nutriologo-p/'.$user->id) }}">
                                        @else
                                        <a href="{{ url('paciente/'.$user->id) }}">
                                        @endif
                                          <strong>ID: </strong>{{ $user->id }}
                                          &nbsp;&nbsp;{{ $user->getCompleteName() }}
                                        </a>
                                      </h4>
                                  </div>
                                  <div class="col-sm-4">
                                    <p style="margin-top:15px; padding-bottom:0px;">
                                      <span class="glyphicon glyphicon-envelope"></span>
                                      <a href="{{ url('mailto:'.$user->email) }}">{{ $user->email }}</a>
                                    </p>
                                  </div>
                                  <div class="col-sm-2">
                                    <p style="margin-top:15px; padding-bottom:0px;">
                                      <strong>Rol: </strong>
                                      @if( $user->role == 'patient' )
                                      Paciente
                                      @else
                                      Nutriólogo
                                      @endif
                                    </p>
                                  </div>
                                  <div class="col-sm-1">
                                    <p style="margin-top:13px;padding-bottom:0px;font-size:20px;">
                                      @if($user->role == 'nutritionist')
                                      <a href="{{ url('nutriologo-p/'.$user->id) }}" class="pencil">
                                      @else
                                      <a href="{{ url('paciente/'.$user->id) }}" class="pencil">
                                      @endif
                                          <span class="glyphicon glyphicon-pencil"></span>
                                      </a>
                                    </p>
                                  </div>
                                  <div class="col-sm-1">
                                    <p style="margin-top:13px;padding-bottom:0px;font-size:20px;">
                                      <a class="trash" data-id="{{ $user->id }}" data-name="{{ $user->getCompleteName() }}" data-email="{{ $user->email }}">
                                          <span class="glyphicon glyphicon-trash"></span>
                                      </a>
                                    </p>
                                  </div>
                                </div>
                                <hr class="margin1">
                                @endforeach

                                <div class="row">
                                  <div class="col-sm-12" style="text-align:center;">
                                    {!! $users->setPath('')->appends(Request::only(['nombre','rol','orden']))->render() !!}
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-transform:none;">
          Eliminación de Usuario
        </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4">
            <img src="{{ asset('assets/images/base/delete-user.png') }}" alt="" class="img-responsive center-block">
          </div>
          <div class="col-sm-8">
            <p style="line-height:25px;">
              <strong>¿Seguro que desea dar de baja al siguiente usuario?</strong>
              <br>
              <br>
              &nbsp;<strong>ID : </strong>
              <span id="id-delete"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <br>
              &nbsp;<strong>Nombre : </strong>
              <span id="name-delete"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <br>
              &nbsp;<strong>E-mail : </strong>
              <span class="glyphicon glyphicon-envelope"></span>
              &nbsp;<span id="email-delete"></span>
              <br>
            </p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        {!! Form::open(array('method' => 'post','class' => 'form-horizontal')) !!}
        <input name="user_id" type="hidden" id="subject-id" value="">
        <input name="name" type="hidden" id="subject-name" value="">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="btn_confirmar" class="btn btn-primary">Confirmar</button>
        {!! Form::close() !!}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('.trash').click(confirmationModal);
  });

  function confirmationModal() {
    $('#id-delete').html($(this).attr('data-id'));
    $('#name-delete').html($(this).attr('data-name'));
    $('#email-delete').html($(this).attr('data-email'));
    $('#subject-id').attr('value',$(this).attr('data-id'));
    $('#subject-name').attr('value',$(this).attr('data-name'));
    $('#myModal').modal('show');
  }
</script>
@endsection