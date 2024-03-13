<?php
include_once 'pages/Session_admin/session_admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <link rel="icon" href="../loging/img/logo.png" type="image">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="../CResources/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="../CResources/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="../CResources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link">
      <img src="../CResources/dist/img/logo.png" alt="mobizz Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mobizz - TMS</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../CResources/dist/img/profile.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="fas fa-tasks nav-icon"></i>
                  <p>Task Page</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/Task/task_details.php" class="nav-link">
                    <i class="fas fa-info-circle nav-icon"></i>
                      <p>Tasks Details</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/Task/task_assign.php" class="nav-link">
                    <i class="fas fa-user-plus nav-icon"></i>
                      <p>Task Assign</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="fas fa-user nav-icon"></i>
                  <p>Employee Page</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/Employees/add_employee.php" class="nav-link">
                    <i class="fas fa-user-plus nav-icon"></i>
                      <p>Add Employee</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/Employees/employee_details.php" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                      <p>Employees Details</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/Summary/summary_report.php" class="nav-link">
                <i class="fas fa-chart-bar nav-icon"></i>
                  <p>Summary Page</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">TMS - Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">TMS - Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container-fluid">
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3 id="employeeCount"></h3>
                    <p>Employees</p>
                  </div>
                  <div class="icon">
                      <i class="ion ion-person-add"></i>
                  </div>
                  <a href="pages/Employees/employee_details.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                  <div class="inner">
                      <h3 id="taskCount">0</h3>
                      <p>Tasks</p>
                  </div>
                  <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="pages/Task/task_details.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary">
                  <div class="inner">
                    <h3 id="pendingTaskCount"></h3>
                    <p>Pending Tasks</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-android-alarm-clock"></i>
                  </div>
                  <a href="pages/Task/task_details.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3 id="completedTaskCount"></h3>
                    <p>Completed tasks</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="pages/Task/task_details.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card card-warning">
                      <div class="card-header">
                        <h3 class="card-title">Bar Chart</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                  <section class="col-lg-6 connectedSortable">
                    <div class="card card-danger">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="ion ion-clipboard mr-1"></i>
                          To Do List
                        </h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <ul class="todo-list" data-widget="todo-list">
                          <li>
                            <!-- drag handle -->
                            <span class="handle">
                              <i class="fas fa-ellipsis-v"></i>
                              <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <!-- checkbox -->
                            <div  class="icheck-primary d-inline ml-2">
                              <input type="checkbox" value="" name="todo1" id="todoCheck1">
                              <label for="todoCheck1"></label>
                            </div>
                            <!-- todo text -->
                            <span class="text">Design a nice theme</span>
                            <!-- Emphasis label -->
                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                              <i class="fas fa-edit"></i>
                              <i class="fas fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle">
                              <i class="fas fa-ellipsis-v"></i>
                              <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div  class="icheck-primary d-inline ml-2">
                              <input type="checkbox" value="" name="todo2" id="todoCheck2">
                              <label for="todoCheck2"></label>
                            </div>
                            <span class="text">Make the theme responsive</span>
                            <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                            <div class="tools">
                              <i class="fas fa-edit"></i>
                              <i class="fas fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle">
                              <i class="fas fa-ellipsis-v"></i>
                              <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div  class="icheck-primary d-inline ml-2">
                              <input type="checkbox" value="" name="todo3" id="todoCheck3">
                              <label for="todoCheck3"></label>
                            </div>
                            <span class="text">Let theme shine like a star</span>
                            <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                            <div class="tools">
                              <i class="fas fa-edit"></i>
                              <i class="fas fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle">
                              <i class="fas fa-ellipsis-v"></i>
                              <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div  class="icheck-primary d-inline ml-2">
                              <input type="checkbox" value="" name="todo4" id="todoCheck4">
                              <label for="todoCheck4"></label>
                            </div>
                            <span class="text">Let theme shine like a star</span>
                            <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                            <div class="tools">
                              <i class="fas fa-edit"></i>
                              <i class="fas fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle">
                              <i class="fas fa-ellipsis-v"></i>
                              <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div  class="icheck-primary d-inline ml-2">
                              <input type="checkbox" value="" name="todo5" id="todoCheck5">
                              <label for="todoCheck5"></label>
                            </div>
                            <span class="text">Check your messages and notifications</span>
                            <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                            <div class="tools">
                              <i class="fas fa-edit"></i>
                              <i class="fas fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle">
                              <i class="fas fa-ellipsis-v"></i>
                              <i class="fas fa-ellipsis-v"></i>
                            </span>
                            <div  class="icheck-primary d-inline ml-2">
                              <input type="checkbox" value="" name="todo6" id="todoCheck6">
                              <label for="todoCheck6"></label>
                            </div>
                            <span class="text">Let theme shine like a star</span>
                            <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                            <div class="tools">
                              <i class="fas fa-edit"></i>
                              <i class="fas fa-trash-o"></i>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
    </div>
  </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>

    <footer class="main-footer">
      <strong>Copyright &copy; 2011-2021 <a href="https://Mobizz.lk">Mobizz</a>.</strong>
      All rights reserved.
    </footer>
</div>

<script src="../CResources/plugins/jquery/jquery.min.js"></script>
<script src="../CResources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../CResources/dist/js/adminlte.js"></script>
<script src="../CResources/plugins/chart.js/Chart.min.js"></script>
<script src="../CResources/dist/js/pages/dashboard3.js"></script>
<!-- Add this script inside the head tag of your HTML file -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function () {
    $.ajax({
      url: 'pages/AdminWidget/widget.php',
      type: 'GET',
      dataType: 'json',
      success: function (data) {
          $('#employeeCount').text(data.employeeCount);
          $('#taskCount').text(data.taskCount);
          $('#pendingTaskCount').text(data.pendingTaskCount);
          $('#completedTaskCount').text(data.completedTaskCount);
      },
      error: function (error) {
          console.error('Error fetching data: ', error);
      }
    });
});
</script>
<script>
  $(function () {
    var barChartCanvas = $('#barChart').get(0).getContext('2d');
    var barChartData = {
      labels: ['Complete Tasks', 'Pending Tasks'],
      datasets: [
        {
          label: 'Tasks Comparison',
          backgroundColor: ['#28a745', '#6c757d'],
          borderColor: ['#28a745', '#6c757d'],
          borderWidth: 1,
          data: [0, 0],
        },
      ],
    };

    var barChartOptions = {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [{
          gridLines: {
            display: false,
          },
        }],
        yAxes: [{
          gridLines: {
            display: false,
          },
          ticks: {
            beginAtZero: true,
            stepSize: 1,
          },
        }],
      },
    };

    $.ajax({
      url: 'pages/AdminWidget/widget.php',
      type: 'GET',
      dataType: 'json',
      success: function (data) {
        barChartData.datasets[0].data = [data.completedTaskCount, data.pendingTaskCount];

        new Chart(barChartCanvas, {
          type: 'bar',
          data: barChartData,
          options: barChartOptions,
        });
      },
      error: function (error) {
        console.error('Error fetching data: ', error);
      }
    });
  });
</script>
</body>
</html>
