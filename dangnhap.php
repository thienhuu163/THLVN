<!doctype html>
<?php session_start(); ?>
<html lang="vn">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <link rel="stylesheet" type="text/css" href="css/dangnhap.css">
    <style>
        
    </style>
</head>
<?php
		//1.ket noi
		include 'connect_db.php';
		if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = ($_POST['password']);
		$sql="select * from taikhoan where tendangnhap='".$username."' and matkhau='".$password."'";
		$result=mysqli_query($kn,$sql);
		if($row= mysqli_fetch_array($result)){
			$_SESSION['username']=$row['tendangnhap'];
			header("location: TrangChu.php");
		}else{
			echo "<script>
				alert('Nhap sai tai khoan hoac mat khau');
				window.history.back();
				</script>";
			header('location: dangnhap.php');
		}		
		mysqli_close($kn);
    }
	?>
<body>
    
    <div class="container">
        <h2>Đăng nhập</h2>
       <form method ="POST" action ="<?php echo ($_SERVER['PHP_SELF']);?>" align ="center" >
            <input type="text" placeholder="Tên đăng nhập" name="username" required>
            <input type="password" placeholder="Mật khẩu" name="password" required>
            <div>
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Lưu đăng nhập</label>
            </div>
            <button type="submit" name="dn">Đăng nhập</button>
        </form>
        <p>Bạn chưa có tài khoản? <a href="http://localhost/bansach/THLVN/dangki.php">Đăng ký ngay</a></p>
    </div>
</body>
</html>