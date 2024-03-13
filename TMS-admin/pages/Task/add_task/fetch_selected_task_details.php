<?php
include '../../dbcon.php';
include_once '../../Session_admin/session_admin.php';

if (isset($_GET['rowId'])) {
    $rowId = $_GET['rowId'];

    // Continue with the original query to fetch data if task_id is available
    $sql = "SELECT e.id AS emp_id, e.emp_name, e.emp_tel_no, t.id AS task_id, t.date, t.location, t.task_description, ta.check_in, ta.lat_in, ta.lng_in, ta.check_out, ta.lat_out, ta.lng_out, t.task_status
            FROM task_attendance AS ta
            LEFT JOIN employee AS e ON ta.emp_id = e.id
            LEFT JOIN task AS t ON ta.task_id = t.id
            WHERE ta.task_id = ?";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('i', $rowId);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Set content type to JSON
            header('Content-Type: application/json');

            // Return data as JSON
            echo json_encode($row);
        } else {
            echo json_encode(['error' => 'No records found']);
        }

        $stmt->close();
    } else {
        // Log the error if there's an issue with the prepared statement
        error_log("Error in prepared statement: " . $conn->error);
        echo json_encode(['error' => 'Error in prepared statement']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}

$conn->close();
?>
