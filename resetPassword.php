<html lang="en">

<body>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style-login-register.css">
        <link rel="stylesheet" href="./js/product-main.js">
        <title>Trang chủ - Levents</title>
    </head>

    <div class="navbar">
        <div class="menu-mobile">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="menu-mobile-close menu-mobile">
            <ion-icon name="close-outline"></ion-icon>
        </div>
        <!-- attention -->
        <div class="navbar-logo"><a href="./home.html"><img src="./img/logo.png" alt=""></a></div>
        <div class="navbar-icon">
            <ul class="navbar-icon_lists">
                <li class="navbar-icon_item navbar-icon_search"><a href="#"><ion-icon name="search-outline"></ion-icon></a></li>
                <li class="navbar-icon_item navbar-icon_bag"><a href="#"><ion-icon name="bag-handle-outline"></ion-icon></a></li>
                <li class="navbar-icon_item"><a href="#"><ion-icon name="person-outline"></ion-icon></a></li>
            </ul>
        </div>
    </div>

    <!-- SEARCH-BOX -->

    <div class="search-box hide-search">
        <div class="search-close"><ion-icon name="close-outline"></ion-icon></div>
        <div class="search-buttons">
            <input type="text" id="search-text">
            <input type="submit" value="Search" id="search-btn" onclick="location.href='./search-result/search-result.html'">
        </div>
        <div class="advance-search">
            <select name="" id="categories">
                <option value="default" selected disabled>Loại</option>
                <option value="all" class="col-op">Tất cả</option>
                <option value="new" class="col-op">Sản phẩm mới</option>
                <option value="tee" class="col-op">Áo thun</option>
                <option value="pant" class="col-op">Quần</option>
                <option value="balo" class="col-op">Ba lô</option>
                <option value="outwear" class="col-op">Áo khoác</option>
                <option value="pk" class="col-op">Phụ kiện </option>
            </select>
            <select name="" id="price">
                <option value="default" class="col-op">Giá</option>
                <option value="100" class="col-op">Dưới 100.000 vnđ</option>
                <option value="100+" class="col-op">Từ 200.000 vnđ - 500.000 vnđ</option>
                <option value="100++" class="col-op">Trên 500.000 vnđ</option>
            </select>
            <button id="submitAdvance">Xác nhận</button>
        </div>
    </div>

    <!-- MENU -->

    <div class="navbar-menu" id="navbar-menu-mobile">
        <ul class="navbar-menu_lists">
            <li class="navbar-menu_item navbar-menu_item-dropdown"><a href="./menu-product/all-product.html">Shop</a>
                <ion-icon class="arrow-down" id="btn-dropdown-down" name="chevron-down-outline"></ion-icon>
                <ion-icon class="arrow-up" name="chevron-up-outline"></ion-icon>
                <div class="dropdown-menu">
                    <ul class="dropdown-menu-lists">
                        <li class="dropdown-menu-item">
                            <a href="./menu-product/all-product.html">Tất cả</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./menu-product/new-arrival.html">Sản phẩm mới</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./menu-product/tee-shirt.html">Áo thun</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./menu-product/pant.html">Quần</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./menu-product/balo.html">Ba-lo</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./menu-product/outwear.html">Áo khoác</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./menu-product/pk.html">Phụ kiện</a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="dropdown-menu-mobile">
                    <ul class="dropdown-menu-lists">
                        <li class="dropdown-menu-item">
                            <a href="./all-product.html">Tất cả</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#">New Arrival</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#">Áo thun</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#">Quần</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#">Ba-lo</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#">Outwear</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#">Phụ kiện</a>
                        </li>
                    </ul>
                </div> -->
            </li>
            <li class="navbar-menu_item navbar-menu_item-underline navbar-menu_item-active"><a href="./navbar-sale-off/sale-off.html">Sale-off</a></li>
            <li class="navbar-menu_item navbar-menu_item-underline"><a href="./navbar-collection/collection.html">Bộ sưu tập</a></li>
            <li class="navbar-menu_item navbar-menu_item-underline"><a href="./navbar-about/about.html">Về chúng tôi</a></li>
        </ul>
    </div>

    <!-- LOGIN -->

    <div class="login-form">
        <h3 class="login-form_title">MẬT KHẨU MỚI</h3>
        <form action="forgotPassword.php" method="post">
            <form name="loginForm">
                <div class="form-group">
                    <input type="text" class="user-name" name="user-email" id="nameUser" value="">
                </div>
    </div>
    </form>
    </div>

    <script>
            const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+";
            let password = "";
            for (let i = 0; i < 10; i++) {
                password += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.querySelector(".user-name").value = password;
    
    </script>
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
                    Ngày cấp: 07/12/2020
                </p>
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
    <script src="./js/addCard.js"></script>
    <script src="./js/searchMain.js"></script>

</body>

</html>