<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/giaodien.css">
	<title>BOOKSTORE</title>
    
</head>
<body>
        <?php include 'header.php';?>
        <?php
                
                include './connect_db.php';
                $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:10;
                $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
                $offset = ($current_page - 1) * $item_per_page;// sản phẩm bắt đầu từ offset trong database
                $products = mysqli_query($kn, "SELECT * FROM `sanpham` ORDER BY `id_sp` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
                $totalRecords = mysqli_query($kn, "SELECT * FROM `sanpham`");//tổng số sản phẩm
                $totalRecords = $totalRecords->num_rows;
                //ceil làm tròn
                $totalPages = ceil($totalRecords / $item_per_page);//tổng số trang
                mysqli_close($kn);
        ?>

        <section class="products">
            <div class="products-content">

                <?php                                   
                    while($row = mysqli_fetch_array($products)) { 
                        if($row['soluong']>0){
                ?>
                        <ul>
                            <div class="product">
                                <div class="product__avatar">
                                    <a href="" ><img src="<?=$row['hinh_sp'] ?>" title="<?= $row['ten_sp']?>" class="product__avatar--front"/></a>
                                    <a href="" ><img src="<?=$row['hinh_sp'] ?>" title="<?= $row['ten_sp']?>" class="product__avatar--back"/></a>
                                </div>
                                <div class="product__name"><a href=""><?= $row['ten_sp']?></div>    
                                <div class="product__price">
                                    <span><a href="">Giá: <?= number_format($row['gia'], 0, ",", ".") ?></a><span>đ</span></span>
                                </div>
                                    <p><?= $row['chitiet'] ?></p>
                                    <br>
                                        <div class="buy-button">
                                            <form id="add-to-cart-form" action="cart.php?action=add" method="POST" >
                                                <input type="text" value="1" name="quantity[<?= $row['id_sp']?>]">
                                                <input type="submit" value="Mua sản phẩm" />
                                            </form>
                                        </div>
                            </div>  
                        </ul>
                <?php } else {
                    ?>
                        <ul>
                            <div class="product">
                                <div class="product__avatar">
                                    <a href="" ><img src="<?=$row['hinh_sp'] ?>" title="<?= $row['ten_sp']?>" class="product__avatar--front"/></a>
                                    <a href="" ><img src="<?=$row['hinh_sp'] ?>" title="<?= $row['ten_sp']?>" class="product__avatar--back"/></a>
                                </div>
                                <div class="product__name"><a href=""><?= $row['ten_sp']?></div>    
                                <div class="product__price">
                                    <span><a href="">Giá: <?= number_format($row['gia'], 0, ",", ".") ?></a><span>đ</span></span>
                                </div>
                                    <p><?= $row['chitiet'] ?></p>
                                    <br>
                                        <h4>Hết Hàng</h4>
                            </div>  
                        </ul>
                    <?php } 
                    }
                    ?>
        </div>
    </section>               
          <?php include 'phantrang.php'?>          
</body>
</html>