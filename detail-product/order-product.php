<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- attention -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../js/product-main.js">
    <title>Trang chủ - Levents</title>
</head>

<body>

    <?php
    require("orderWait.php");
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

    <h3 class="titleBag">GIỎ HÀNG</h3>

    <?php
        $totalFinal = 0;
    ?>
    <div class="bag">
        <table>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Size</th>
                <th>Giá</th>
                <th>Thành tiền</th>
                <th>Quản lý</th>
            </tr>
            <?php
                if (isset($_SESSION['cart1'])){
                    $i = 0;
                    foreach($_SESSION['cart1'] as $cart_item){
                        $total = $cart_item['amount'] * $cart_item['pricePr'];
                        $totalFinal += $total;
                        $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $cart_item['namePr']?></td>
                <td class="flex-td">
                    <div class="flex-td-col">
                        <a href="./orderWait.php?add=<?php echo $cart_item['id'] ?>"><ion-icon name="add-outline"></ion-icon></a>
                        <?php echo $cart_item['amount'] ?>
                        <a href="./orderWait.php?sub=<?php echo $cart_item['id'] ?>"><ion-icon name="remove-outline"></ion-icon></a>
                    </div>
                    <span><i>Bạn có thể thay đổi số lượng sản phẩm của bạn</i></span>
                </td>
                <td>Size: <?php echo $cart_item['size']?></td>
                <td><?php echo number_format($cart_item['pricePr'],0,',','.'). ' vnđ' ?></td>
                <td><?php echo number_format($total,0,',','.'). ' vnđ'?></td>
                <td><a href="./orderWait.php?remove=<?php echo $cart_item['id'] ?>" class="removeProduct">Xóa</a></td>
            </tr>
            <?php
                    }
                }
                else{
            ?>
             <tr>
                <td colspan="7"><p>Hiện tại giỏ hàng của bạn đang trống</p></td>
            </tr>
            <?php
                }
            ?>
             <tr>
                <td colspan="6">Tổng tiền</td>
                <td><?php echo number_format($totalFinal,0,',','.'). ' vnđ' ?></td>
            </tr>
        </table>
        <div class="removeAll">
            <a href="./orderWait.php?removeall=1" class="removeProduct">Xóa tất cả</a>
        </div>
    </div>


    <div class="btnOrderConfirm">
        <a href="../pay-product/pay.php"><input type="submit" value="Tiếp theo"></a>
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
                            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                            <a href="#"><ion-icon name="logo-tiktok"></ion-icon></a>
                            <a href="#"><ion-icon name="logo-youtube"></ion-icon></a>
                        </li>
                </div>
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/searchMain.js"></script>
</body>

</html>