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

  <link rel="stylesheet" href="../../../CResources/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

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
                    <a href="../../pages/Employees/add_employee.php" class="nav-link active">
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
            <h1 class="m-0">Add Employees</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employees Pages</li>
              <li class="breadcrumb-item active">Add Employees</li>
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
              <form id="add-employees" method="post" action="add_employee/add_employee_process.php" onsubmit="return validateForm()">
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="employeeName">Employee Name</label>
                      <input type="text" class="form-control" id="employeeName" name="employeeName" placeholder="Enter employee name" required>
                      <span id="employeeNameError" class="text-danger"></span>
                    </div>
                    <div class="form-group col-6">
                      <label for="employeeID">Employee ID</label>
                      <input type="text" class="form-control" id="employeeID" name="employeeID" placeholder="Enter employee ID" required>
                      <span id="employeeIDError" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="employeeEmail">Employee Email</label>
                      <input type="email" class="form-control" id="employeeEmail" name="employeeEmail" placeholder="Enter employee email" required>
                      <span id="employeeEmailError" class="text-danger"></span>
                    </div>
                    <div class="form-group col-6">
                      <label for="identityNumber">Identity Number</label>
                      <input type="text" class="form-control" id="identityNumber" name="identityNumber" placeholder="Enter identity number" required>
                      <span id="identityNumberError" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="employeeAddress">Employee Address</label>
                      <input type="text" class="form-control" id="employeeAddress" name="employeeAddress" placeholder="Enter employee address" required>
                      <span id="employeeAddressError" class="text-danger"></span>
                    </div>
                    <div class="form-group col-6">
                      <label for="telephoneNumber">Telephone Number</label>
                      <input type="tel" class="form-control" id="telephoneNumber" name="telephoneNumber" placeholder="Enter telephone number" required>
                      <span id="telephoneNumberError" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="designation">Designation</label>
                      <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter employee designation" required>
                      <span id="designationError" class="text-danger"></span>
                    </div>
                    <div class="form-group col-6">
                      <label for="employeePassword">Employee Password</label>
                      <input type="password" class="form-control" id="employeePassword" name="employeePassword" placeholder="Enter employee password" required>
                      <span id="employeePasswordError" class="text-danger"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="confirmPassword">Confirm Password</label>
                      <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password" required>
                      <span id="confirmPasswordError" class="text-danger"></span>
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
<script src="../../../CResources/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function validateForm() {
    // Reset error messages
    resetErrorMessages();

    // Validate Employee Name
    var employeeName = document.getElementById("employeeName").value;
    if (!employeeName) {
      displayError("employeeName", "Please enter Employee Name.");
      return false;
    }

    // Validate Employee ID
    var employeeID = document.getElementById("employeeID").value;
    if (!employeeID) {
      displayError("employeeID", "Please enter Employee ID.");
      return false;
    }

    // Validate Email
    var email = document.getElementById("employeeEmail").value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      displayError("employeeEmail", "Please enter a valid email address.");
      return false;
    }

    // Validate Telephone Number
    var telephoneNumber = document.getElementById("telephoneNumber").value;
    var telephoneRegex = /^(?:\+94|0)\d{9}$/; // Allowing either "+94" or "0" followed by 9 digits
    if (!telephoneRegex.test(telephoneNumber)) {
      displayError("telephoneNumber", "Please enter a valid telephone number (e.g., +94715533297 or 0715533297).");
      return false;
    }

    // Validate Identity Number
    var identityNumber = document.getElementById("identityNumber").value;
    var identityRegex = /^(\d{9}[A-Z]|(\d{12}))$/; // Either 9 digits with a letter or 12 digits
    if (!identityRegex.test(identityNumber)) {
      displayError("identityNumber", "Please enter a valid identity number (e.g., 972752770V or 123456789012).");
      return false;
    }

    // Password confirmation
    var password = document.getElementById("employeePassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    if (password !== confirmPassword) {
      displayError("confirmPassword", "Passwords do not match.");
      return false;
    }

    $.ajax({
      type: "POST",
      url: "add_employee/add_employee_process.php",
      data: $("#add-employees").serialize(), // Serialize the form data
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
                    $('#add-employees')[0].reset();
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
              text: error,
          });
      }
    });

    return false;

  }


  function resetErrorMessages() {
    var errorElements = document.querySelectorAll(".text-danger");
    errorElements.forEach(function (element) {
      element.textContent = "";
    });
  }

  function displayError(inputId, errorMessage) {
    var errorElement = document.getElementById(inputId + "Error");
    if (errorElement) {
      errorElement.textContent = errorMessage;
    }
  }
</script>
</body>
</html>
