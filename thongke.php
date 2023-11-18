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
</head>
<body>

    
        <div class="content">
        <div align="center"><h2>Thống Kê</h2></div>
                    
            <label for="startDate">Từ ngày:</label>
                <input type="text" id="startDate">

             <label for="endDate">Đến ngày:</label>
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
            
            
            <title>Nút Tab trong HTML</title>
    <style>
        /* Ẩn nội dung của tab mặc định */
        .tabcontent {
            display: none;
        }

        /* Định dạng nút tab */
        .tab button {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* Định dạng nút tab khi được chọn */
        .tab button.active {
            background-color: #ddd;
        }
    </style>
   
</head>
<body>
        

    <div class="tab">
        <!-- Nút tab -->
        <button class="tablinks" onclick="openTab(event, 'Tab1')">Quản lý sách</button>
        <button class="tablinks" onclick="openTab(event, 'Tab2')">Quản lý thông tin tài khoản</button>
        <button class="tablinks" onclick="openTab(event, 'Tab3')">Quản lý đơn hàng</button>
        <button class="tablinks" onclick="openTab(event, 'Tab4')">Thống kê</button>
        <button class="tablinks" onclick="openTab(event, 'Tab5')">Đăng xuất</button>
    </div>

     
    <style>
       
       

        /* Định dạng nút tab */
        .tab button {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            padding: 10px 20px;
            cursor: pointer;
            display: block;
            margin-bottom: 5px;
            width: 20%;
            text-align: left;
        }

        /* Định dạng nút tab khi được chọn */
        .tab button.active {
            background-color: #ddd;
        }

        /* Ẩn nội dung của tab mặc định */
        .tabcontent {
            display: none;
        }
   
        </style>

<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
            
            <title>Tạo bảng 5 cột trong PHP</title>
            <style>
                    /* Định dạng bảng */
                table {
                    width: 50%; /* Độ rộng của bảng */
                    border-collapse: collapse; /* Xóa đường viền giữa các ô */
                    }
        
                    /* Định dạng ô */
                th, td {
                    border: 1px solid #ddd; /* Đường viền của ô */
                    padding: 8px; /* Khoảng cách nội dung với biên của ô */
                    text-align: left; /* Căn lề nội dung của ô */
                    }
        
                    /* Định dạng tiêu đề cột */
                th {
                    background-color: #f2f2f2; /* Màu nền của tiêu đề cột */
                    }
            </style>
                <body>

                <table>
                    <tr>
                        <th>Mã sách</th>
                        <th>Tên sách</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Thành tiền</th>
                        <th>Tổng</th>
                    </tr>
                    <tr>
                    <?php
                    // Phần PHP để tạo dữ liệu cho từng ô trong bảng
                        for ($i = 1; $i <= 5; $i++) {
                        echo "<td>Dữ liệu $i</td>";
                        }
                    ?>
                    </tr>
                      
                </table>
                </body> 
                
</body>                
</html>