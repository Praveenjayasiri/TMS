<?php
include_once '../Session_employee/session_employee.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee | Dashboard</title>

  <link rel="icon" href="../../../loging/img/logo.png" type="image">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="../../../CResources/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="../../../CResources/dist/css/adminlte.min.css">


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
          <?php
          // Assuming emp_id is stored in the session
          $empId = $_SESSION['emp_id'];
          echo '<a href="../Employees/employee_details.php" class="d-block">Employee ID: ' . $empId . '</a>';
          ?>
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
                <a href="../pages/layout/top-nav.html" class="nav-link">
                <i class="fas fa-tasks nav-icon"></i>
                  <p>Task Page</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../pages/Task/task_details.php" class="nav-link" >
                    <i class="fas fa-info-circle nav-icon"></i>
                      <p>Tasks Details</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../pages/Employees/employee_details.php" class="nav-link active">
                <i class="fas fa-user nav-icon"></i>
                  <p>My Details</p>
                </a>
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
            <h1 class="m-0">My Employee Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee Pages</li>
              <li class="breadcrumb-item active">My Employee Details</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="empid">Employee ID</label>
                      <input type="text" class="form-control" name="empid" id="empid" disabled>
                    </div>
                    <div class="form-group col-6">
                      <label for="empname">Employee Name</label>
                      <input type="text" class="form-control" name="empname" id="empname" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="empidnum">National Identity Number</label>
                      <input type="text" class="form-control" name="empidnum" id="empidnum" disabled>
                    </div>
                    <div class="form-group col-6">
                      <label for="empaddress">Employee Address</label>
                      <input type="text" class="form-control" name="empaddress" id="empaddress" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="emptelno">Employee Tel Number</label>
                      <input type="text" class="form-control" name="emptelno" id="emptelno" disabled>
                    </div>
                    <div class="form-group col-6">
                      <label for="empdesignation">Employee Designation</label>
                      <input type="text" class="form-control" name="empdesignation" id="empdesignation" disabled>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="empstatus">Employee Status</label>
                      <input type="text" class="form-control" name="empstatus" id="empstatus" disabled>
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
<script src="../../../CResources/plugins/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Bootstrap 4 -->
<script src="../../../CResources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
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
<!-- Page specific script -->
<script>
  var emp_id = <?php echo json_encode($_SESSION['emp_id']); ?>;
  fetchData(emp_id);

  function fetchData(emp_id) {
    $.ajax({
      url: 'fetch_employee_details.php',
      method: 'GET',
      data: { emp_id: emp_id },
      dataType: 'json',
      success: function (response) {
        console.log(response);
        if (!$.isEmptyObject(response)) {
            $('#empid').val(response.id).prop('disabled', true);
            $('#empname').val(response.emp_name).prop('disabled', true);
            $('#empidnum').val(response.emp_identity_number).prop('disabled', true);
            $('#empaddress').val(response.emp_address).prop('disabled', true);
            $('#emptelno').val(response.emp_tel_no).prop('disabled', true);
            $('#empdesignation').val(response.emp_designation).prop('disabled', true);
            $('#empstatus').val(response.emp_status === 1 ? 'Active' : 'Inactive').prop('disabled', true);

            // Show success SweetAlert
            Swal.fire({
              icon: 'success',
              title: 'Employee Details Loaded Successfully!',
              showConfirmButton: false,
              timer: 1500
            });
        } else {
          console.log('Employee details not found');
          Swal.fire({
            icon: 'error',
            title: 'Error Loading Employee Details',
            text: 'Employee details not found',
            showConfirmButton: true
          });
        }
      },
      error: function (xhr, status, error) {
        console.log(error);
        Swal.fire({
          icon: 'error',
          title: 'Error Loading Employee Details',
          text: error,
          showConfirmButton: true
        });
      }
    });
  }
  </script>
</body>
</html>
