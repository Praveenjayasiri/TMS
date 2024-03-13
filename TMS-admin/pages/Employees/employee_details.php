<?php
include_once '../Session_admin/session_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee Details</title>

  <link rel="icon" href="../../../loging/img/logo.png" type="image">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="../../../CResources/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="../../../CResources/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


  <!-- DataTables -->
  <link rel="stylesheet" href="../../../CResources/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="../../../CResources/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="../../../CResources/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <style>
    .btn i {
        margin-right: 5px; /* Adjust the spacing between icon and text */
    }

    .btn i,
    .btn span {
        display: inline-block;
        vertical-align: middle;
    }
</style>

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
                <a href="../pages/layout/top-nav.html" class="nav-link">
                <i class="fas fa-tasks nav-icon"></i>
                  <p>Task Page</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../../pages/Task/task_details.php" class="nav-link">
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
                <a href="pages/layout/top-nav.html" class="nav-link active">
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
                    <a href="../../pages/Employees/employee_details.php" class="nav-link active">
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
            <h1 class="m-0">Employee Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee Pages</li>
              <li class="breadcrumb-item active">Employee Details</li>
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
              <div class="card-header">
                <h3 class="card-title">Employee Table with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Employee Identity Number</th>
                    <th>Employee Address</th>
                    <th>Employee Tel Number</th>
                    <th>Employee Designation</th>
                    <th>Employee Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="../../../CResources/plugins/jquery/jquery.min.js"></script>
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
  $(document).ready(function () {
    var dataTable = $('#example1').DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });

    dataTable.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    function loadData() {
      $.ajax({
        url: 'add_employee/fetch_emp_details.php',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
          dataTable.clear();

          $.each(data, function (index, employee) {
            var rowData = [
              employee.id,
              employee.emp_name,
              employee.emp_identity_number,
              employee.emp_address,
              employee.emp_tel_no,
              employee.emp_designation,
              employee.emp_status === 1 ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>',
              '<div class="btn-group" role="group">' +
                '<button class="btn btn-danger btn-sm btn-delete mr-2" data-id="' + employee.id + '"><i class="fas fa-trash-alt"></i></button>' +
                '<button class="btn btn-primary btn-sm btn-update" data-id="' + employee.id + '"><i class="fas fa-pen-alt"></i></button>' +
              '</div>'
            ];

            var row = dataTable.row.add(rowData).draw().node();
          });

          Swal.fire({
            icon: 'success',
            title: 'Data Loaded Successfully!',
            showConfirmButton: false,
            timer: 1500
          });
        },
        error: function (xhr, status, error) {
          console.error('Error fetching data:', error);

          Swal.fire({
            icon: 'error',
            title: 'Error Fetching Data',
            text: 'Please try again later.',
            showConfirmButton: true
          });
        }
      });
    }

    loadData();

    // Handle delete button click
    $('#example1 tbody').on('click', '.btn-delete', function () {
      var row = dataTable.row($(this).closest('tr'));
      var rowData = row.data();
      var employeeId = rowData[0];

      // Check if employee status is already 0 (deleted)
      if (rowData[6].indexOf('badge-danger') !== -1) {
        Swal.fire({
          icon: 'warning',
          title: 'Employee Already Deleted',
          text: 'This employee has already been deleted.',
          showConfirmButton: true
        });
        return;
      }

      Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'add_employee/delete_employee.php',
            method: 'POST',
            data: { id: employeeId },
            success: function (response) {
              try {
                var jsonResponse = JSON.parse(response);

                if (jsonResponse.status === 'success') {
                  Swal.fire({
                    icon: 'success',
                    title: 'Employee Deleted Successfully!',
                    showConfirmButton: false,
                    timer: 1500,
                    willClose: () => {
                      loadData();
                    }
                  });

                } else {
                  Swal.fire({
                    icon: 'error',
                    title: 'Error Deleting Employee',
                    text: jsonResponse.message
                  });
                }
              } catch (e) {
                console.error('Error parsing JSON response:', e);
              }
            },
            error: function () {
              Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An unexpected error occurred.'
              });
            }
          });
        }
      });
    });

    // Handle update button click
    $('#example1 tbody').on('click', '.btn-update', function () {
      var employeeId = $(this).data('id');
      window.location.href = 'update_employee.php?id=' + employeeId;
    });

    $('#hideEmployeeName').on('click', function () {
      var columnIndex = 0;
      var column = dataTable.column(columnIndex);
      column.visible(!column.visible());
    });
  });
</script>
</body>
</html>
