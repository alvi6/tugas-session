<?php
 session_start();
 $username = $_POST['username'];
 $password = $_POST["password"];

 $koneksi = new PDO('mysql:host=localhost;dbname=rumahsakitt','root','');
 $query = $koneksi->query("select * from table_user where username='$username' AND password='$password'");

 if($query->rowcount() > 0){
    $_session["username"] = $_POST['username'];
    $_session["password"] = $_POST["password"];
    header("Location:beranda.php");
 }else{
    header("Location:from_session.php");
 }
 