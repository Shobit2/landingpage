<?php
include_once 'connection.php';
if(isset($_POST['Create Account']))
{
   
    $FirstName=$_POST['firstname'];
    $LastName=$_POST['lastname'];
    $Email=$_POST['email'];
    $Password=$_POST['pwd'];


    $sql="INSERT INTO shobit1(firstname,lastname,email,pwd)
    VALUES( '$FirstName','$LastName','$Email','$Password')";

    if(mysqli_query($conn,$sql))
    {
        echo "new record create successfully:";

    }
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
  
}
// mysqli_close($conn);

?>