<?php

//establish connection to the database
if($_SERVER["REQUEST_METHOD"]=="POST"){

  $connect=mysqli_connect("localhost","root","kidez");
    if(!$connect){
     echo "connection to the database eigine failded";}
    else{
   echo "connection to the database successful";
}
mysqli_select_db($connect,"university") or die("database not found");
//get forms data


$AdmNo=$_POST['AdmNo'];
$Name=$_POST['Name'];
$Age=$_POST['Age'];
$Program=$_POST['Program'];

mysqli_query($connect,"insert into students(AdmNo,Name,Age,Program) VALUES($AdmNo,'$Name',$Age,'$Program')");

mysqli_close($connect);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  body{
    font-family: arial,sans-serif;
    background-color: blueviolet;
    color: burlywood;
    </style>

  }
<body>
  
    <h1>students registartin form</h1>
    <?php if (!empty($message)) echo "<p>$message</p>";?>

    <form action="connect.php" method="POST">
      <br>
      <label for="AdmNo">AdmNo</label>
      <input type="number" id="AdmNo" name="AdmNo">
    
    
        <br>

    <label for="Name">Full name</label>
    <input type="text" id="Name" name="Name">
    <br>
   
    <label for="Age">Age</label>
    <input type="number" id="Age" name="Age">
      <br>
    <label for="Program">Program</label>

    <input type="text" id="Program" name="Program">
    <br>

    <input type="submit" value="register">
    </form>
   
</body>
</html>