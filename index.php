<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
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

$query = "SELECT * FROM user_info";

$allDataTable= mysqli_query($conn,$query);



$count = mysqli_num_rows($allDataTable);
if($count >0 ){



if (isset($_REQUEST['deleted'])){
  echo "<font color='green'>Data Deleted</font>";
}




?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

<?php
// show data with array using while loop and using fetch
while ($row = mysqli_fetch_assoc($allDataTable)) {
 

    $db_id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password']; 


?>
    <tbody>
    <tr>
      <th> <?php echo $db_id; ?></th>
      <td><?php echo $username; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $password; ?></td>
      <td><a  href="delete.php?id=<?php echo $db_id  ?>">Delete</a></td>
    </tr> 
  </tbody>
<?php  
 }


 ?>

 </table>

 <?php



 
 }else{
     echo "You dont have any data on your database";
 }

?>







    
</body>
</html>