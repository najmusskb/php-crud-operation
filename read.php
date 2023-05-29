<?php
// database connect
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'users';
    $conn = mysqli_connect($host,$user,$pass,$dbname);
// for showing error 
    if(!$conn){
        die("Not connected.".mysql_error($conn));
    }

$query = "SELECT * FROM user_info";

$allDataTable= mysqli_query($conn,$query);



$count = mysqli_num_rows($allDataTable);
if($count >0 ){


// show data with array using while loop and using fetch
while ($row= mysqli_fetch_assoc($allDataTable)) {
    echo "$row[id]";
    echo "<br>";
    echo "$row[username]";
    echo "<br>";
}
// count data 
echo "$count";

}else{
    echo "You dont have any data on your database";
}

?>

