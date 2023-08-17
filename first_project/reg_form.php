<?php include("connect.php"); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Registration</title>
  </head>
<body>
<h1>Registration Form</h1>
<form action="#" method="POST">
  <fieldset>
    <legend>Personal Details</legend>
    <label for="student_id">Application ID:</label>
    <input type="number" name="student_id" required><br>
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>
    <label for="Fname">Father Name:</label>
    <input type="text" name="fname" required><br>
    <label for="Mname">Mother Name:</label>
    <input type="text" name="mname" required><br>
    <label for="gender">Gender:</label>
    <select name="gender" required>
      <option value="select">Select</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select><br>
    <label for="dob">Date of Birth:</label>
    <input type="date" name="dob" required><br>
  </fieldset>
  <fieldset>
    <legend>Address</legend>
    <div class="address-field">
      <label for="present">Present Address:</label>
      <textarea name="present" required></textarea>
    </div><br>
  </fieldset>
  <fieldset>
    <legend>Contact Information</legend>
    <label for="religion">Religion:</label>
    <input type="text" name="religion" required><br>
    <label for="nationality">Nationality:</label>
    <input type="text" name="nationality" required><br>
    <label for="phone">Phone Number:</label>
    <input type="tel" name="phone" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    <label for="blood">Blood Group:</label>
    <input type="text" name="blood" required><br>
  </fieldset>
  <fieldset>
    <legend>Course Details</legend>
    <label for="course">Standard:</label>
    <input type="text" name="standard" required><br>
  </fieldset>
  <p>I hereby declare that I will obey all the rules and regulations of the institution and will be responsible for violating the rules.</p>
  <input type="submit" value="register" name="register">
</form>
<p class="form-footer">This form is for registration purposes only.</p>
</body>
</html>

<?php
 if($_POST['register'])
  {
    $student_id  = $_POST['student_id'];
    $name        = $_POST['name'];
    $fname       = $_POST['fname'];
    $mname       = $_POST['mname'];
    $gender      = $_POST['gender'];
    $dob         = $_POST['dob'];
    $present     = $_POST['present'];
    $religion    = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $phone       = $_POST['phone'];
    $email       = $_POST['email'];
    $blood       = $_POST['blood'];
    $standard    = $_POST['standard'];


    $query = "INSERT into reg (student_id,name,fname,mname,gender,dob,present,religion,nationality,phone,email,blood,standard)values('$student_id',  '$name','$fname','$mname','$gender','$dob','$present','$religion','$nationality','$phone','$email','$blood','$standard')";

    $data = mysqli_query($conn,$query);
    if($data)
    {
      header("location:indee1.php");
      
    }
    else
    {
      echo "Failed";
    }
  }
?>

       

