<?php

$servername = "localhost";
$username = "user";
$password = "123";
$dbname = "wp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "SELECT ID, post_content, post_title, post_name FROM wp_posts where post_type='product'";
 $result1 = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
//create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result1))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
$conn->close();




?>