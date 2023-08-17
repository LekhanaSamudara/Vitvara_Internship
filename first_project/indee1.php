<html>
    <head>
        <title>Student Data</title>
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
     
    <h2 align="center"><mark><u>Admission Details</u></mark></h2>
    <table border="4" width="auto" align='right'>
        <tr>
        <th width="5%">student_id</th>
        <th width="10%">Name</th>
        <th width="10%">FatherName</th>
        <th width="10%">MotherName</th>
        <th width="5%">Gender</th>
        <th width="17%">DOB</th>
        <th width="15%">Address</th>
        <th width="5%">Religion</th>
        <th width="3%">Nationality</th>
        <th width="15%">Phone</th>
        <th width="15%">Email</th>
        <th width="15%">Blood</th>
        <th width="15%">Standard</th>
        </tr>
    
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['student_id']."</td>
                <td>".$result['name']."</td>
                <td>".$result['fname']."</td>
                <td>".$result['mname']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['dob']."</td>
                <td>".$result['present']."</td>
                <td>".$result['religion']."</td>
                <td>".$result['nationality']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['email']."</td>
                <td>".$result['blood']."</td>
                <td>".$result['standard']."</td>
                
               
            </tr>
        ";
    }
}
else{
    echo "No records found";
}
?>
</table>






