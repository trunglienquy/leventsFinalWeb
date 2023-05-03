<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "pjweb");

    if (isset($_GET['sub'])){
        $id = $_GET['sub'];
        foreach($_SESSION['cart1'] as $cart_item){
            if ($cart_item['id'] != $id){
                $product[] = array('namePr'=>$cart_item['namePr'], 'pricePr'=>$cart_item['pricePr'],'id'=>$cart_item["id"], 'amount'=>$cart_item['amount'],'size'=>$cart_item['size'], 'imagePr'=>$cart_item['imagePr']);
                $_SESSION['cart1'] = $product;
            }
            else{
                $subAmount = $cart_item['amount'] - 1;
                if ($cart_item['amount'] > 1){
                    $product[] = array('namePr'=>$cart_item['namePr'], 'pricePr'=>$cart_item['pricePr'],'id'=>$cart_item["id"], 'amount'=>$subAmount,'size'=>$cart_item['size'], 'imagePr'=>$cart_item['imagePr']);
                }
                else{
                    $product[] = array('namePr'=>$cart_item['namePr'], 'pricePr'=>$cart_item['pricePr'],'id'=>$cart_item["id"], 'amount'=>$cart_item['amount'],'size'=>$cart_item['size'], 'imagePr'=>$cart_item['imagePr']);
                    // $_SESSION['cart1'] = $product;
                }
                $_SESSION['cart1'] = $product;
            }
        }
        header('location: order-product.php');
    }

    if (isset($_GET['add'])){
        $id = $_GET['add'];
        foreach($_SESSION['cart1'] as $cart_item){
            if ($cart_item['id'] != $id){
                $product[] = array('namePr'=>$cart_item['namePr'], 'pricePr'=>$cart_item['pricePr'],'id'=>$cart_item["id"], 'amount'=>$cart_item['amount'],'size'=>$cart_item['size'], 'imagePr'=>$cart_item['imagePr']);
                $_SESSION['cart1'] = $product;
            }
            else{
                $addAmount = $cart_item['amount'] + 1;
                $product[] = array('namePr'=>$cart_item['namePr'], 'pricePr'=>$cart_item['pricePr'],'id'=>$cart_item["id"], 'amount'=>$addAmount,'size'=>$cart_item['size'], 'imagePr'=>$cart_item['imagePr']);
                $_SESSION['cart1'] = $product;
            }
        }
        header('location: order-product.php');
    }

    if (isset($_SESSION['cart1']) && isset($_GET['remove'])){
        $id = $_GET["remove"];
        foreach($_SESSION['cart1'] as $cart_item){
            if ($cart_item['id'] != $id){
                $product[] = array('namePr'=>$cart_item['namePr'], 'pricePr'=>$cart_item['pricePr'],'id'=>$cart_item["id"], 'amount'=>$cart_item['amount'],'size'=>$cart_item['size'], 'imagePr'=>$cart_item['imagePr']);
            }
        }
        $_SESSION['cart1'] = $product;
        header('location: order-product.php');
    }

    if (isset($_GET['removeall']) && $_GET['removeall'] == 1){
        unset($_SESSION['cart1']);
        header('location: order-product.php');
    }

    if (isset($_POST["submit-order"])){
        // session_destroy();
        $id = $_GET['id'];
        $size_product = $_POST['size-shirt'];
        $soluong = 1;
        $sql = "SELECT * FROM allproduct WHERE idProduct = '".$id."' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        if ($row){
            $newProduct = array((array('namePr'=>$row['nameProduct'], 'pricePr'=>$row['priceProduct'], 'id'=>$id, 'amount'=>$soluong,'size'=>$size_product,'imagePr'=>$row['imageFrontProduct'])));
            if (isset($_SESSION['cart1'])){
                $found = false;
                foreach($_SESSION['cart1'] as $cart_item){
                    if ($cart_item['id'] == $id){
                        $product[] = array('namePr'=>$cart_item['namePr'], 'pricePr'=>$cart_item['pricePr'],'id'=>$cart_item["id"], 'amount'=>$cart_item['amount'] + 1, 'size'=>$cart_item['size'], 'imagePr'=>$cart_item['imagePr']);
        var_dump($cart_item['imagePr']);

                        $found = true;
                    }
                    else{
                        $product[] = array('namePr'=>$cart_item['namePr'], 'pricePr'=>$cart_item['pricePr'],'id'=>$cart_item["id"],'amount'=>$cart_item['amount'], 'size'=>$cart_item['size'], 'imagePr'=>$cart_item["imagePr"]);
                    }
                }
                if ($found == false){
                    $_SESSION['cart1'] = array_merge($product, $newProduct);
                }
                else{
                    $_SESSION['cart1'] = $product; 
                }
            }
            else{
                $_SESSION['cart1'] = $newProduct;
            }
        }
        var_dump($_SESSION["cart1"]);
        header('location: order-product.php');
        
    }
?>