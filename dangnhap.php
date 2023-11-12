<!doctype html>
<html lang="vn">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <link rel="stylesheet" type="text/css" href="dangnhap.css">
    <style>
        
    </style>
</head>
<body>
    
    <div class="container">
        <h2>Đăng nhập</h2>
        <?php if(isset($error)): ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
        <form id="loginForm" method="POST">
            <input type="text" placeholder="Tên đăng nhập" name="username" required>
            <input type="password" placeholder="Mật khẩu" name="password" required>
            <div>
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Lưu đăng nhập</label>
            </div>
            <button type="submit">Đăng nhập</button>
        </form>
        <p>Bạn chưa có tài khoản? <a href="#">Đăng ký ngay</a></p>
    </div>

    <script>
        const loginForm = document.getElementById('loginForm');

        const savedUsername = localStorage.getItem('username');
        if (savedUsername) {
            loginForm.username.value = savedUsername;
        }
    </script>
</body>
</html>