<?php
include '../../dbcon.php';
include_once '../../Session_admin/session_admin.php';

function updateEmployeeDetails($conn, $formData) {
  // Sanitize form data
  $empid = mysqli_real_escape_string($conn, $formData['empid']);
  $empname = mysqli_real_escape_string($conn, $formData['empname']);
  $emptelnum = mysqli_real_escape_string($conn, $formData['emptelnum']);
  $einumber = mysqli_real_escape_string($conn, $formData['einumber']);
  $eaddress = mysqli_real_escape_string($conn, $formData['eaddress']);
  $edesignation = mysqli_real_escape_string($conn, $formData['edesignation']);
  $estatus = mysqli_real_escape_string($conn, $formData['estatus']);
  $email = mysqli_real_escape_string($conn, $formData['email']);
  $newpassword = mysqli_real_escape_string($conn, $formData['newpassword']);
  $conpassword = mysqli_real_escape_string($conn, $formData['conpassword']);

  if ($newpassword == $conpassword) {
    $hashedPassword = password_hash($newpassword, PASSWORD_DEFAULT);
  }else{
    $response = ['success' => false, 'warning' => 'New password and confirmation password do not match.'];
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
  }

  $estatus = strtolower($estatus);

  if ($estatus == 'active') {
      $newstatus = 1;
  } else {
      $newstatus = 0;
  }

/* // Define the patterns for valid phone numbers
$patternWithCountryCode = "/^\+94\d{9}$/";
$patternWithoutCountryCode = "/^\d{10}$/";

// Check if the cleaned number matches the specified patterns
if (preg_match($patternWithCountryCode, $emptelnum) || preg_match($patternWithoutCountryCode, $emptelnum)) {
    return $emptelnum;
} else {
    echo "Invalid phone number: $emptelnum";
} */

  // Update query for the 'employee' table
  $updateEmployeeQuery = "UPDATE employee SET
                          id = '$empid',
                          emp_name = '$empname',
                          emp_identity_number = '$einumber',
                          emp_address = '$eaddress',
                          emp_tel_no = '$emptelnum',
                          emp_designation = '$edesignation',
                          emp_status = '$newstatus'
                          WHERE id = '$empid'";

  // Update query for the 'users' table with prepared statements
  $updateUserQuery = "UPDATE users SET
                      email = ?,
                      password = ?
                      WHERE emp_id = ?";

  // Prepare the statement
  $stmt = mysqli_prepare($conn, $updateUserQuery);

  // Bind the parameters
  mysqli_stmt_bind_param($stmt, "sss", $email, $hashedPassword, $empid);

  // Execute both update queries
  $resultEmployee = mysqli_query($conn, $updateEmployeeQuery);
  $resultUser = mysqli_stmt_execute($stmt);

  // Check if both queries were successful
  $result = $resultEmployee && $resultUser;

  return $result;
}

// Check if the form data is received
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['empid'])) {
  $formData = [
    'empid' => $_POST['empid'],
    'empname' => $_POST['empname'],
    'emptelnum' => $_POST['emptelnum'],
    'einumber' => $_POST['einumber'],
    'eaddress' => $_POST['eaddress'],
    'edesignation' => $_POST['edesignation'],
    'estatus' => $_POST['estatus'],
    'email' => $_POST['email'],
    'newpassword' => $_POST['newpassword'],
    'conpassword' => $_POST['conpassword'],
  ];

  // Call the function to update employee details
  $updateResult = updateEmployeeDetails($conn, $formData);

  // Send a JSON response based on the update result
  if ($updateResult) {
      $response = ['success' => true];
  } else {
      $response = ['success' => false, 'message' => 'Failed to update employee details.'];
  }

  header('Content-Type: application/json');
  echo json_encode($response);
  exit();

} else {
  header('HTTP/1.1 400 Bad Request');
  exit();
}

?>
