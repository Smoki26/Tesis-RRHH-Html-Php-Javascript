
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../views/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../views/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
  
  <!-- Navbar -->
  <div id="encabezado"></div>
  <!-- /.navbar -->
  
  <div id="sidebar"></div>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <?php
                $row_cal = $arr_cal->fetch_assoc();
                $row_est = $arr_est->fetch_assoc();
                $row_hab_b_p = $arr_hab_b_promedio->fetch_assoc();
                $row_hab_d_p = $arr_hab_d_promedio->fetch_assoc();
                $row_hab_b_pu_pro = $arr_hab_b_pu_prom->fetch_assoc();
                $row_hab_d_pu_pro = $arr_hab_d_pu_prom->fetch_assoc();
                ?>

                  

                 

                  <?php 
                  $namesb = [];
                  while ($row_hab_b_map = $arr_hab_b_map->fetch_assoc()) { 
                      $namesb[] = $row_hab_b_map['nombre_habilidad']; 
                  }

                  $javaScriptArrayHBMap = json_encode($namesb);

                  $namesd = [];
                  while ($row_hab_d_map = $arr_hab_d_map->fetch_assoc()) { 
                      $namesd[] = $row_hab_d_map['nombre_habilidad']; 
                  }

                  $javaScriptArrayHDMap = json_encode($namesd);
                 
                 
                  ?>


<div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Area Chart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Donut Chart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Pie Chart</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Bar Chart</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                     
                        <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Area Chart</h3>

                                    <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                    <canvas id="areaChart_blanda" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                        <!-- /.card-body -->
                        </div>

                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                     
                    <!-- DONUT CHART -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Donut Chart</h3>

                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        <!-- /.card-body -->
                        </div>

                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">

                                <!-- PIE CHART -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Pie Chart</h3>

                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        <!-- /.card-body -->
                        </div>

                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                     
                                <!-- BAR CHART -->
                        <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Bar Chart</h3>

                                    <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                        <!-- /.card-body -->
                        </div>

                  </div>
                </div>
              </div>

              
              <!-- /.card -->
            </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div id="footer"></div>
  
  </div>
  <!-- ./wrapper -->
  
  <!-- REQUIRED SCRIPTS -->
  
  <!-- jQuery -->
  <script src="../views/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- ChartJS -->
<script src="../views/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../views/dist/js/adminlte.min.js"></script>

<script src="../views/js/tools.js"></script>

<!--
<script type="text/javascript" src="../views/js/graph.js"></script>
-->


<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas_blanda = $('#areaChart_blanda').get(0).getContext('2d')
    var arbmap= <?php echo $javaScriptArrayHBMap; ?>;

    var areaChartData_blanda = {
      labels  : arbmap,
      datasets: [
        {
          label               : 'Hab blandas Personal Prom',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : 
          [

          <?php echo number_format($row_hab_b_p['h1'], 1); ?>,
          <?php echo number_format($row_hab_b_p['h2'], 1); ?>,
          <?php echo number_format($row_hab_b_p['h3'], 1); ?>,
          <?php echo number_format($row_hab_b_p['h4'], 1); ?>,
          <?php echo number_format($row_hab_b_p['h5'], 1); ?>,
          <?php echo number_format($row_hab_b_p['h6'], 1); ?>,
          <?php echo number_format($row_hab_b_p['h7'], 1); ?>,
          <?php echo number_format($row_hab_b_p['h8'], 1); ?>,
          <?php echo number_format($row_hab_b_p['h9'], 1); ?>,
          <?php echo number_format($row_hab_b_p['h10'], 1); ?>

          ]
        },
        {
          label               : 'Hab Blandas Puestos Prom',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :
          [
          <?php echo number_format($row_hab_b_pu_pro['h1'], 1); ?>,
          <?php echo number_format($row_hab_b_pu_pro['h2'], 1); ?>,
          <?php echo number_format($row_hab_b_pu_pro['h3'], 1); ?>,
          <?php echo number_format($row_hab_b_pu_pro['h4'], 1); ?>,
          <?php echo number_format($row_hab_b_pu_pro['h5'], 1); ?>,
          <?php echo number_format($row_hab_b_pu_pro['h6'], 1); ?>,
          <?php echo number_format($row_hab_b_pu_pro['h7'], 1); ?>,
          <?php echo number_format($row_hab_b_pu_pro['h8'], 1); ?>,
          <?php echo number_format($row_hab_b_pu_pro['h9'], 1); ?>,
          <?php echo number_format($row_hab_b_pu_pro['h10'], 1); ?>
          ]
        },
      ]
    }

    var areaChartOptions = {

      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
            ticks: {
                suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                // OR //
                beginAtZero: true   // minimum value will be 0.
            }
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas_blanda, {
      type: 'line',
      data: areaChartData_blanda,
      options: areaChartOptions,

    })

    //-------------
    //- LINE CHART -
    //--------------
