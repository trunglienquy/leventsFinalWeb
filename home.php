<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./js/product-main.js">
    <title>Trang chủ - Levents</title>
</head>
<body>
    <!-- MENU -->
    
    <div class="navbar">
        <div class="menu-mobile">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="menu-mobile-close menu-mobile">
            <ion-icon name="close-outline"></ion-icon>
        </div>
        <div class="navbar-logo"><a href="./home.html"><img src="./img/logo.png" alt=""></a></div>
        <div class="navbar-icon">
            <ul class="navbar-icon_lists">
                <li class="navbar-icon_item navbar-icon_search"><a href="#"><ion-icon name="search-outline"></ion-icon></a></li>
                <li class="navbar-icon_item navbar-icon_bag"><a href="#"><ion-icon name="bag-handle-outline"></ion-icon></a></li>
                <?php
                include 'login.php';
                    if (isset($_SESSION['test']) && ($_SESSION['test'] != "")){
                        echo '<li class="navbar-icon_item"><a href="./profile.php"><ion-icon name="person-outline"></ion-icon></a></li>';
                    }
                    else{
                        echo '<li class="navbar-icon_item"><a href="./login.html"><ion-icon name="person-outline"></ion-icon></a></li>';
                    }
                ?>
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
            </li>
            <li class="navbar-menu_item navbar-menu_item-underline navbar-menu_item-active"><a href="./navbar-sale-off/sale-off.html">Sale-off</a></li>
            <li class="navbar-menu_item navbar-menu_item-underline"><a href="./navbar-collection/collection.html">Bộ sưu tập</a></li>
            <li class="navbar-menu_item navbar-menu_item-underline"><a href="./navbar-about/about.html">Về chúng tôi</a></li>
        </ul>
    </div>
    <!-- BANNER -->

    <div class="banner">
        <div class="banner-product">
            <img src="./img/banner.jpg" alt="">
        </div>
        <div class="banner-collection">
            <form action="./navbar-collection/collection-doraemon.html">
                <button class="btn-banner">Levents BST MỚI!</button>
            </form>
        </div>
    </div>

    <!-- PRODUCT -->

    <h2 class="name-intro">BỘ SƯU TẬP MỚI</h2>
    <div class="product">
        <?php for ($i = 0; $i < 12; $i++) { ?>
        <div class="product-row">
            <a href="./detail-product/tee-shirt-1.html">
                <div class="product-item">
                    <img src="./img/pr1F.jpg" alt="" class="product-item-back">
                    <img src="./img/pr1.png" alt="" class="product-item-font">
                    <h3 class="name-product-item">Levents - TEE SHIRT NEW</h3>
                    <h3 class="price-product-item">395,000 vnđ</h3>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
    <div class="see-more" onclick="">
        <a href="./menu-product/all-product.html" class="see-more-title">Xem Thêm</a>
    </div>

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


    <!-- VIDEO MAKE A SHIRT -->

    <div class="banner-video">
        <h3 class="title-banner-video">Cách chúng tôi kiếm 1 triệu cái áo</h3>
        <div class="video-make-shirt">
            <video autoplay loop muted src="https://levents.asia/wp-content/uploads/2022/05/low-20mb-test-.mp4"></video>
        </div>
    </div>

    <!-- ADDRESS STORE -->

    <div class="address-store">
        <div class="map-store">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.438936915154!2d106.66656!3d10.777655!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x303d1df7f8ed6194!2zTEVWRU5UU8Ku!5e0!3m2!1svi!2sus!4v1669347312215!5m2!1svi!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div>
        <div class="support-user">
            <h4 class="title-address-store col">
                GỬI TIN NHẮN NGAY CHO LEVENTS
                <br>
                KHI BẠN CẦN HỖ TRỢ HOẶC CÓ THẮC MẮC NHÉ!    
            </h4>
            <div class="col-sp-user-1 col">
                <input type="text" class="name-user" placeholder="Họ và tên">
            </div>
            <div class="col-sp-user-2 col">
                <input type="text" class="email-user" placeholder="Email">
                <input type="text" class="phone-user" placeholder="Số điện thoại">
            </div>
            <div class="col-sp-user-3 col">
                <textarea cols="30" rows="10" class="text-user" placeholder="Lời nhắn của bạn"></textarea>
            </div>
            <div class="col-sp-user-4">
                <button type="submit">Gửi</button>
            </div>
            <div class="notification-sp-user hide-notification-sp-user">
                <p> <i>Phản hồi của bạn đã được ghi nhận!. Cảm ơn bạn đã đóng góp ý kiến 💙</i> </p>
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
    <script src="./js/addCard.js"></script>
    <script src="./js/searchMain.js"></script>
    <script src="./js/serachResult.js"></script>
    <script>
        // hide submit home page
        const btnSubmitHomePage = document.querySelector(".col-sp-user-4")
        const notificationBtnSHP = document.querySelector(".notification-sp-user")
        btnSubmitHomePage.addEventListener("click", function(){
            notificationBtnSHP.classList.remove("hide-notification-sp-user")
        })
    </script>
</body>
</html>