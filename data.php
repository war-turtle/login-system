<?php
include 'connect.php';
$i=0;
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $sql = "SELECT * FROM login_system";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $i++;
      if(($username == $row['username'] || $username == $row['email']) && $pass == $row['password']){
        $name = $row['name'];
        $last_id = $row['id'];
        echo "<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <title>kartik's webpage</title>
            <link rel='stylesheet' href='style.css'>
          </head>
          <body>
            <h1>
              Welcome $name to Kartik Yadav website
            </h1>
          </body>
        </html>";
        die();
      }
    } echo "<script>window.alert('incorrect information typed')</script>";
    header("refresh:0.1;url=../login/index.php");
    die();
  } else{
    echo "no data in database";
  }
}else{
  echo "\nPlease fill out";
}

$conn->close();
?>
