<?php

session_start(); 
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];

    


     $sql = "SELECT * FROM employee (first_name,last_name)
	 VALUES ('$first_name','$last_name')";

$row['last_name'] = $_POST['last_name'];

$row['first_name'] = $_POST['first_name'];

$row['id'] = $_POST['last_name'];



     if (empty($first_name)) {

        header("Location: login.php?error=User Name is required");

        exit();
        
    }else if(empty($last_name)){

        header("Location: login.php?error=Password is required");

        exit();

    }else {
        
        if ($row['first_name'] === $first_name && $row['last_name'] === $last_name) {

            $_SESSION['first_name'] =  $row['first_name'];

            $_SESSION['last_name'] =  $row['last_name'];

            $_SESSION['id'] = $row['id'];


       
            header("Location: home.php");
        }
else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 mysqli_close($conn);

}
}
?>