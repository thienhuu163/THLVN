<html>
    <head>
            <title>Giỏ hàng</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/style_goihang.css">
			<link rel="stylesheet" href="css/giaodien.css">
            
    </head>
<body>

	<div id="wrapper">
		<header>
	         <nav class="container">
                <div class="logo-main-menu">
                <a href="" id="logo">
                    <img src="images/logo.jpg" alt="ALTTHSHOP" width="200px">
                </a>
                
                </div>
                <div class="main-menu-right">
                    <ul id="main-menu-right2">
					<li> <?php if(isset($_SESSION['hoTen'])){echo 'Tài Khoản: '.$_SESSION['hoTen'];} ?></li>
                    <li><a href="http://localhost/bansach/THLVN/login.php"><button type="button" class="btn btn-outline-warning">Đổi mật khẩu</button></a></li>
					<li><a href="http://localhost/bansach/THLVN/login.php"><button type="button" class="btn btn-outline-danger">Đăng Xuất</button></a></li>
                </ul>
                </div>
             </nav>
			 </header>
			<?php if(!empty($error)){ ?>
			<?php echo "<script>
					alert('$error');
					window.history.back();
					</script>";?>
			<?php }elseif(!empty($success)){?>
			<?php echo "<script>
					alert('$success');
					</script>";?>
					<a href ="http://localhost/bansach/THLVN/login.php">Tiếp tục mua hàng</a>
			<?php }else{ ?>
				<a href ="http://localhost/bansach/THLVN/login.php" class="product-tc">Quay Lại</a>
            <h1>Giỏ hàng</h1>
			<form id="cart-form" action="cartt.php?action=submit" method="POST">
            <table>
				<tr>
					<th class ="product-number">STT</th>
					<th class ="product-name">Tên Sản Phẩm</th>
					<th class ="product-img">Ảnh sản phẩm</th>
					<th class ="product-price">Đơn giá</th>
					<th class ="product-quantity">Số lượng</th>
					<th class ="total-money">Thành tiền</th>
					<th class ="product-delete">Xóa</th>
				</tr>
				<?php 
				if(!empty($product)){
						$stt=1;
						$total=0;
					while($row =mysqli_fetch_array($product)){ ?>
					<tr>
						<td class ="product-number"><?= $stt; ?></td>
						<td class ="product-name"><?= $row['ten_sp'] ?></td>
						<td class ="product-img"><img src="admin1/<?= $row['images'] ?>"/></td>
						<td class ="product-price"><?= number_format($row['gia'], 0, ",", ".") ?></td>
						<td class ="product-quantity"><input type="text" value="<?= number_format($_SESSION["cart"][$row['id_sp']], 0, ",", ".") ?>" name="quantity[<?= $row['id_sp'] ?>]" /></td>
						<td class ="total-money"><?= number_format($row['giá']*$_SESSION["cart"][$row['id_sp']], 0, ",", ".") ?></td>
						<td class ="product-delete"><a href="cartt.php?action=delete&id=<?=$row['id_sp'] ?>">Xóa</td>
					</tr>
						<?php 
						$total +=$row['gia']*$_SESSION["cart"][$row['id_sp']];
						$stt++;
						}?>
						<tr id="row-total">
							<td class ="product-number">&nbsp;</td>
							<td class ="product-name">Tổng tiền</td>
							<td class ="product-img">&nbsp;</td>
							<td class ="product-price">&nbsp;</td>
							<td class ="product-quantity">&nbsp;</td>
							<td class ="total-money"><?= number_format($total, 0, ",", ".") ?></td>
							<td class ="product-delete"></td>
						</tr>
				<?php } ?>				
				</table>
			<div id="form-button">
					<input type="submit" name="update_click" value="Cập nhật">
				</div>
			<table>
			<div class="label_list">
			<!--<div><label class="name">Tài khoản đặt: </label><?php echo $_SESSION['username']; ?></div>-->
			<div class="input-group mb-3">
			  <span class="input-group-text" id="basic-addon1">Người nhận</span>
			  <input type="text" name="name" class="form-control" placeholder="Nhập tên người nhận hàng">
			</div>
			<div class="input-group mb-3">
			  <span class="input-group-text" id="basic-addon1">Điện thoại    </span>
			  <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại người nhận hàng">
			</div>
			<div class="input-group mb-3">
			  <span class="input-group-text" id="basic-addon1">Địachỉnhận</span>
			  <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ nhận hàng">
			</div>
			<div class="input-group">
			  <span class="input-group-text">Ghi chú a:</span>
			  <textarea class="form-control" name="note" aria-label="With textarea" placeholder="Nhập ghi chú đơn hàng..."></textarea>
			</div>
			<input type="submit" name="order_click" class="btn btn-outline-success" value ="Xác nhận đặt hàng">
			</form>
			</div>
			<div class="label_list_item">
				<img src="images/logo.jpg" alt="">
				<h3>BOOKSTORE</h3>
			</div>
			</table>
			<?php } ?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script></body>
</html>
