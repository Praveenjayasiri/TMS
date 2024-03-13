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
                    <a href="../../pages/Task/task_details.php" class="nav-link">
                    <i class="fas fa-info-circle nav-icon"></i>
                      <p>Tasks Details</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/Task/task_assign.php" class="nav-link active">
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
            <h1 class="m-0">Task Assign</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Task Pages</li>
              <li class="breadcrumb-item active">Task Assign</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                  <h3 class="card-title">Quick Example</h3>
              </div>
              <form id="add-task" action="add_task/add_task_process.php" method="post">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="employeeId">Employee ID</label>
                      <input type="text" class="form-control" id="employeeId" name="employeeId" placeholder="Enter employee id" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="taskID">Task ID</label>
                      <input type="text" class="form-control" id="taskID" name="taskID" placeholder="Enter task ID" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" id="date" name="date" placeholder="mm/dd/yyyy" required>
                    </div>
                    <div class="form-group col-6">
                      <label for="location">Location</label>
                      <input type="text" class="form-control" id="location" name="location" placeholder="Enter location" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="workDescription">Work Description</label>
                      <textarea type="text" class="form-control" id="workDescription" name="workDescription" placeholder="Enter work description" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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

<script src="../../../CResources/plugins/jquery/jquery.min.js"></script>
<script src="../../../CResources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../CResources/dist/js/adminlte.js"></script>
<script src="../../../CResources/dist/js/pages/dashboard3.js"></script>
<script src="../../../CResources/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
  $("#add-task").submit(function (event) {
    event.preventDefault(); // Prevent the default form submission

    // AJAX Form Submission
    $.ajax({
      type: "POST",
      url: "add_task/task_assign_process.php",
      data: $("#add-task").serialize(), // Serialize the form data
      dataType: 'json', // Expect JSON response
      success: function (response) {
        if (response.status === 'success') {
          // Show success message using SweetAlert2
          Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: response.message, // Display the message from the server
          }).then((result) => {
            // Reset the form if the user clicks "OK"
            if (result.isConfirmed || result.isDismissed) {
              $('#add-task')[0].reset();
            }
          });
        } else {
          // Show error message using SweetAlert2
          Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: response.message,
          });
        }
      },
      error: function (xhr, status, error) {
        // Handle errors if needed
        Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: 'An error occurred while processing the request.',
        });
      }
    });
  });
</script>

</body>
</html>
