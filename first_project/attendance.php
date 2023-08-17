<?php

// Include the database connection file.
include('connect.php');

// Get the current date and time.
$current_date = date('Y-m-d');
$current_time = date('H:i:s');

// Get the student ID from the URL.
$student_id = $_GET['student_id'];

// Check if the student ID is valid.
if (!is_numeric($student_id)) {
    // The student ID is not valid.
    echo "Error: Invalid student ID.";
    exit();
}

// Get the student's name from the database.
$sql = "SELECT name FROM reg WHERE student_id = $student_id";
$result = mysqli_query($conn, $sql);

// Check if the student exists in the database.
if (mysqli_num_rows($result) == 0) {
    // The student does not exist in the database.
    echo "Error: Student does not exist.";
    exit();
}

// Get the student's name.
$name = mysqli_fetch_assoc($result)['name'];

// Check if the student has already marked their attendance for today.
$sql = "SELECT * FROM reg WHERE student_id = $student_id AND date = '$current_date'";
$result = mysqli_query($conn, $sql);

// Check if the student has already marked their attendance.
if (mysqli_num_rows($result) > 0) {
    // The student has already marked their attendance.
    echo "Error: Student has already marked their attendance.";
    exit();
}

// Insert a new record into the attendance table.
$sql = "INSERT INTO reg (student_id, date, time) VALUES ($student_id, '$current_date', '$current_time')";
mysqli_query($conn, $sql);

// Redirect the student to the home page.
header('Location: index.php');

?>