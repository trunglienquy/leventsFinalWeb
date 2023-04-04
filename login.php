<?php
    require 'config.php';
    if (isset($_POST["submit"])){
        $name = $_POST["name"];
        $pass = $_POST["password"];
        $exist = mysqli_query($conn, "SELECT * FROM loginweb WHERE name_user = '$name' AND password_user = '$pass'");
        if (mysqli_num_rows($exist) > 0){
            echo ("thanh cong");
            
        }
        else{
            echo
            "<script>location.href='login.html'</script>";
            // echo ("that bai");
        }
    }
?>