<?php
if(isset($_POST['submit'])){
    // recive code
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; 

// for empty data 
if($username && $email && $password){
// database connect
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'users';
    $conn = mysqli_connect($host,$user,$pass,$dbname);
// for showing error 
    if(!$conn){
        die("Not connected.".mysql_error());
    }
// insert data 
    $sqlQuery= "INSERT INTO user_info(username,email,password) values ('$username','$email','$password')";
    $result = mysqli_query($conn,$sqlQuery);
    if(!$result){
        die("not inserted." .mysql_error());
     }
  } else{
    echo "Any Field Cannot be blank";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST" >
username : <input type="text" name="username" placeholder="username"> <br><br><br>
email : <input type="email" name="email" placeholder="email"><br><br><br>
password : <input  name="password"placeholder="password"><br> <br><br>
<input type="submit" name="submit">
</form> 
</body>
</html>