<?php
    require 'config.php';
    if (isset($_POST["submit"])){
        $name = $_POST["name"];
        $pass = $_POST["password"];
        $exist = mysqli_query($conn, "SELECT * FROM loginweb WHERE (name_user = '$name' OR phone_user = '$name') AND password_user = '$pass'");
        $getInfoUser = mysqli_query($conn, "SELECT * FROM register WHERE user_email = '$name' AND user_password = $pass");
        $element = mysqli_fetch_array($getInfoUser);
        if (mysqli_num_rows($exist) > 0){
            $_SESSION['test'] = $name;
            $_SESSION['name-info'] = $element['user_name'];
            $_SESSION['name-email'] = $element['user_email'];
            $_SESSION['name-numberphone'] = $element['user_numberphone'];
            $_SESSION['name-birthday'] = $element['user_birthday'];
            $_SESSION['name-id'] = $element['id_user'];
            header('location: home.php');
        }
        else{
            $_SESSION['test'] = "";
            header('location: home.php');
        }
    }
    //khi auto lưu lại sđt ở register thì database bên login không thể hiển thị được số 0 ở đầu
?>