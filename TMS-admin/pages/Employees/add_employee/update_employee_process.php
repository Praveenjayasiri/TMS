<?php
include '../../dbcon.php';
include_once '../../Session_admin/session_admin.php';

$employeeId = $_GET['employeeId'];

$sql = "SELECT * FROM employee INNER JOIN users ON employee.id = users.emp_id WHERE employee.id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo json_encode(array("error" => "Prepare statement failed: " . $conn->error));
    exit();
}

$stmt->bind_param("s", $employeeId);
$stmt->execute();

$result = $stmt->get_result();

if (!$result) {
    echo json_encode(array("error" => "Query execution failed: " . $stmt->error));
    exit();
}

if ($result->num_rows > 0) {
    $response = $result->fetch_assoc();
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    echo json_encode(array("error" => "Employee not found"));
}

$stmt->close();
$conn->close();
?>
