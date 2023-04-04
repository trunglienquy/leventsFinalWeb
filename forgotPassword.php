<?php
    require 'config.php';
    if (isset($_POST["submit"])){
        $email = $_POST["user_email"];
        $exist = mysqli_query($conn, "SELECT * FROM register WHERE user_email = '$email'");
        if (mysqli_num_rows($exist) > 0){
            echo
            "<script>location.href='resetPassword.php'</script>";

            

        }
        else{echo
            "<script> alert ('Email này chưa đăng ký hoặc không tồn tại')</script>";
            
        }

    }
?>