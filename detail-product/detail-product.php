<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-product.css">
    <title>DORAEMON phổ biến "mèo" áo thun - Levents</title>
</head>
<body>

<?php
    include '../login.php';
    if (isset($_GET['submit-order'])){
        $_SESSION["test"] = $_GET["size-shirt"];
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

    <!-- INFORMATION PRODUCT -->

    <?php
        $conn = mysqli_connect("localhost", "root", "", "pjweb");
        $product = mysqli_query($conn, "SELECT * FROM `allproduct` WHERE idProduct = ". $_GET['id']);
        $result = mysqli_fetch_assoc($product);
        $test = $_GET['id'];
    ?>

    <div class="container-product">
        <div class="img-product">
            <img src="../<?= $result['imageFrontProduct']?>" alt="" id="productImg">
            <div class="small-image-product">
                <img src="./img/child1.jpg" alt="" width="100%" class="small-product-child">
                <img src="./img/child2.jpg" alt="" width="100%" class="small-product-child">
                <img src="./img/child3.jpg" alt="" width="100%" class="small-product-child">
                <img src="./img/child4.jpg" alt="" width="100%" class="small-product-child">
                <img src="./img/child5.jpg" alt="" width="100%" class="small-product-child">
                <img src="./img/child6.jpg" alt="" width="100%" class="small-product-child">
            </div>
        </div>
        <div class="detail-product">
            <form action="./orderWait.php?id=<?php echo $test?>" method="post">
                <div class="col-product boil-title name-product"> <input type="hidden" name="name"> <h3><?= $result['nameProduct']?></h3> </div>
                <div class="col-product light-title price-product" id="price2"> <h3><?= $result['priceProduct']?></h3> </div>
                <div class="col-product light-title size-product">
                    <p>Size:</p>
                    <br>
                    <select name="size-shirt" id="size-shirt" onchange="getSelection();">
                        <option value="1" selected>SIZE 1</option>
                        <option value="2">SIZE 2</option>
                        <option value="3">SIZE 3</option>
                        <option value="4">SIZE 4</option>
                    </select>
                </div>
                <div class="col-product light-title amount-product"></div>
                <div class="col-product light-title buy-product">
                    <button type="submit" class="button-submit" name="submit-order">Thêm vào giỏ</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container-detail">
        <div class="boil-title information-product" id="information-product">
            <button onclick="showInfo()">Thông tin</button>
            <div class="information-product-detail" id="information-product-detail">
                <p class="light-title">
                    LEVENTS® | DORAEMON phổ biến "mèo" áo thun
                    <br>
                    CHẤT LIỆUL: LÌ VEN ORIGINAL – Phiên bản bề mặt vải không đổ lông mang cảm giác thoáng mát
                    <br>
                    SIZE: 1/2/3/4
                    <br>
                    Sản phẩm thuộc BST "đặc biệt" "Làm mọi thứ trở nên phổ biến" DORAEMON | LEVENTS®
                </p>
            </div> 
        </div>
        <div class="boil-title information-product">
            <button onclick="showSize()">Bảng Size</button>
            <div class="information-product-detail" id="information-product-size">
                <p class="light-title">
                    Form áo được Fit size theo form và tiêu chuẩn tương đối của người Việt Nam, nếu bạn đang cân nhắc giữa hai size, nên chọn size lớn hơn.
                    <br>
                    <br>
                    Size 1: Chiều cao từ 1m50 – 1m65, cân nặng trên 55kg <br>
                    Size 2: Chiều cao từ 1m65 – 1m72, cân nặng dưới 65kg <br>
                    Size 3: Chiều cao từ 1m70 – 1m77, cân nặng dưới 80kg <br>
                    Size 4: Chiều cao trên 1m72, cân nặng dưới 95kg. <br>
                </p>
                <img src="../img/Website-Popular-cat-tee-Mau-xam-100.jpg" alt="">
            </div> 
        </div>
        <div class="boil-title information-product">
            <button onclick="showRefund()">Quy định đổi trả</button>
            <div class="information-product-detail" id="information-product-refund">
                <p class="light-title">
                    Nhằm mang lại cho bạn sự tiện lợi và những trải nghiệm tuyệt vời khi mua hàng, tụi mình đã phát triển dịch vụ đổi hàng tận nơi và chính sách bảo hành.
                </p>
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
    <script src="../js/product-main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/addCard.js"></script>
    <script src="../js/searchMain.js"></script>
    <script>
        //product-child
        var productImg = document.getElementById("productImg")
        var productChild = document.getElementsByClassName("small-product-child")
        productChild[0].onclick = function(){
            productImg.src = productChild[0].src
        }
        productChild[1].onclick = function(){
            productImg.src = productChild[1].src
        }
        productChild[2].onclick = function(){
            productImg.src = productChild[2].src
        }
        productChild[3].onclick = function(){
            productImg.src = productChild[3].src
        }
        productChild[4].onclick = function(){
            productImg.src = productChild[4].src
        }
        productChild[5].onclick = function(){
            productImg.src = productChild[5].src
        }
    </script>
</body>
</html>