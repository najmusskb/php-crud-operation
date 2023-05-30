<?php
 // database connect----------------------------------------
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $dbname = 'users';
 $conn = mysqli_connect($host,$user,$pass,$dbname);
// for showing error 
 if(!$conn){
     die("Not connected.".mysql_error($conn));
 }
// ---------------------------------------------------------------

// recive the id     //http://localhost/CRUD/delete.php?id=15
// uri -- http://localhost/CRUD/index.php?%20deleted
// insert -- http://localhost/CRUD/insert.php#


$recive = $_REQUEST['id'];

// query
$query = "DELETE FROM user_info WHERE id = $recive";
$run_delete_query = mysqli_query($conn,$query);

if($run_delete_query){
    header("location: index.php? deleted");
}

?>