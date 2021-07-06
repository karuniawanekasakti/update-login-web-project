
<?php

    $servername = "localhost";
    $username= "root";
    $password = "";
    $database = "login_page";

    $link =mysqli_connect("localhost","root","");
    $database=mysqli_select_db($link,"login_page");

    if(isset($_POST['username'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from user where username='$username' and password='$password'";

        $result = mysqli_query($link,$sql);

        if(mysqli_num_rows($result)==1){

            // echo "login succes welcome ".$_POST['username'];
            echo "<script>alert('login succes!')</script>";
            exit();
        }else{
            // echo "Password salah! Silahkan hubungi administrator";
            echo "<script>alert('Password salah atau Username salah! Silahkan hubungi administrator!')</script>";
            exit();

        }
    }
?>