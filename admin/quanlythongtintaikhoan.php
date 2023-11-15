<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-quanlyTK.css">
    <title>Quản Lý Thông Tin Tài Khoản</title>
</head>
<body>
    <div class="container">
            <div class="sidebar" style="    border-radius: 20px;">
                <ul>
                        <h2>Chào mừng </h2>
                        <li><a href="http://">Quản lý sách</a></li>
                        <li><a href="http://">Quản lý Thông Tin Tài Khoản</a></li>
                        <li><a href="http://">Quản lý Đơn Hàng</a></li>
                        <li><a href="http://">Quản lý Thống kê</a></li>
                        <li><a href="http://localhost/bansach/THLVN/TrangChu.php">Đăng Xuất</a></li>    
                </ul>
            </div>
        

        <div class="content">
            <div align="center"><h2>Quản lý thông tin tài khoản</h2></div>
            <table class="customer-table">
                <thead>
                    <tr>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Keết nối đến cơ sở dữ liệu và truy vấn dữ liệu ở đây
                        include '../connect_db.php';
                        $result = mysqli_query($kn, "SELECT * FROM `taikhoan` WHERE 1");
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                            <td> <?= $row['tendangnhap']?> </td>
                            <td> <?= $row['matkhau'] ?></td>
                            <td> <?= $row['email']?> </td>
                            <td><?= $row['diachi'] ?></td>
                            <td> <?= $row['sodt']?> </td>
                            <td><a href="http://localhost/bansach/THLVN/admin/suataikhoan.php?id=<?$row['id']?>" >Sửa</a></td>
                            </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        
    </div>

</body>
</html>