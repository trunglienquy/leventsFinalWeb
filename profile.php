<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- attention -->
    <link rel="stylesheet" href="./css/style-profile.css">
    <link rel="stylesheet" href="./js/product-main.js">
    <title>Trang chủ - Levents</title>
</head>
<body>

    <!-- MENU -->
    <?php
        include "login.php";
    ?>
    <div class="navbar">
        <div class="menu-mobile">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="menu-mobile-close menu-mobile">
            <ion-icon name="close-outline"></ion-icon>
        </div>
        <!-- attention -->
        <div class="navbar-logo"><a href="#"><img src="./img/logo.png" alt=""></a></div>
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
            <input type="submit" value="Search" id="search-btn">
        </div>
    </div>

    <!-- MENU -->

    <div class="navbar-menu" id="navbar-menu-mobile">
        <ul class="navbar-menu_lists">
            <li class="navbar-menu_item navbar-menu_item-dropdown"><a href="#">Shop</a> 
                <ion-icon class="arrow-down" id="btn-dropdown-down" name="chevron-down-outline"></ion-icon>
                <ion-icon class="arrow-up" name="chevron-up-outline"></ion-icon>
                <div class="dropdown-menu">
                    <ul class="dropdown-menu-lists">
                        <li class="dropdown-menu-item">
                            <a href="#">Tất cả</a>
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
            <li class="navbar-menu_item navbar-menu_item-underline navbar-menu_item-active"><a href="#">Sale-off</a></li>
            <li class="navbar-menu_item navbar-menu_item-underline"><a href="#">Collection</a></li>
            <li class="navbar-menu_item navbar-menu_item-underline"><a href="#">About</a></li>
        </ul>
    </div>

    <!-- main -->
    
    <div class="container">
        <div class="main-left">
            <div class="profile-user">
                <div class="profile-user-image">
                    <img src="https://levents.asia/wp-content/uploads/l60Hf-150x150.png" alt="">
                </div>
                <div class="profile-user-information">
                    <h3>
                        <?php
                            echo $_SESSION['name-info'];
                        ?>
                     </h3>
                    <p class="email-user">abc@gmail.com</p>
                </div>
            </div>
            <div class="profile-user-link">
                <ul class="list-link">
                    <li class="list-link-item col"><a href="./profile.php?profile=1">Thông tin cá nhân</a></li>
                    <li class="list-link-item col"><a href="./profile.php?profile=2">Sổ địa chỉ</a></li>
                    <li class="list-link-item col"><a href="./profile.php?profile=3">Đơn hàng của tôi</a></li>
                    <li class="list-link-item col"><a href="./profile.php?profile=4">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
        <?php
            if (isset($_GET['profile']) && $_GET['profile'] == 1){
        ?>
        <div class="main-right">
            <h2 class="title-main-right">Thông tin cá nhân</h2>
            <div class="col-main-right">
                <h3 class="col1">Họ và tên</h3>
                <p class="col1"><?php echo $_SESSION['name-info']?></p>
            </div>
            <div class="col-main-right">
                <h3 class="col1">Email</h3>
                <p class="col1"><?php echo $_SESSION['name-email']?></p>
            </div>
            <div class="col-main-right">
                <h3 class="col1">Số điện thoại</h3>
                <p class="col1"><?php echo $_SESSION['name-numberphone']?></p>
            </div>
            <div class="col-main-right">
                <h3 class="col1">Ngày sinh</h3>
                <p class="col1"><?php echo $_SESSION['name-birthday']?></p>
            </div>
        </div>
        <?php
            }
        ?>
        <?php
            if (isset($_GET['profile']) && $_GET['profile'] == 2){
        ?>
        <div class="main-right">
            <h2 class="title-main-right">Thông tin cá nhân</h2>
            <div class="col-main-right">
                <h3 class="col1">Ngày sinh</h3>
                <p class="col1"><?php echo $_SESSION['name-birthday']?></p>
            </div>
        </div>
        <?php
            }
        ?>
        <?php
            $query = "SELECT * FROM orderproduct WHERE idCustomer = '{$_SESSION['name-id']}'";
            $bag = mysqli_query($conn, $query);
            $check = mysqli_num_rows($bag);
            if (isset($_GET['profile']) && $_GET['profile'] == 3 && $check > 0){
                while($conn = mysqli_fetch_array($bag)){
        ?>
        <div class="main-right">
            <h2 class="title-main-right">Đơn hàng của tôi</h2>
            <div class="bag-order">
                <table>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Trạng thái</th>
                    </tr>
                    <tr>
                        <td><?php echo $conn['idOrder'] ?></td>
                        <td><?php echo $conn['dateOrder'] ?></td>
                        <td><?php echo $conn['nameProductOrder'] ?></td>
                        <td><?php echo $conn['quanityProductOrder'] ?></td>
                        <td><?php echo $conn['priceProductOrder'] ?></td>
                        <td>
                            <?php 
                                $noti_check = "Chưa rõ";
                                if($conn['status'] == 1){
                                    $noti_check = "Đang chờ được duyệt";
                                }
                                else if ($conn['status'] == 2){
                                    $noti_check = "Hoàn thành";
                                }
                                else if ($conn['status'] == 3){
                                    $noti_check = "Hủy";
                                }
                                echo $noti_check;
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php
                }
            } else if (isset($_GET['profile']) && $_GET['profile'] == 3 && $check == 0){
        ?>
            <div class="main-right">
                <h2 class="title-main-right">Đơn hàng của tôi</h2>
                <div class="bag-order">
                    <table>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Trạng thái</th>
                        </tr>
                        <tr>
                            <td colspan="6">Hiện tại bạn không có đơn hàng nào</td>
                        </tr>
                    </table>
            </div>
        </div>
        <?php
            } else if (isset($_GET['profile']) && $_GET['profile'] == 4){
                if (isset($_SESSION['test'])){
                    $home_path = 'http://localhost/levents-web-main/home.php'; // replace with your file path
                    echo '<meta http-equiv="refresh" content="0; URL=' . $home_path . '">';
                    unset($_SESSION['test']);
                }
                else{
                    $home_path = 'http://localhost/levents-web-main/home.php'; // replace with your file path
                    echo '<meta http-equiv="refresh" content="0; URL=' . $home_path . '">';
                }
            }
        ?>
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
    <script src="./js/addCard.js"></script>
    <script src="./js/searchMain.js"></script>
</body>
</html>