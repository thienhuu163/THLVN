<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="thongke.css">

    <title>Date Range Picker Example</title>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Thống Kê</title>

</head>
<body>

    
        <div class="content">
        <div align="center"><h2>Thống Kê</h2></div>
                    
            <label for="startDate">Ngày bắt đầu:</label>
                <input type="text" id="startDate">

             <label for="endDate">Ngày kết thúc:</label>
                <input type="text" id="endDate">

    <script>
        $(function() 
        {
        $("#startDate").datepicker(
         {
                     dateFormat: "dd/mm/yy",
                        onSelect: function(selectedDate) 
                        {
                        $("#endDate").datepicker("option", "minDate", selectedDate);
        }
         });
                        $("#endDate").datepicker(
         {
                     dateFormat: "dd/mm/yy",
                        onSelect: function(selectedDate) 
        {
                        $("#startDate").datepicker("option", "maxDate", selectedDate);
        }
      });
    });

  </script>
            <div class="search-container">
            <input type="text" id="searchInput" class="search-box" placeholder="Tìm kiếm...">
                <button onclick="performSearch()" class="search-btn">Mã sản phẩm</button>
            </div>

  <script>
        function performSearch() 
        {
      // Xử lý tìm kiếm ở đây khi người dùng nhấn nút Tìm
            var searchTerm = document.getElementById('searchInput').value;
      // Bạn có thể sử dụng giá trị searchTerm để thực hiện tìm kiếm trong dữ liệu của bạn
             console.log("Đã tìm kiếm: " + searchTerm);
         }
  </script>
            <div class="container">
            <div class="sidebar" style=" border-radius: 20px;">
                <ul>
                        <h2>Chào mừng </h2>
                        <li><a href="http://">Quản lý sách</a></li>
                        <li><a href="http://">Quản lý Thông Tin Tài Khoản</a></li>
                        <li><a href="http://">Quản lý Đơn Hàng</a></li>
                        <li><a href="http://">Quản lý Thống kê</a></li>
                        <li><a href="http://">Đăng Xuất</a></li>    
                </ul>
            </div>

                <table class="customer-table">
                    <thead>
                        <tr>
                            <th>Mã sách</th>
                            <th>Tên sách</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Keết nối đến cơ sở dữ liệu và truy vấn dữ liệu ở đây
                           include './connect_db.php';
                            $result = mysqli_query($kn, "SELECT * FROM `taikhoan` WHERE 1");
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                <td> <?= $row['masach']?> </td>
                                <td> <?= $row['tensach'] ?></td>
                                <td> <?= $row['soluong']?> </td>
                                <td><?= $row['gia'] ?></td>
                                <td> <?= $row['thanhtien']?> </td>
                                <td><a href="http://localhost/bookstore/thongke.php?id=<?$row['id']?>" >Sửa</a></td>
                                </tr>
                        <?php }?>

                    </tbody>
                    
                </table>
            </div>
            
        </div>  
</body>
</html>