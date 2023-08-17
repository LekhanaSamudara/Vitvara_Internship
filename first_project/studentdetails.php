<html>
    <head>
        <title>Student Data Details</title>
        <style>
            body{
                background:wheat;
            }
            table{
                background:white;
            }
            table th{
                border: 2px solid black;
            }
           
        </style>
    </head> 
</html>          

<?php
include("connect.php");

$query = "SELECT * FROM reg";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

if($total != 0)
{
    ?>
     
    <h1 align="center"><mark><u>Student Details</u></mark></h1>
    <table border="4" width="100%" align='right'>
        <tr>
        <th width="3%">student_id</th>
        <th width="10%">Name</th>
        <th width="5%">Gender</th>
        <th width="15%">Email</th>
        <th width="15%">Standard</th>
        <th width="15%">Fees Paid</th>
        <th width="15%">Total Fees</th>
        </tr>
    
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['student_id']."</td>
                <td>".$result['name']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['email']."</td>
                <td>".$result['standard']."</td>
                <td>".$result['fees']."</td>
                <td>".$result['tfees']."</td>
            </tr>
        ";
    }
}
else{
    echo "No records found";
}
?>
</table>






