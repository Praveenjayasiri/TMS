<?php
include '../../dbcon.php';
include_once '../../Session_admin/session_admin.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the form data (you should implement proper validation)
    $employeeName = mysqli_real_escape_string($conn, $_POST["employeeName"]);
    $employeeID = mysqli_real_escape_string($conn, $_POST["employeeID"]);
    $employeeEmail = mysqli_real_escape_string($conn, $_POST["employeeEmail"]);
    $identityNumber = mysqli_real_escape_string($conn, $_POST["identityNumber"]);
    $employeeAddress = mysqli_real_escape_string($conn, $_POST["employeeAddress"]);
    $telephoneNumber = mysqli_real_escape_string($conn, $_POST["telephoneNumber"]);
    $designation = mysqli_real_escape_string($conn, $_POST["designation"]);
    $employeePassword = password_hash($_POST["employeePassword"], PASSWORD_BCRYPT); // Hash the password

    // Check if the employee ID already exists
    $checkExistingID = "SELECT COUNT(*) FROM employee WHERE id = '$employeeID'";
    $resultExistingID = $conn->query($checkExistingID);

    if ($resultExistingID) {
        $countExistingID = $resultExistingID->fetch_row()[0];

        if ($countExistingID > 0) {
            // Employee ID already exists, return error response
            $response = array("status" => "error", "message" => "Employee ID already exists!");
            echo json_encode($response);
        } else {
            // Insert data into 'users' table
            $sqlUsers = "INSERT INTO users (emp_id, email, password)VALUES ('$employeeID', '$employeeEmail', '$employeePassword')";

            // Insert data into 'employee' table
            $sqlEmployees = "INSERT INTO employee (emp_name, id, emp_identity_number, emp_address, emp_tel_no, emp_designation)
                            VALUES ('$employeeName', '$employeeID', '$identityNumber', '$employeeAddress', '$telephoneNumber', '$designation')";

            // Execute queries
            $successUsers = $conn->query($sqlUsers);
            $successEmployees = $conn->query($sqlEmployees);

            if ($successUsers && $successEmployees) {
                // Success response
                $response = array("status" => "success", "message" => "Employee added successfully!");
                echo json_encode($response);
            } else {
                if (!$successUsers || !$successEmployees) {
                    // Error response
                    $response = array("status" => "error", "message" => "Error inserting into database.");
                    echo json_encode($response);
                }
            }
        }
    } else {
        // Error checking existing employee ID
        $response = array("status" => "error", "message" => "Error checking existing employee ID.");
        echo json_encode($response);
    }
}
?>
