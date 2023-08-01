<?php
$name=$_POST['name'];
$email=$_POST['email'];


include 'database.php';

$sql="INSERT INTO todo(`id`, `name`, `email`) VALUES (NULL,'$name','$email')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Can't Connect";
}

?>