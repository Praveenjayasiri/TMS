<?php
include '../../dbcon.php';
include_once '../../Session_admin/session_admin.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the form data (you should implement proper validation)
    $employeeID = mysqli_real_escape_string($conn, $_POST["employeeId"]);
    $taskID = mysqli_real_escape_string($conn, $_POST["taskID"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $location = mysqli_real_escape_string($conn, $_POST["location"]);
    $taskDescription = mysqli_real_escape_string($conn, $_POST["workDescription"]);

    // Check if the task ID already exists
    $checkExistingID = "SELECT COUNT(*) FROM task WHERE id = '$taskID'";
    $resultExistingID = $conn->query($checkExistingID);

    if ($resultExistingID) {
        $countExistingID = $resultExistingID->fetch_row()[0];

        if ($countExistingID > 0) {
            // Task ID already exists, return error response
            $response = array("status" => "error", "message" => "Task ID already exists!");
            echo json_encode($response);
        } else {
            // Insert data into your_table_name
            $sql = "INSERT INTO task (emp_id, id, date, location, task_description)
                    VALUES ('$employeeID', '$taskID', '$date', '$location', '$taskDescription')";

            // Execute the query
            $success = $conn->query($sql);

            if ($success) {
                // Success response
                $response = array("status" => "success", "message" => "Task assigned successfully!");
                echo json_encode($response);
            } else {
                // Error response
                $response = array("status" => "error", "message" => "Error inserting into database.");
                echo json_encode($response);
            }
        }
    } else {
        // Error checking existing task ID
        $response = array("status" => "error", "message" => "Error checking existing task ID.");
        echo json_encode($response);
    }
}
?>
