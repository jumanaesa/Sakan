<?php
include 'mydp.php';
if(!isset($_POST['save']))
{    
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
 
     $query = "INSERT INTO customers (fname,lname,email)
     VALUES ('$fname','$lname','$email')";
 
     if (mysqli_query($dbCon, $query)) {
        echo "Html form data has been inserted successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
