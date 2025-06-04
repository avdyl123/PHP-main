<?php
  include_once('config.php');

  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $username =$_POST['username'];
    $email = $_POST['email'];

    $sql = "insert into user (name, username, email) values (:name, :username, :email)";
    $sqlQuery =$conn->prepare($sql);

    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':username', $username);
    $sqlQuery->bindParam(':email', $email);

    $sqlQuery->execute();

    echo "Data saved succesfully";
  }
?>