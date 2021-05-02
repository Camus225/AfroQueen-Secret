<?php
    header("Content-Type: text/html; charset=utf8");
    $firstname=$_POST["firstname"];
    $password=$_POST["password"];

    include "mysql.php";

    $sql = "select * from user1 where firstname=$firstname and password=$password";
    $data=mysqli_query($con,$sql);//执行sql语句并返回结果集
	if(mysqli_num_rows($data)==1){
		echo"<script>alert('Logon successful');setTimeout(function(){window.location.href='index.html';},0);</script>";
	}
	else{
		echo"<script>alert('Username does not exist / password error');setTimeout(function(){window.location.href='login.html';},0);</script>";
	}
        $con->close();//关闭数据库

?>




