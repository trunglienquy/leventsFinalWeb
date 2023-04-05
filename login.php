<?php
    require 'config.php';
    if (isset($_POST["submit"])){
        $name = $_POST["name"];
        $pass = $_POST["password"];
        $exist = mysqli_query($conn, "SELECT * FROM loginweb WHERE (name_user = '$name' OR phone_user = '$name') AND password_user = '$pass'");
        if (mysqli_num_rows($exist) > 0){
            echo ("thanh cong");
            
        }
        else{
            echo ("that bai");
        }
    }
    //khi auto lưu lại sđt ở register thì database bên login không thể hiển thị được số 0 ở đầu
?>