<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/thongke.css">

    <title>Date Range Picker Example</title>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Thống Kê</title>
</head>
<body>
                
		<?php include "header.php" ; ?>

        <div class="content" >

            <div align="center"><h2 style="font-size:40px;">Thống Kê</h2></div>
            
            <label for="picker1">Từ ngày:</label>
<input type="date" id="picker1" name="picker1">

<label for="picker2">Đến ngày:</label>
<input type="date" id="picker2" name="picker2">
            

            </script>
            <div class="search-container" style="text-align:left; margin-top:10px; " >
                <input style="font-size:14px; border-radius: 40px;" 
                    type="text" id="searchInput" class="search-box" placeholder="Tìm kiếm...">
                <button style="font-size:14px;" 
                    onclick="performSearch()" class="search-btn">Mã sản phẩm</button>
            </div>

            <table class="customer-table" style="border: 4px solid #dddddd;">
                <thead>
                    <tr>
                        <th>Mã sách</th>   
                        <th>Tên sách</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Thành tiền</th>
                        </tr>
                        <tr>
                        <td style=" text-align:left;" colspan="4">Tổng</td>   
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                        // Keết nối đến cơ sở dữ liệu và truy vấn dữ liệu ở đây
                        include '../connect_db.php';
                        $result = mysqli_query($kn, "SELECT * FROM `chitiet_giohang` WHERE 1");
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                            <td> <?= $row['masach']?> </td>
                            <td> <?= $row['tensach'] ?></td>
                            <td> <?= $row['soluong']?> </td>
                            <td><?= $row['gia'] ?></td>
                            <td> <?= $row['thanhtien']?>    
                            <td> <?= $row['tong']?> <
                            <td><a href="http://localhost/bansach/THLVN/admin/thongke.php?id=<?$row['id']?>" >Sửa</a></td>
                            </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        
        
    </div>

</body>
</html>