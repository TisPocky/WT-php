<?php
    $localhost='localhost';
    $username='root';
    $password='';
    $get_db='db_test';

    $connection=mysqli_connect($localhost,$username,$password,$get_db);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];

    if($name && $email && $password){
        if (isset($_POST['submit'])){
            $sql="SELECT * FROM tbl_user WHERE Name='$name' AND Email='$email' AND Password='$password'";
            $result=mysqli_query($connection,$sql);
            if(mysqli_num_rows($result)>0){
                echo "User Identified <br><br> Details: <br>";
                echo "Name: ".$name.'<br>';
                echo "Email: ".$email.'<br>';
                echo "Password: ".$password.'<br>';
            }
        }
    }
?>