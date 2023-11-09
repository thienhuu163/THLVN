<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng kí</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<div>
<div class="container mt-3">
  <h2>Đăng ký tài khoản</h2>
  <form action = "<?php echo ($_SERVER['PHP_SELF']);?>" method="POST">
    <div class="mb-3">
		<label >Tài khoản</label>
		<input type="text" class="form-control" placeholder="Nhập tên tài khoản" aria-label="Username">
	</div>
	
    <div class="mb-3">
      <label for="pwd">Mật khẩu</label>
      <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="password">
    </div>
	<div class="mb-3">
		<label >Nhập lại mật khẩu</label>
		<input type="password" class="form-control" placeholder="Nhập lại mật khẩu" aria-label="Username">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Địa chỉ email</label>
		<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@email.com">
	</div>
	<div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember">Lưu mật khẩu
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Đăng nhập</button>
  </form>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>