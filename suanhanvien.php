<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Chỉnh biểu tượng web -->
    <link href="./icon/Logo.svg" rel="shortcut icon" />
    <title>Luxe - Admin</title>
    <!-- GG Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <!-- Styles -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/nhanvien.css" />
    <!-- Scripts -->
    <script src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <script>
      $(function() {
        // Khởi tạo Datepicker cho input có id là "NgayTG"
        $("#NgayTG").datepicker();
      });
      function generateEmail() {
            var hoten = document.getElementById('Hoten').value;
            var email = hoten.toLowerCase().replace(/\s+/g, '.') + '@luxe.com';
            document.getElementById('Email').value = email;
            document.getElementById('displayEmail').textContent = email; // Hiển thị địa chỉ email
      }
    </script>
  </head>
  <body>
    <!-- Header -->
    <?php
      // File kết nối CSDL + header
      require_once "db_module.php"; 
      include "header.php";   
    ?>
    <?php
    <!-- Page Title -->
    <section id="page-title">
      <div class="container">
        <div class="home-title">
          <img src="./icon/suanhanvien-settings.svg" alt="" />
          <h1 class="title">Cập nhật danh sách nhân viên</h1>
          <a class="add-new-button2" href="nhanvien.html" id="Return" target="_blank">Quay lại</a> 
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section id="main-content-2">
      <form action="" class="edit-nhanvien">
        <!-- Row 1 -->
        <div class="form-row">
          <div class="form-group">
            <label for="MaNV" class="form-label">Mã nhân viên</label>
            <input type="text" id="MaNV" class="form-input" />
          </div>
          <div class="form-group">
            <label for="SDT" class="form-label">Số điện thoại</label>
            <input type="text" id="SDT" class="form-input" />
          </div>
        </div>
        <!-- Row 2 -->
        <div class="form-row">
          <div class="form-group">
            <label for="Hoten" class="form-label">Họ tên nhân viên</label>
            <input type="text" id="Hoten" class="form-input" oninput="generateEmail()"/>
          </div>
          <div class="form-group">
            <label for="DCcutru" class="form-label">Địa chỉ cư trú</label>
            <input type="text" id="DCcutru" class="form-input" />
          </div>
        </div>
        <!-- Row 3 -->
        <div class="form-row">
          <div class="form-group">
            <label for="Gioitinh" class="form-label">Giới tính</label>
            <select name="Gioitinh" id="Gioitinh" class="form-input">
              <option value="1">Nam</option>
              <option value="2">Nữ</option>
            </select>
          </div>
          <div class="form-group">
            <label for="NgayTG" class="form-label">Ngày tham gia</label>
            <input type="text" id="NgayTG" class="form-input" />          
          </div>
        </div>
        <!-- Row 4 -->
        <div class="form-row">
          <div class="form-group">
            <label for="TrangThaiNV" class="form-label">Trạng thái</label>
            <select name="TrangThaiNV" id="TrangThaiNV" class="form-input">
              <option value="1">Đang hoạt động</option>
              <option value="2">Tạm nghỉ</option>
              <option value="3">Đã nghỉ</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Email" class="form-label">Email nhân viên</label>
            <input type="email" id="Email" class="form-input" disabled/>
            <p id="displayEmail"></p> <!-- Thêm phần tử HTML để hiển thị địa chỉ email -->
          </div>
        </div>
      </form>
      <div class="edit-action">
        <input type="submit" value="Cập nhật" class="edit-btn" />
        <input type="submit" value="Huỷ" class="edit-btn" />
      </div>
    </section>
  </body>
</html>