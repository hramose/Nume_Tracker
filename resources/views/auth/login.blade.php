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

#subtitulo{
	text-transform: none !important;
	font-size: 1.5em;
}

#text-icon{
  padding:0px 15px 0px 15px;
}

#input-photo{
  padding-top:40px;
}

#photo{
  width:100px;
  height:100px;
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
            <div class="col-sm-offset-2 col-sm-8">
				<h3 id="subtitulo">Bienvenid@ !</h3>
				<div class="tabbable-panel">
					<div class="tabbable-line">
						<ul class="nav nav-tabs ">
							<li class="active">
								<a href="#tab_default_1" data-toggle="tab">Iniciar sesión</a>
							</li>
						</ul>
						<div class="tab-content">
			                @if (count($errors) > 0)
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
								{!! Form::open(array('method' => 'post','class' => 'form-horizontal')) !!}
									<br>
									<div class="form-group">
										{!! Form::label(null,'Correo electrónico: ',array('class' => 'col-sm-4 control-label')) !!}
										<div class="input-group col-sm-6" id="text-icon">
											<span class="input-group-addon">@</span>
											{!! Form::email('email',null,array('class' => 'form-control')) !!}
										</div>
									</div>
									<div class="form-group">
										{!! Form::label(null,'Contraseña: ',array('class' => 'col-sm-4 control-label')) !!}
										<div class="col-sm-6">
											{!! Form::password('password',array('class' => 'form-control')) !!}
										</div>
									</div>
									<br>
									<div class="form-group">
										<label class="col-sm-4 control-label" for="formGroup"></label>
										<div class="col-sm-8">
											<button type="submit" class="btn btn-success btn-lg">
												<span class="glyphicon glyphicon-ok"></span> Entrar
											</button>
											<a style="margin-left:15px;" href="{{ url('registro') }}">Quiero&nbsp;registrarme</a>
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