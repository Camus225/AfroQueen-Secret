<?php
    header("Content-Type: text/html; charset=utf8");

    $firstname=$_POST["firstname"];
    $password=$_POST["password"];
    $lastname=$_POST["lastname"];

    include "mysql.php";


    $sql="INSERT INTO user1(firstname,lastname,password) VALUES('$firstname',' $lastname','$password')";

        if ($con->query($sql) === TRUE) {
            echo"<script>alert('Successful registration');setTimeout(function(){window.location.href='index.html';},0);</script>";
        }
        else {
            echo"<script>alert('User already exists');setTimeout(function(){window.location.href='account.html';},0);</script>";
        }

        $con->close();//关闭数据库

?>