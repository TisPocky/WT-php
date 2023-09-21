<?php
    $localhost='localhost';
    $username='root';
    $password='';
    $get_db="db_test";

    $connection=mysqli_connect($localhost,$username,$password,$get_db);

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];

    if($name && $email && $password){
        
        if(isset($_POST['submit'])){
            $sql="INSERT INTO tbl_user(Name,Email,Password) values ('$name','$email','$password')";
            if(mysqli_query($connection,$sql)){
            echo "User registered Successfully";
            }

        else{
            echo "Something went wrong.Error 404";
        }
    }
    }

    else{
        echo "Error, Please fill all fields !";
    }
?>