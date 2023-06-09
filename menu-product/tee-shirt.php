<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-all-product.css">
    <link rel="stylesheet" href="../js/product-main.js">
    <title>Áo thun - Levents</title>
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
        <div class="navbar-logo"><a href="../home.php"><img src="../img/logo.png" alt=""></a></div>
        <div class="navbar-icon">
            <ul class="navbar-icon_lists">
                <li class="navbar-icon_item navbar-icon_search"><a href="#"><ion-icon name="search-outline"></ion-icon></a></li>
                <li class="navbar-icon_item navbar-icon_bag"><a href="../detail-product/order-product.php"><ion-icon name="bag-handle-outline"></ion-icon></a></li>
                <?php
                include '../login.php';
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
                            <a href="./all-product.php">Tất cả</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./new-arrival.php">Sản phẩm mới</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./tee-shirt.php">Áo thun</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./pant.php">Quần</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./balo.php">Ba-lo</a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="./outwear.php">Áo khoác</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="navbar-menu_item navbar-menu_item-underline navbar-menu_item-active"><a href="../navbar-sale-off/sale-off.html">Sale-off</a></li>
            <li class="navbar-menu_item navbar-menu_item-underline"><a href="../navbar-collection/collection.html">Bộ sưu tập</a></li>
            <li class="navbar-menu_item navbar-menu_item-underline"><a href="../navbar-about/about.html">Về chúng tôi</a></li>
        </ul>
    </div>

    <?php
    // session_start();
    $conn = mysqli_connect("localhost", "root", "", "pjweb");
    //paging - offset = (currentPage - 1) * itemHavePage;
    $itemOfPage = !empty($_GET['itemOfPage']) ? $_GET['itemOfPage'] : 8;
    // $itemOfPage = 1; //test btn next, prev, toFirstPage, toEndPage
    $currentPage = !empty($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $itemOfPage;
    $product = mysqli_query($conn, "SELECT * FROM `allproduct` WHERE catagories = 1 ORDER BY 'idProduct' ASC LIMIT " . $itemOfPage . " OFFSET " . $offset . "");
    //create paging
    $totalProduct = mysqli_query($conn, "SELECT * FROM `allproduct` WHERE catagories = 1");
    $totalProduct = $totalProduct->num_rows;
    //ceil dùng để làm tròn số trang
    $totalPage = ceil($totalProduct / $itemOfPage);
    ?>

    <!-- PRODUCT -->

    <h2 class="name-intro">ÁO THUN</h2>
    <div class="sort-filter">
        <ion-icon name="funnel-outline" class="icon-sort"></ion-icon>
        <p>Bộ lọc</p>
        <form action="../sorting/sorting.php" method="GET">
            <div class="main-filter hide-sort">
                <ion-icon name="close-outline" class="close-icon-sort"></ion-icon>
                <div class="product-sort">
                    <h3>Sản phẩm</h3>
                    <select name="select-sort" id="selectSort">
                        <option value="1">Áo thun</option>
                        <option value="2">Quần</option>
                        <option value="3">Ba-lô</option>
                        <option value="4">Áo khoác</option>
                        <option value="5">Phụ kiện</option>
                    </select>
                </div>
                <div class="product-sort">
                    <h3>Lọc theo</h3>
                    <select name="select-sort2" id="selectSort2">
                        <option value="1">Sắp xếp từ A -> Z</option>
                        <option value="2">Sắp xếp từ Z -> A</option>
                        <option value="3">Giá cao đến thấp</option>
                        <option value="4">Giá thấp đến cao</option>
                    </select>
                </div>
                <div class="product-sort">
                    <h3>Giá khoảng</h3>
                    <div class="priceSort">
                        <div class="price-from-col">
                            <p>Giá từ</p> <input type="text" name="priceFrom" class="text-price" value="0"> 
                        </div>
                        <div class="price-from-col">
                            <p>Đến</p> <input type="text" name="priceTo" class="text-price" value="2000000">
                        </div>
                    </div>
                </div>
                <div class="btn-sort">
                    <input type="submit" value="Lọc sản phẩm" name="submit-sort">
                </div>
            </div>
        </form>
    </div>
    <div class="product">

        <?php
        while ($conn = mysqli_fetch_array($product)) {
        ?>
            <div class="product-row">
            <a href="../detail-product/detail-product.php?id=<?= $conn['idProduct'] ?>">
                <div class="product-item">
                    <img src="../<?= $conn['imageFrontProduct'] ?>" alt="" class="product-item-back">
                    <img src="../<?= $conn['imageAfterProduct'] ?>" alt="" class="product-item-font">
                    <h3 class="name-product-item"><?= $conn['nameProduct'] ?></h3>
                    <h3 class="price-product-item"><?= $conn['priceProduct'] ?></h3>
                </div>
            </a>
        </div>
        <?php
        }
        ?>

    </div>
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

    <!-- PAGING -->

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

    <!-- PAGING -->

    <div class="paging">
        <ul class="paging-lists">
            <?php
            if ($currentPage > 3) {
            ?>
                <li class="paging-item"><a href="?itemOfPage=<?= $itemOfPage ?>&page=1">
                        <=< /a>
                </li>
            <?php
            }
            ?>
            <?php
            if ($currentPage > 1) {
            ?>
                <li class="paging-item"><a href="?itemOfPage=<?= $itemOfPage ?>&page=<?= $currentPage - 1 ?>">
                        <<< /a>
                </li>
            <?php
            }
            ?>
            <?php
            for ($i = 1; $i <= $totalPage; $i++) {
                if ($i != $currentPage) {
                    if ($i > $currentPage - 3 && $i < $currentPage + 3) {
            ?>
                        <li class="paging-item" onclick="activeLink()"><a href="?itemOfPage=<?= $itemOfPage ?>&page=<?= $i ?>"><?= $i ?></a></li>
                    <?php
                    }
                } else {
                    ?>
                    <li class="paging-item active-paging"><a href="?itemOfPage=<?= $itemOfPage ?>&page=<?= $i ?>"><?= $i ?></a></li>
            <?php
                }
            }
            ?>
            <?php
            if ($currentPage < $totalPage - 1) {
            ?>
                <li class="paging-item"><a href="?itemOfPage=<?= $itemOfPage ?>&page=<?= $currentPage + 1 ?>">>></a></li>
            <?php
            }
            ?>
            <?php
            if ($currentPage < $totalPage - 2) {
            ?>
                <li class="paging-item"><a href="?itemOfPage=<?= $itemOfPage ?>&page=<?= $totalPage ?>">=></a></li>
            <?php
            }
            ?>
        </ul>
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
    <script>
        var sort = document.querySelector(".icon-sort")
        var sortClose = document.querySelector(".close-icon-sort")
        var mainSort = document.querySelector(".main-filter")
        sort.addEventListener("click", function() {
            mainSort.classList.remove("hide-sort");
        })
        sortClose.addEventListener("click", function() {
            mainSort.classList.add("hide-sort");
        })
    </script>
</body>
</html>