/*
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })
*/
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')

    var donutData        = {
      labels: [
          'puntualidad',
          'compañerismo',
          'presentacion_personal',
          'cumplimiento_normas',
          'aplicacion_procesos',
          'responsabilidad',
          'iniciativa',
      ],
      datasets: [
        {
          data: [

          <?php echo number_format($row_cal['puntualidad'], 2); ?>,
          <?php echo number_format($row_cal['compañerismo'], 2); ?>,
          <?php echo number_format($row_cal['presentacion_personal'], 2); ?>,
          <?php echo number_format($row_cal['cumplimiento_normas'], 2); ?>,
          <?php echo number_format($row_cal['aplicacion_procesos'], 2); ?>,
          <?php echo number_format($row_cal['responsabilidad'], 2); ?>,
          <?php echo number_format($row_cal['iniciativa'], 2); ?>
          ],
          backgroundColor : ['#f16054','#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')


    var pieData        = {
      labels: [
          'primario',
          'secundario',
          'terciario o universitario'
          
      ],
      datasets: [
        {
          data: [

          
          <?php echo 100*(number_format($row_est['primario'], 2)); ?>,
          <?php echo 100*(number_format($row_est['secundario'], 2)); ?>,
          <?php echo 100*(number_format($row_est['terciario_universitario'], 2)); ?>
          ],
          backgroundColor : ['#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }

    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    
    var ardmap= <?php echo $javaScriptArrayHDMap; ?>;
    
    var barChartData = {
      labels  : ardmap,
      datasets: [
        {
          label               : 'Hab Duras Personal Prom',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : 
          [

          <?php echo number_format($row_hab_d_p['h11'], 1); ?>,
          <?php echo number_format($row_hab_d_p['h12'], 1); ?>,
          <?php echo number_format($row_hab_d_p['h13'], 1); ?>,
          <?php echo number_format($row_hab_d_p['h14'], 1); ?>,
          <?php echo number_format($row_hab_d_p['h15'], 1); ?>,
          <?php echo number_format($row_hab_d_p['h16'], 1); ?>,
          <?php echo number_format($row_hab_d_p['h17'], 1); ?>,
          <?php echo number_format($row_hab_d_p['h18'], 1); ?>,
          <?php echo number_format($row_hab_d_p['h19'], 1); ?>,
          <?php echo number_format($row_hab_d_p['h20'], 1); ?>

          ]
        },
        {
          label               : 'Hab duras Puestos Prom',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                :
          [
          <?php echo number_format($row_hab_d_pu_pro['h11'], 1); ?>,
          <?php echo number_format($row_hab_d_pu_pro['h12'], 1); ?>,
          <?php echo number_format($row_hab_d_pu_pro['h13'], 1); ?>,
          <?php echo number_format($row_hab_d_pu_pro['h14'], 1); ?>,
          <?php echo number_format($row_hab_d_pu_pro['h15'], 1); ?>,
          <?php echo number_format($row_hab_d_pu_pro['h16'], 1); ?>,
          <?php echo number_format($row_hab_d_pu_pro['h17'], 1); ?>,
          <?php echo number_format($row_hab_d_pu_pro['h18'], 1); ?>,
          <?php echo number_format($row_hab_d_pu_pro['h19'], 1); ?>,
          <?php echo number_format($row_hab_d_pu_pro['h20'], 1); ?>
          ]
        },
      ]
    }

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    /*
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
    */
  })
</script>

</body>
</html>




