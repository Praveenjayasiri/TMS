<?php
include '../../dbcon.php';
include_once '../../Session_admin/session_admin.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employeeId = $_POST['id'];

    $updateSql = "UPDATE employee SET emp_status = 0 WHERE id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param('s', $employeeId);

    $response = array();

    if ($stmt->execute()) {
      $response['status'] = 'success';
    } else {
      $response['status'] = 'error';
      $response['message'] = 'Error updating employee status: ' . $stmt->error . ' (Error Code: ' . $stmt->errno . ')';
    }

    $stmt->close();
    $conn->close();

    echo json_encode($response);
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method.'));
}

?>
