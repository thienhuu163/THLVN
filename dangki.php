<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng kí</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <?php
	include './connect_db.php';
	if(isset($_POST['dk']))
	{//Lay du lieu tu form
		$tendn= $_POST['user'];		
		$matKhau=($_POST['pass']);
		$repass = ($_POST['repass']);
		$diaChiMail= $_POST['email'];
		$sodt= $_POST['sodt'];
		$diachi= $_POST['diachi'];
		
		mysqli_query($kn, "'SET NAME', 'utf8'");
		//4.Xay dung cau lenh truy van
		$cauLenh="insert into taikhoan(tendangnhap,matkhau,email,diachi,sodt) values('".$tendn."','".$matKhau."','".$diaChiMail."','".$diachi."','".$sodt."')";
		$cauLenhKt="select * from taikhoan where tendangnhap='".$tendn."'";
		//5.Thuc hien cau lenh
			//Kiem tra mat khau
		if($matKhau==$repass){
			//Kiem tra ten dang nhap co trung hay khong.
			$kqkt=mysqli_query($kn, $cauLenhKt);
			if($dong=mysqli_fetch_array($kqkt)){
				
				echo "<script>
				alert('Tai khoan da duoc dang ky, vui long dang ky voi tai khoan khac');
				window.history.back();
				</script>";
				}else{
					($kq=mysqli_query($kn, $cauLenh));
					echo "<script>
					alert('Dang ki thanh cong');
					</script>";
					header('location: xemtrangchu.php');
				}
		}else{
			echo "<script>
			alert('Nhap Mat khau khong dung');
			window.history.back();
			</script>";
		}
		//6.Lay ket qua tra ve
		//7.8. Dong
		//mysqli_close($kn);
	}
	?>
  <body>
<div>
<div class="container mt-3">
  <h2>Đăng ký tài khoản</h2>
  <form action = "<?php echo ($_SERVER['PHP_SELF']);?>" method="POST">
    <div class="mb-3">
		<label >Tài khoản</label>
		<input type="text" name ="user" class="form-control" placeholder="Nhập tên tài khoản" aria-label="Username">
	</div>
	<div class="mb-3">
      <label for="pwd">Mật khẩu</label>
      <input type="password" name ="pass" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password">
    </div>
	<div class="mb-3">
		<label >Nhập lại mật khẩu</label>
		<input type="password" name ="repass" class="form-control" placeholder="Nhập lại mật khẩu" aria-label="password">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Email</label>
		<input type="email" name ="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
	</div>
	<div class="mb-3">
		<label >Số điện thoại</label>
		<input type="text" name ="sodt" class="form-control" placeholder="Nhập tên tài khoản" aria-label="Username">
	</div>
	<div class="mb-3">
		<label >Địa chỉ</label>
		<input type="text" name ="diachi" class="form-control" placeholder="Nhập tên tài khoản" aria-label="Username">
	</div>
    <button type="submit" name ="dk" class="btn btn-primary">Xác nhận đăng kí</button>
  </form>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>