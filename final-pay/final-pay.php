<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleFP.css">
    <link rel="stylesheet" href="../js/product-main.js">
    <title>Tất cả - Levents</title>
</head>
<body>
<?php
    require "../detail-product/orderWait.php";
    $conn = mysqli_connect("localhost", "root", "", "pjweb")
    // require "../login.php";
?>

    <!-- MENU -->

    <div class="navbar">
        <div class="menu-mobile">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="menu-mobile-close menu-mobile">
            <ion-icon name="close-outline"></ion-icon>
        </div>
        <div class="navbar-logo"><a href="../home.php"><img src="../img/logo.png" alt=""></a></div>
        <div class="navbar-icon">
            <ul class="navbar-icon_lists">
                <li class="navbar-icon_item navbar-icon_search"><a href="#"><ion-icon name="search-outline"></ion-icon></a></li>
                <li class="navbar-icon_item navbar-icon_bag"><a href="../detail-product/order-product.php"><ion-icon name="bag-handle-outline"></ion-icon></a></li>
                <?php
                    if (isset($_SESSION['test']) && ($_SESSION['test'] != "")){
                        echo '<li class="navbar-icon_item"><a href="../profile.php"><ion-icon name="person-outline"></ion-icon></a></li>';
                    }
                    else{
                        echo '<li class="navbar-icon_item"><a href="../login.html"><ion-icon name="person-outline"></ion-icon></a></li>';
                    }
                ?>
            </ul>
        </div>
        <div class="search-box hide-search">
            <form action="../search-result/search-result.php" method="get">
                <div class="search-close"><ion-icon name="close-outline"></ion-icon></div>
                <div class="search-buttons">
                    <input type="text" id="search-text" name="content">
                    <input type="submit" value="Search" id="search-btn" name="searchBtn">
                </div>
                <div class="advance-search">
                        <select name="categoryProduct" id="categories">
                            <option value="0" class="col-op">--Loại sản phẩm--</option>
                            <option value="1" class="col-op">Áo thun</option>
                            <option value="2" class="col-op">Quần</option>
                            <option value="3" class="col-op">Ba-lô</option>
                            <option value="4" class="col-op">Áo khoác</option>
                            <option value="5" class="col-op">Phụ kiện</option>
                        </select>
                        <select name="rangePrice" id="price">
                            <option value="0" class="col-op">--Khoảng giá--</option>
                            <option value="1" class="col-op">Dưới 300.000 vnđ</option>
                            <option value="2" class="col-op">Từ 300.000 vnđ - 500.000 vnđ</option>
                            <option value="3" class="col-op">Trên 500.000 vnđ</option>
                        </select>
                    </div>
            </form>
        </div>
            <script>
                const tagInput = document.getElementById('search-text');
                const saveTagsBtn = document.getElementById('search-btn');
                saveTagsBtn.addEventListener('click', () => {
                    localStorage.setItem('tag', tagInput.value);
                    // tagInput.value = '';
                });
            </script>
        </div>
    </div>

    <!-- MENU -->

    <div class="navbar-menu" id="navbar-menu-mobile">
        <ul class="navbar-menu_lists">
            <li class="navbar-menu_item navbar-menu_item-dropdown"><a href="../menu-product/all-product.html">Shop</a>
                <ion-icon class="arrow-down" id="btn-dropdown-down" name="chevron-down-outline"></ion-icon>
                <ion-icon class="arrow-up" name="chevron-up-outline"></ion-icon>
                <div class="dropdown-menu">
                    <ul class="dropdown-menu-lists">
                        <li class="dropdown-menu-item">
                            <a href="../menu-product/all-product.php">Tất cả</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="../menu-product/new-arrival.php">Sản phẩm mới</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="../menu-product/tee-shirt.php">Áo thun</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="../menu-product/pant.php">Quần</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="../menu-product/balo.php">Ba-lo</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="../menu-product/outwear.php">Áo khoác</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navbar-menu_item navbar-menu_item-underline navbar-menu_item-active"><a href="../navbar-sale-off/sale-off.html">Sale-off</a></li>
            <li class="navbar-menu_item navbar-menu_item-underline"><a href="../navbar-collection/collection.html">Bộ sưu tập</a></li>
            <li class="navbar-menu_item navbar-menu_item-underline"><a href="../navbar-about/about.html">Về chúng tôi</a></li>
        </ul>
    </div>

    <!-- final - pay -->

    <div class="container-pay">
        <div class="left-container">
            <h2 class="title-brand col1">LEVENTS</h2>
            <p class="title-pay col1">Cảm ơn bạn đã mua hàng</p>
            <p class="sub1 col1">Xin chào <b><i><?php echo $_SESSION['name-info']?></i></b> , Chúng tôi đã nhận được đặt hàng của bạn và đã sẵn sàng để vận chuyển.</p>
            <div class="line col2"></div>

            <div class="info-user">
                <h2 class="title-info title-detail col1">Thông tin khách hàng</h2>
                <p class="name-info info col1"> <strong>Họ và Tên:</strong>  <?php echo $_SESSION['name-info']?></p>
                <p class="email-info info col1"> <strong>Email:</strong>  <?php echo $_SESSION['name-email']?></p>
                <p class="address-info info col1"> <strong>Địa chỉ:</strong>  123 Đồng Tâm, Tân Xuân, Hóc Môn, TP.HCM</p>
                <p class="phone-info info col1"> <strong>SĐT:</strong> <?php echo $_SESSION['name-email']?></p>
                <?php
                    if (isset($_GET['banking'])){
                ?>
                    <p class="pay-what info col1"> <strong>Phương thức thanh toán:</strong>  Thanh toán qua thẻ tín dụng</p>
                    <p class="pay-arrive info col1"> <strong>Phương thức vận chuyển:</strong>  Nhận hàng 1 - 2 ngày</p>
                <?php
                    }else if (isset($_GET['cod'])){
                ?>
                    <p class="pay-what info col1"> <strong>Phương thức thanh toán:</strong>  Thanh toán khi giao hàng (COD)</p>
                    <p class="pay-arrive info col1"> <strong>Phương thức vận chuyển:</strong>  Nhận hàng 1 - 2 ngày</p>
                <?php
                    }
                ?>  
            </div>
        </div>
        <?php
            if (!isset($_SESSION['codeOrder'])){
                $_SESSION['codeOrder'] = 1;
            }
            $_SESSION['codeOrder']++;
            $count = $_SESSION['codeOrder'];
            $addressUser = $_GET['address-user'];
            $methodPayment = $_GET['banking'];
            $method = 0;
            if ($methodPayment == 'pt1'){
                $method = 2;
            }
            else if ($methodPayment == 'pt2'){
                $method = 1;
            }
            $totalFinal = 0;
            foreach($_SESSION['cart1'] as $cart_item){
                $total = $cart_item['amount'] * $cart_item['pricePr'];
                $totalFinal += $total;
            }
            $queryOrder = "INSERT INTO orderproduct VALUES($count, '{$_SESSION['name-info']}', '{$_SESSION['name-email']}', '{$_SESSION['name-numberphone']}','$addressUser',$totalFinal,'$method','{$_SESSION['name-id']}')";
            mysqli_query($conn, $queryOrder);
        ?>
        <?php
            if (isset($_SESSION['cart1'])){
        ?>
        <div class="right-container">
            <h2 class="title-detail">Thông tin đơn hàng</h2>
            <div class="product-pay-final">
                <?php
                    foreach($_SESSION['cart1'] as $cart_item){
                        $total = $cart_item['amount'] * $cart_item['pricePr'];
                        $totalFinal += $total;
                        $date_time = date("d-m-y");
                        $query = "INSERT INTO orderproductdetail VALUES('','{$cart_item['namePr']}','{$cart_item['pricePr']}','{$cart_item['imagePr']}', '{$cart_item['amount']}', (NOW()), 1, $count)";
                        mysqli_query($conn, $query);
                ?>
                <div class="left-pr-final">
                    <div class="detail-product-pay">
                        <div class="detail-product-pay-col1">
                            <img src="../<?php echo $cart_item['imagePr'] ?>" alt="">
                            <div class="detail-product-pay">
                                <p><?php echo $cart_item['namePr'] ?></p>
                                <p>x<?php echo $cart_item['amount'] ?></p>
                                <p>SIZE: <?php echo $cart_item['size'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="price-product-pay">
                        <p><?php echo number_format($total,0,',','.'). ' vnđ' ?></p>
                    </div>
                </div>
                <?php
                }
                ?>      
                <div class="line col2"></div>
                <div class="right-pr-final">
                    <p class="col2">Tổng giá trị sản phẩm: <?php echo number_format($totalFinal,0,',','.'). ' vnđ' ?></p>
                    <p class="col2">Khuyến mãi: 0 vnđ</p>
                    <p class="col2">Phí vận chuyển: 35.000 vnđ</p>
                    <?php $totalShipProduct = $totalFinal + 35000; ?>
                    <div class="line col2"></div>
                    <p class="col2">Tổng cộng: <strong><?php echo number_format($totalShipProduct,0,',','.'). ' vnđ' ?></strong></p>
                </div>
                <div class="see-back">
                    <p><a href="../detail-product/order-product.php">Xem lại đơn hàng</a></p>
                    <p><a href="../home.php">Đến cửa hàng của chúng tôi</a></p>
                </div>
            </div>
            
        </div>
        <?php
            }
        ?>
    </div>

    <?php
        unset($_SESSION['cart1']);
    ?>
    
    <!-- ADD-TO-CARD -->

    <div class="container-add-to-cart hide-add-to-card" id="show-itemBag">
        <div class="title-atc">
            <h3 class="name-cart">Giỏ Hàng</h3>
            <p class="close-atc">Đóng</p>
        </div>
        <div class="notification-bag">
            <p class="information-notification">Hiện tại bạn không có đơn hàng nào</p>
        </div>
        <div class="atc-bag"></div>
        <div class="pay-product">
            <button type="submit" class="pay-btn">Thanh toán</button>
            <p class="notification-pay hide-notification-pay"> <i>Bạn chưa có sản phẩm nào trong giỏ hàng!</i> </p>
        </div>
        <div class="total-atc">
            <h3 class="needPay"></h3>
            <h3 class="total-product">Tổng: &nbsp;</h3>
        </div>
    </div>

    

    <!-- FOOTER -->

    <footer>
        <div class="introduce-store">
            <div class="introduce-store-left">
                <h3 class="title-boid title-left">VỀ CHÚNG TÔI</h3>
                <p class="title-light">Levents® – Popular Streetwear Brand</p>
                <p class="title-light title-margin">HỘ KINH DOANH Levents
                    <br>
                    GPKD được cấp bởi Ủy ban nhân dân Quận 1– TP Hồ Chí Minh
                    <br>
                    Mã số thuế: 8547618080
                    <br>
                    Ngày cấp: 07/12/2020</p>
            </div>
            <div class="introduce-store-right">
                <div class="contract">
                    <ul class="contract-list">
                        <li class="contract-detail">
                            <h3 class="title-boid">LIÊN HỆ</h3>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light">Hotline</p>
                            <p class="title-boild title-boid-size">1900 633 028</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light">Email</p>
                            <p class="title-boild title-boid-size">Customercare@levents.asia</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light">Thứ 2 - Chủ Nhật</p>
                            <p class="title-boild title-boid-size">09:30 ~ 21:30</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light">Email Doanh Nghiệp</p>
                            <p class="title-boild title-boid-size">business@levents.asia</p>
                        </li>        
                    </ul>
                </div>
                <div class="store">
                    <ul class="contract-list">
                        <li class="contract-detail">
                            <h3 class="title-boid">CỬA HÀNG</h3>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">325 Hoàng Sa, Tân Định,
                                quận 1, HCM</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">The New Playground, 04 Phạm Ngũ Lão, quận 1, HCM</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">842 Sư Vạn Hạnh, phường 12, quận 10, HCM</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">54 Mậu Thân, Xuân Khánh, quận Ninh Kiều, Cần Thơ</p>
                        </li>         
                    </ul>
                </div>
                <div class="support">
                    <ul class="contract-list">
                        <li class="contract-detail">
                            <h3 class="title-boid">HỖ TRỢ</h3>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">LÌ VEN FABRIC</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">Tài khoản</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">Chính sách vận chuyển</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">Thanh toán online</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">Chính sách bảo mật thông tin
                            </p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">Chính sách bảo hành</p>
                        </li>   
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">Chính sách khiếu nại</p>
                        </li>      
                    </ul>
                </div>
                <div class="expand">
                    <ul class="contract-list">
                        <li class="contract-detail">
                            <h3 class="title-boid">LIÊN HỆ</h3>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">Tuyển Dụng</p>
                        </li>
                        <li class="contract-detail">
                            <p class="title-light title-boid-size">Blog</p>
                        </li>
                        <li class="contract-detail social-media">
                            <a href="https://www.facebook.com/profile.php?id=100010803722460"><ion-icon name="logo-facebook"></ion-icon></a>
                            <a href="https://www.instagram.com/minhtrung_sler/"><ion-icon name="logo-instagram"></ion-icon></a>
                            <a href="https://www.tiktok.com/@09062003hn"><ion-icon name="logo-tiktok"></ion-icon></a>
                            <a href="https://www.youtube.com/channel/UCDOHmjIGsiF64GNKpPP_9lw"><ion-icon name="logo-youtube"></ion-icon></a>
                        </li>
                </div>
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/addCard.js"></script>
    <script src="../js/searchMain.js"></script>
</body>
</html>