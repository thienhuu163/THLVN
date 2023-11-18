<?php session_start(); ?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta ten="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/giaodien.css">
    </head>
    <body>
	<?php
        
        include './connect_db.php';
        include 'function.php';
        if (!empty($_SESSION['username'])) {
            ?>
		<header>
	         <nav class="container">
                <div class="logo-main-menu">
                    <a href="" id="logo">
                        <img src="images/logoTHLVN.jpg" alt="BOOKSTORE" width="200px">
                    </a> 
                </div>
                <footer>
                    <div id ="top-bot">
                        <div><h1>Thông Tin Liên Hệ </h1></div>
                        <div id ="ngang">
                            <div>
                                <ul>
                                    <li id = "ngang"><img src="images/vtri.png"><span><h3><b>      170 An Dương Vương , TP.Quy Nhơn , Tỉnh Bình Định</b></h3></span></li>
                                    <li id = "ngang" ><img src ="images/homthu.jpg"><span><h3><b>   bookstore@gmail.com</b></h3></span></li>
                                    
                                </ul>
                            </div>
                            <div>
                                <ul>
                                    <li id = "ngang"><img src ="images/web.png"><span><h3><b> WWW.bookstore.com.vn</b></h3></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </footer>
                <div class="main-menu-right">
                    <ul id="main-menu-right2">
                        <li>
                            <div id="top-bot">
                                <a><img src = "images/tk.jpg" width = "50" ></a>
                                <a href="http://localhost/Web_TLam/admin1/index.php">    Tài Khoản </a>
                            </div>
                        </li>
                        <li>
                            <div id="top-bot">
                                <a href="http://localhost/bansach/THLVN/giohang.php"><img src = "images/R.png" width = "50" ></a>
                            <a>Giỏ Hàng </a>
                            </div>
                        </li>
                    </ul>
                </div>
             </nav>
        </header>
        <div >
		
            <ul id="main-menu">
                <li ><a href="" class="active"> TRANG CHỦ</a></li>
                <li><a href=""> GIỚI THIỆU</a></li>
                <li><a href=""> THỂ LOẠI SÁCH</a></li>
                <li><a href=""> HỖ TRỢ</a></li>
                <li><a href=""> TÌM KIẾM</a></li>
                <li><a href=""><input  type="text" value="" id ="search"></a></li>
            </ul>
		<?php } ?>
        </div>
</body>
</html>