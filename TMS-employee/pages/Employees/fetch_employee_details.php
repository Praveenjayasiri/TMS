<?php
include '../../../dbcon.php';
include_once '../Session_employee/session_employee.php';

$emp_id = $_SESSION['emp_id'];

$sql = "SELECT * FROM employee WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $emp_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if a row is returned
if ($result->num_rows > 0) {

    $employeeDetails = $result->fetch_assoc();

    echo json_encode($employeeDetails);
} else {
    echo json_encode(array("error" => "Employee not found"));
}

$stmt->close();
$conn->close();

?>
