<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- attention -->
    <link rel="stylesheet" href="./css/style-pay.css">
    <link rel="stylesheet" href="../js/product-main.js">
    <title>Trang chủ - Levents</title>
</head>
<body>

    <?php
    require('../login.php');
    if (isset($_SESSION['test']) && ($_SESSION['test'] != "")){
        $_SESSION['cartFinal'] = $_SESSION['cart1'];
    }
    else{
        header('location: ../login.html');
    }
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

    <!-- PAY PRODUCT -->

    <div class="container-pay">
        <div class="information-user">
            <form action="../final-pay/final-pay.php" method="get">
                <?php
                    if(isset($_SESSION['test']) && $_SESSION['test'] != ""){
                ?>
                <h3 class="title-pay col">THÔNG TIN GIAO HÀNG</h3>
                <div class="col-IFU-1 col">
                    <input type="text" name="name-user" placeholder="Họ và tên" value="<?php echo $_SESSION['name-info'] ?>">
                </div>
                <div class="col-IFU-2 col">
                    <input type="email" name="email-user" id="" placeholder="Email" value="<?php echo $_SESSION['name-email'] ?>">
                    <input type="tel" name="tel-user" id="" placeholder="Số điện thoại" value="<?php echo $_SESSION['name-numberphone'] ?>">
                </div>
                <div class="col-IFU-3 col">
                    <input type="date" name="date-user" id="" class="date-user" placeholder="Ngày sinh">
                    <input type="text" name="address-user" id="" placeholder="Địa chỉ" class="address-user">
                </div>
                <div class="col-IFU-4 col">
                    <select name="city" id="province" class="address-detail-user">
                        <option value="">--- Chọn Tỉnh/Thành Phố ---</option>
                    </select>
                    <select name="city2" id="district" class="address-detail-user">
                    <option  value="">-- Chọn Quận/Huyện --</option>
                    </select>
                    <select name="city3" id="ward" class="address-detail-user">
                    <option   value="">-- Chọn Phường/Xã --</option>
                    </select>
                </div>
                <div class="confirm-product-pay col">
                    <p class="continue-pay">
                        <a href="../menu-all-product/all-product.html"> << Tiếp tục mua sắm</a>
                    </p>
                    <p class="confirm-pay">
                        <button class="btn-confirm" onclick="location.href='../final-pay/final-pay.html'">Xác nhận</button>
                    </p>
                </div>
                <h3 class="title-pay col">PHƯƠNG THỨC THANH TOÁN</h3>
                <div class="categories-pay">
                    <div class="sub-cate-pay-1">
                        <div class="check-pay col-1">
                            <input type="checkbox" name="banking" id="sub-cates-1" value="pt1">
                            <p>Chuyển khoản</p>
                        </div>
                        <p class="sub-cates col-1 hide-cates sub-cates-1" >
                            Thực hiện thanh toán của bạn trực tiếp vào tài khoản ngân hàng của chúng mình. Vui lòng sử dụng ID đơn đặt hàng của bạn làm tham chiếu thanh toán. Đơn đặt hàng của bạn sẽ không được chuyển cho đến khi tài khoản của chúng mình thông báo đã nhận.
                        </p>
                    </div>
                    <div class="sub-cate-pay-1">
                        <div class="check-pay col-1">
                            <input type="checkbox" name="banking" id="sub-cates-2" value="pt2">
                            <p>Thanh toán khi nhận hàng</p>
                        </div>
                        <p class="sub-cates col-1 hide-cates sub-cates-2" >
                            Thanh toán bằng tiền mặt khi giao hàng.
                        </p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </form>
        </div>
        <?php
            $totalFinal = 0;
        ?>
        <div class="information-product-pay">
            <h3 class="title-pay col">GIỎ HÀNG</h3>

            <?php 
                    foreach($_SESSION['cart1'] as $cart_item){
                        $total = $cart_item['amount'] * $cart_item['pricePr'];
                        $totalFinal += $total;
            ?>
            <div class="all-product-pay">
                <div class="product-pay-child">
                    <div class="img-product-pay-child">
                        <img src="../<?php echo $cart_item['imagePr']?>">
                    </div>
                    <div class="info-product-pay-child">
                        <p class="title-detail-product-pay col-1"><?php echo $cart_item['namePr']?></p>
                        <p class="size-product-pay col-1">Size SIZE <?php echo $cart_item['size']?></p>
                        <div class="amount-product-pay col-1">
                            <p class="sub-1-pay">x <?php echo $cart_item['amount']?></p>
                            <p class="sub-1-pay"><?php echo number_format($total,0,',','.'). ' vnđ' ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                } 
                ?>
                <div class="total-product">
                    <h3>Thành tiền: <?php echo number_format($totalFinal,0,',','.'). ' vnđ' ?></h3>
                </div>
                <div class="backToBag">
                    <a href="../detail-product/order-product.php">Quay lại giỏ hàng</a>
                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="./js/main.js"></script>
</body>
</html>