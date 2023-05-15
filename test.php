<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST['btnSubmitFormRegister'])){
        echo ($_POST['nameCustomer']);
        echo ($_POST['telephoneCustomer']);
        echo ($_POST['addressCustomer']);
        echo ($_POST['city']);
        echo(" ");
        echo ($_POST['city2']);
        echo(" ");
        echo ($_POST['city3']);
    }
?>
<script src="./js/mainProfile.js"></script>
</body>
</html>