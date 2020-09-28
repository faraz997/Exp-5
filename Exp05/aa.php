<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test99";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn)
{
    echo "Connection established";
}
else  
{
    die("Connection failed: " . mysqli_connect_error());

}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];


$sql = "INSERT INTO pass99 (fname,lname,dob,gender,address,phone,email,username,pwd,cpwd)
VALUES ('$fname','$lname','$dob','$gender','$address','$phone','$email','$username','$pwd','$cpwd')";

if (mysqli_query($conn, $sql)) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>