<?php
include_once '../Session_admin/session_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <link rel="icon" href="../../../loging/img/logo.png" type="image">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="../../../CResources/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="../../../CResources/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../../CResources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="../../../CResources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="../../../CResources/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


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
        <a class="nav-link" href="#" role="button" id="dark-mode-toggle">
          <i class="fas fa-moon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../../logout.php" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../../index.php" class="brand-link">
      <img src="../../../CResources/dist/img/logo.png" alt="mobizz Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mobizz - TMS</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../CResources/dist/img/profile.png" class="img-circle elevation-2" alt="User Image">
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
                <a href="../pages/layout/top-nav.html" class="nav-link active">
                <i class="fas fa-tasks nav-icon"></i>
                  <p>Task Page</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../pages/Task/task_details.php" class="nav-link active" >
                    <i class="fas fa-info-circle nav-icon"></i>
                      <p>Tasks Details</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/Task/task_assign.php" class="nav-link">
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
                    <a href="../../pages/Employees/add_employee.php" class="nav-link">
                    <i class="fas fa-user-plus nav-icon"></i>
                      <p>Add Employee</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/Employees/employee_details.php" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                      <p>Employees Details</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../pages/Summary/summary_report.php" class="nav-link">
                <i class="fas fa-chart-bar nav-icon"></i>
                  <p>Summary Report</p>
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
            <h1 class="m-0">Selected Task Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Task Pages</li>
              <li class="breadcrumb-item active">Selected Task Details</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="form-group col-4">
                        <label for="empid">Employee ID</label>
                        <input type="text" class="form-control" name="empid" id="empid" disabled>
                    </div>
                    <div class="form-group col-4">
                        <label for="empname">Employee Name</label>
                        <input type="text" class="form-control" name="empname" id="empname" disabled>
                    </div>
                    <div class="form-group col-4">
                        <label for="emptelnum">Employee Telephone Number</label>
                        <input type="text" class="form-control" name="emptelnum" id="emptelnum" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-4">
                        <label for="taskid">Task ID</label>
                        <input type="text" class="form-control" name="taskid" id="taskid" disabled>
                    </div>
                    <div class="form-group col-4">
                        <label for="taskdate">Task Date</label>
                        <input type="text" class="form-control" name="taskdate" id="taskdate" disabled>
                    </div>
                    <div class="form-group col-4">
                        <label for="tasklocation">Task Location</label>
                        <input type="text" class="form-control" name="tasklocation" id="tasklocation" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-4">
                        <label for="taskdescription">Task Description</label>
                        <input type="text" class="form-control" name="taskdescription" id="taskdescription" disabled>
                    </div>
                    <div class="form-group col-4">
                        <label for="checkin">Check IN</label>
                        <input type="text" class="form-control" name="checkin" id="checkin" disabled>
                    </div>
                    <div class="form-group col-4">
                    <label for="inlocation">IN Location</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="inlocation" id="inlocation" disabled>
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary show-map-btn" type="button">
                          <i class="fas fa-map-marker-alt" id="map-in-icon"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-4">
                        <label for="checkout">Check OUT</label>
                        <input type="text" class="form-control" name="checkout" id="checkout" disabled>
                    </div>
                    <div class="form-group col-4">
                      <label for="outlocation">Out Location</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="outlocation" id="outlocation" disabled>
                        <div class="input-group-append">
                        <button class="btn btn-outline-danger show-map-btn" type="button">
                          <i class="fas fa-map-marker-alt" id="map-out-icon"></i>
                        </button>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-4">
                        <label for="taskstatus">Task Status</label>
                        <input type="text" class="form-control" name="taskstatus" id="taskstatus" disabled>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <aside class="control-sidebar control-sidebar-dark"></aside>

  <footer class="main-footer">
    <strong>Copyright &copy; 2011-2021 <a href="https://Mobizz.lk">Mobizz</a>.</strong>
    All rights reserved.
  </footer>
</div>

<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="../../../CResources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../CResources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables & Plugins -->
<script src="../../../CResources/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../CResources/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../CResources/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../CResources/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../CResources/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../CResources/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../CResources/plugins/jszip/jszip.min.js"></script>
<script src="../../../CResources/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../CResources/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../CResources/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../CResources/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../CResources/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../CResources/dist/js/adminlte.min.js"></script>
<script>
$(document).ready(function () {
  // Function to fetch data and populate form fields
  function fetchData(rowId) {
    $.ajax({
      url: 'add_task/fetch_selected_task_details.php',
      method: 'GET',
      data: { rowId: rowId },
      dataType: 'json',
      success: function (response) {
        console.log(response);
        if (!$.isEmptyObject(response)) {
          $('#empid').val(response.emp_id).prop('disabled', true);
          $('#empname').val(response.emp_name).prop('disabled', true);
          $('#emptelnum').val(response.emp_tel_no).prop('disabled', true);
          $('#taskid').val(response.task_id).prop('disabled', true);
          $('#taskdate').val(response.date).prop('disabled', true);
          $('#tasklocation').val(response.location).prop('disabled', true);
          $('#taskdescription').val(response.task_description).prop('disabled', true);
          $('#checkin').val(response.check_in).prop('disabled', true);
          $('#inlocation').val(response.lat_in + ', ' + response.lng_in).prop('disabled', true);
          $('#checkout').val(response.check_out).prop('disabled', true);
          $('#outlocation').val(response.lat_out + ', ' + response.lng_out).prop('disabled', true);
          $('#taskstatus').val(response.task_status === 1 ? 'Pending' : 'Completed').prop('disabled', true);
          // Show success SweetAlert
          Swal.fire({
            icon: 'success',
            title: 'Task Details Loaded Successfully!',
            showConfirmButton: false,
            timer: 1500
          });
        } else {
          console.log('Task not started');
          Swal.fire({
            icon: 'warning',
            title: 'Task Not Completed',
            text: 'The task has not been Completed.',
            showConfirmButton: true,
            confirmButtonText: 'Go Back',
          }).then((result) => {
            if (result.isConfirmed) {
              window.history.back();
            }
          });
        }
      },
      error: function (xhr, status, error) {
        console.log(error);
        Swal.fire({
          icon: 'error',
          title: 'Error Loading Task Details',
          text: error,
          showConfirmButton: true
        });
      }
    });
  }

  // Get the rowId from the URL parameter
  var urlParams = new URLSearchParams(window.location.search);
  var rowId = urlParams.get('rowId');

  fetchData(rowId);
});
  // Add an event listener to the map icon
  document.getElementById('map-in-icon').addEventListener('click', function() {
    // Extract latitude and longitude values from inlocation input
    var inlocation = $('#inlocation').val();
    var lat_in = inlocation.split(', ')[0];
    var lng_in = inlocation.split(', ')[1];

    // Redirect to the show_check_in page with query parameters
    window.location.href = 'show_check_in.php?lat=' + lat_in + '&lng=' + lng_in;
  });

  document.getElementById('map-out-icon').addEventListener('click', function() {
    // Extract latitude and longitude values from outlocation input
    var outlocation = $('#outlocation').val();
    var lat_out = outlocation.split(', ')[0];
    var lng_out = outlocation.split(', ')[1];

    // Redirect to the show_check_out page with query parameters
    window.location.href = 'show_check_out.php?lat=' + lat_out + '&lng=' + lng_out;
  });
</script>
</body>
</html>
