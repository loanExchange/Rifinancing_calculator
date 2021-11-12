
<?php
/*
$host = 'localhost';  // server
$user = 'root';
$pass = "";   
$database = 'scrumeng_calculatordb';   //Database Name

// establishing connection
  $conn = mysqli_connect($host,$user,$pass,$database);

 // for displaying an error msg in case the connection is not established
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM users WHERE id='delete_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header('Location: home.php');
    }else{
        echo '<script> alert("Data not Deleted"); </script>';
    }
}

*/




$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn, "scrumeng_calculatordb");



if(isset($_POST['deletedata']))
{
    

    $id = $_POST['delete_id'];

    echo"<script>alert('test',delete_id)</script>";

    $query = "delete from `users` where id='$id'";
    $delete_query = mysqli_query($conn, $query);

    if($delete_query)
    {
        echo " Data Deleted Successfully";
        header('Location: home.php');
    }else{
        echo '<script> alert("Data not Deleted"); </script>';
    }
}
?>


