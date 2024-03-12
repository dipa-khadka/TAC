<?php

include 'db.php';

 $table = "CREATE TABLE `signup` (id int primary key Auto_increment,name varchar(40),email varchar(30),password varchar(10),c_password varchar(10)";
$result = mysqli_query($conn,$table);
if(!$result){
    echo "error";
}else{
    echo "create";
}

 // if(isset($_POST['submit'])){
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $pass = $_POST['password'];
//   $cpass = $_POST['c_password'];

//   $insert = "INSERT INTO `signup` (name,email,password,c_password) VALUES ('$name','$email','$pass','$cpass')";

//   $result = mysqli_query($conn,$insert);

//   if(!$result){
//     echo "error";
//   }
//   else{
//     echo "data inserted";
//   }
// }
?>