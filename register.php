<html lang="en">
<body>
<?php
    require 'config.php';
    if (isset($_POST["submit"])){
        $name = $_POST["user_name"];
        $email = $_POST["user_email"];
        $phone = $_POST["user_numberphone"];
        $dob = $_POST["user_birthday"];
        $pass = $_POST["user_password"];
        $conformPass = $_POST["password"];
        $exist = mysqli_query($conn, "SELECT * FROM register WHERE user_name = '$name' OR user_email = '$email'");
        if (mysqli_num_rows($exist) > 0){
            echo
            "<script> alert ('username or email has already exist')</script>";
            

        }
        else{
            if ($pass == $conformPass){
                $queryRegister = "INSERT INTO register VALUES('', '$name', '$email','$phone','$dob',' $pass')";
                $queryLogin = "INSERT INTO loginweb VALUES('', '$email','$phone','$pass')";
                mysqli_query($conn, $queryRegister);
                mysqli_query($conn, $queryLogin);
                echo ("thanh cong");
            }
            else{
                echo
                "<script> alert ('password with conform password not match')</script>";
            }
        }

    }
?>

</body>
</html>

