<?php
// Check if the request has the studentId parameter
if (isset($_GET["studentId"])) {
    $studentId = $_GET["studentId"];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sebuu";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch student information from the database
    $sql = "SELECT name, email, fees FROM reg WHERE student_id = $studentId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $studentInfo = $result->fetch_assoc();
        echo json_encode($studentInfo);
    } else {
        echo json_encode(null); // Student not found
    }
    $conn->close();
}
?>
