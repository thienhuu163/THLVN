<?php session_start(); ?>
<?php
require_once "connect_db.php";
// Kiểm tra xem người dùng đã đăng nhập hay chưa
var_dump($_SESSION['username']);
if (!isset($_SESSION['username'])) {
    // Người dùng chưa đăng nhập, không cần xử lý giỏ hàng, chỉ cần đăng xuất
    logout();

} else {
    // Người dùng đã đăng nhập, lưu thông tin giỏ hàng vào cơ sở dữ liệu
    $user = $_SESSION['username'];
    // // Xóa thông tin giỏ hàng cũ của người dùng trong cơ sở dữ liệu
    $sql_delete = "DELETE FROM giohangtemp WHERE name = '$user'";
    $kn->query($sql_delete);

    // Lưu thông tin giỏ hàng mới vào cơ sở dữ liệu
    foreach ($_SESSION['giohang'] as $id_sanpham => $soluong) {
		$product_query = mysqli_query($kn, "SELECT * FROM sanpham WHERE id_sp = $id_sanpham");
     if ($product_query && mysqli_num_rows($product_query) > 0) {
        $product_row = mysqli_fetch_assoc($product_query);
        $price = $product_row['gia'];
		
		$sql_insert = "INSERT INTO `giohangtemp`(`id`, `name`, `id_sanpham`, `soluong`, `gia`)
               VALUES (null, '".$user."', '".$id_sanpham."', '".$soluong."','".$price."');";
	$kn->query($sql_insert);
		}
    
	}
    // Xóa session giỏ hàng
    unset($_SESSION['giohang']);

    // Thực hiện các xử lý khác khi đăng xuất
    logout();
}

// Hàm đăng xuất
function logout()
{
    // Thực hiện các xử lý đăng xuất

    // Hủy session và chuyển hướng người dùng đến trang đăng nhập hoặc trang khác
    session_unset();
    session_destroy();
    header("Location: dangnhap.php");
    exit();
}
?>