<?php
    require 'config.php';
    if (isset($_POST["submit"])){
        $name = $_POST["name"];
        $pass = $_POST["password"];
        $exist = mysqli_query($conn, "SELECT * FROM loginweb WHERE (name_user = '$name' OR phone_user = '$name') AND password_user = '$pass'");
        $getInfoUser = mysqli_query($conn, "SELECT * FROM register WHERE user_name = '$name' AND user_password = '$pass'");
        $element = mysqli_fetch_array($getInfoUser);
        echo $element['user_name'];
        if (mysqli_num_rows($exist) > 0){
            $_SESSION['test'] = $name;
            header('location: home.php');
        }
        else{
            $_SESSION['test'] = "";
            header('location: home.php');
        }
    }
    //khi auto lưu lại sđt ở register thì database bên login không thể hiển thị được số 0 ở đầu
?>