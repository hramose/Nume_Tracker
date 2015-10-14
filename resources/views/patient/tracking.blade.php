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
#ant-file{
  border:1px solid #adadad;
  border-radius: 7px;
  opacity: .7;
  padding-top: 20px;
  padding-bottom: 10px;
}
#ant-file p{
  font-size: 14px;
  margin-bottom: 0px;
}

#ant-file .icon{
  width: 20px;
  height: 20px;
}

.body-img{
  width: 160px;
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
                            <li class="active">
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
                                    &nbsp;&nbsp;&nbsp;&nbsp;Estadística&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </li>
                        </ul>
                        <br>
                        <div class="tab-content">
                            @if(session('warning'))
                            <div class="alert alert-warning">
                              <span class="glyphicon glyphicon-warning-sign"></span>
                              &nbsp;&nbsp;&nbsp;{{ session('warning') }}
                            </div>
                            @endif
                            <div class="tab-pane active" id="tab_default_1">
                              <h4 style="text-transform:none;margin-left:10px;">
                                Ficha antropométrica - Estado actual
                              </h4>
                              <br>
                              <div class="row" id="ant-file">
                                <div class="col-sm-3">
                                  <img class="img-responsive center-block body-img" src="{{ asset('assets/images/base/body.png') }}" alt="">
                                </div>
                                <div class="col-sm-4">
                                  <p>
                                    <img class="icon" src="{{ asset('assets/images/base/weight.png') }}" alt="">
                                    &nbsp;&nbsp;<strong><i>Peso : </i></strong> {{ $last_meeting->weight }} (kg)
                                  </p>
                                  <p>
                                    <img class="icon" src="{{ asset('assets/images/base/height.png') }}" alt="">
                                    &nbsp;&nbsp;<strong><i>Altura : </i></strong> {{ ($last_meeting->height/100) }} (m)
                                  </p>
                                  <p>
                                    <img class="icon" src="{{ asset('assets/images/base/waist.png') }}" alt="">
                                    &nbsp;&nbsp;<strong><i>Cintura : </i></strong> {{ $last_meeting->waist }} (cm)
                                  </p>
                                  <p>
                                    <img class="icon" src="{{ asset('assets/images/base/hip.png') }}" alt="">
                                    &nbsp;&nbsp;<strong><i>Cadera : </i></strong> {{ $last_meeting->hip }} (cm)
                                  </p>
                                  <p>
                                    <img class="icon" src="{{ asset('assets/images/base/arm-perimeter.png') }}" alt="">
                                    &nbsp;&nbsp;<strong><i>Perímetro del brazo : </i></strong> {{ $last_meeting->arm_perimeter }} (cm)
                                  </p>
                                </div>
                                <div class="col-sm-4">
                                  <p>
                                    <img class="icon" src="{{ asset('assets/images/base/btcipital.png') }}" alt="">
                                    &nbsp;&nbsp;<strong><i>Pliegue bicipital : </i></strong> {{ $last_meeting->bicipital }} (mm)
                                  </p>
                                  <p>
                                    <img class="icon" src="{{ asset('assets/images/base/btcipital.png') }}" alt="">
                                    &nbsp;&nbsp;<strong><i>Pliegue tricipital : </i></strong> {{ $last_meeting->tricipital }} (mm)
                                  </p>
                                  <p>
                                    <img class="icon" src="{{ asset('assets/images/base/bmi.png') }}" alt="">
                                    &nbsp;&nbsp;<strong><i>IMC : </i></strong> {{ $last_meeting->bmi }} (mm)
                                  </p>
                                  <p>
                                    <img class="icon" src="{{ asset('assets/images/base/ideal-weight.png') }}" alt="">
                                    &nbsp;&nbsp;<strong><i>Peso ideal : </i></strong> {{ $last_meeting->ideal_weight }} (mm)
                                  </p>
                                  <p>
                                    <img class="icon" src="{{ asset('assets/images/base/date.png') }}" alt="">
                                    &nbsp;&nbsp;<strong><i>Último registro : </i></strong> {{ date('d/m/Y',strtotime($last_meeting->date_time)) }}
                                  </p>
                                </div>
                              </div>
                              <br>
                              <br>
                              <h4 style="text-transform:none;margin-left:10px;">
                                Gráfico de progreso - 5 citas mas recientes
                              </h4>
                              <br>
                              <div class="row">
                                <div class="col-sm-12">
                                  {!! Html::script('assets/js/Chart.js') !!}
                                  <div id="canvas-holder">
                                      <canvas id="chart-area" width="600" height="300"></canvas>
                                  </div>
                                  <script type="text/javascript">
                                    var lineChartData = {
                                            labels : <?php echo json_encode($labels); ?>,
                                            datasets : [
                                              {
                                                label: "Peso",
                                                fillColor : "rgba(220,220,220,0.2)",
                                                strokeColor : "#6b9dfa",
                                                pointColor : "#1e45d7",
                                                pointStrokeColor : "#fff",
                                                pointHighlightFill : "#fff",
                                                pointHighlightStroke : "rgba(220,220,220,1)",
                                                data : <?php echo json_encode($weights); ?>
                                              },
                                              {
                                                label: "IMC",
                                                fillColor : "rgba(151,187,205,0.2)",
                                                strokeColor : "#e9e225",
                                                pointColor : "#faab12",
                                                pointStrokeColor : "#fff",
                                                pointHighlightFill : "#fff",
                                                pointHighlightStroke : "rgba(151,187,205,1)",
                                                data : <?php echo json_encode($bmis); ?>
                                              },
                                              {
                                                label: "Cintura",
                                                fillColor : "rgba(220,220,220,0.2)",
                                                strokeColor : "rgba(172,220,60,1)",
                                                pointColor : "#1e45d7",
                                                pointStrokeColor : "#fff",
                                                pointHighlightFill : "#fff",
                                                pointHighlightStroke : "rgba(220,220,220,1)",
                                                data : <?php echo json_encode($waists); ?>
                                              },
                                              {
                                                label: "Cadera",
                                                fillColor : "rgba(151,187,205,0.2)",
                                                strokeColor : "#e9e225",
                                                pointColor : "#faab12",
                                                pointStrokeColor : "#fff",
                                                pointHighlightFill : "#fff",
                                                pointHighlightStroke : "rgba(151,187,205,1)",
                                                data : <?php echo json_encode($hips); ?>
                                              }
                                            ]
                                        }
                                    var ctx = document.getElementById("chart-area").getContext("2d");
                                    window.myPie = new Chart(ctx).Line(lineChartData, {responsive:true});
                                  </script>
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