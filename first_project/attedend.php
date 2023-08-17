<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
    <style>
        body {
            background: wheat;
        }

        table {
            background: white;
        }

        table th, table td {
            border: 2px solid black;
        }
    </style>
</head>
<body>

<?php
include("connect.php");

$query = "SELECT * FROM reg";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {
    ?>

    <h2 align="center"><mark><u>Admission Details</u></mark></h2>
    <table border="4" align='center'>
        <tr>
            <th width="5%">Student id</th>
            <th width="10%">Name</th>
            <th width="15%">Standard</th>
            <th width="15%">Attendance</th>
        </tr>

        <?php
        while ($result = mysqli_fetch_assoc($data)) {
            $randomPercentage = rand(55, 100); // Generate a random percentage
            echo "<tr>
                <td>" . $result['student_id'] . "</td>
                <td>" . $result['name'] . "</td>
                <td>" . $result['standard'] . "</td>
                <td>" . $randomPercentage . "%</td>
            </tr>";
        }
        ?>
    </table>

    <?php
} else {
    echo "No records found";
}
?>
</body>
</html>