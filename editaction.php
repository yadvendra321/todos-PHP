<?php
       $id=$_POST['id'];
       $name=$_POST['name'];
       $email=$_POST['email'];

       
    include 'database.php';
    
    $sql="UPDATE todo SET email='$email' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>