<html>
<?php
$servername="localhost";
$username="root";
$password="";
$database="person";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['mail'];
$pass = $_POST['pass'];
$num = $_POST['num'];
$uid = $_POST['userid'];
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
die("Connection Failed:".mysqli_connect_error());
}
else
{
$sql = "insert into info(First_name,Last_name,Email,U_id,Password,Mobile) values('$fname','$lname','$email','$uid','$pass','$num')";
}
if ($con->query($sql) === TRUE) 
{
    echo "Congratulations! You've signed up as a new user!!";
}
$con->close();
?><br><br>
<a href="3.php">Click here to login</a>
</html>