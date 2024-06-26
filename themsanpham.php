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
    <link rel="stylesheet" href="css/sanpham.css" />
    <link rel="stylesheet" href="css/header.css" />
    <!-- Styles + JS cho phần variants -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Scripts -->
    <script src="./js/scripts.js"></script>
  </head>
  <body>
    <!-- Header -->
    <?php
      require_once "db_module.php";  
      include "header.php";   
    ?>
    <!-- Page Title -->
    <section id="page-title">
      <div class="index_main">
        <div class="home-title">
          <img src="./icon/settings.svg" alt="" />
          <h1 class="title">Thêm sản phẩm</h1>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section id="main-content-2">
      <form action="sanpham.php?opt=add_sp" class="edit-product" method="post" enctype="multipart/form-data">
      <!-- Row 1 -->
        <div class="form-row">
          <div class="form-group">
            <label for="tensp" class="form-label">Tên sản phẩm</label>
            <input type="text" id="tensp" name="tensp" class="form-input"/>
          </div>
          <div class="form-group">
            <label for="danhmuc" class="form-label">Danh mục</label>
            <select name="danhmuc" id="danhmuc" class="form-input">
              <?php
              $link = null;
              taoKetNoi($link);
              //Kết nối và lấy dữ liệu từ CSDL
              $danhmuc = chayTruyVanTraVeDL($link,"SELECT ma_danh_muc, ten_danh_muc FROM tbl_danhmuc");
              while ($row = mysqli_fetch_assoc($danhmuc)){
                echo "<option value=".$row["ma_danh_muc"].">".$row["ten_danh_muc"]."</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <!-- Row 2 -->
        <div class="form-row">
          <div class="form-group">
            <label for="chatlieu" class="form-label">Chất liệu</label>
            <input type="text" id="chatlieu" name="chatlieu" class="form-input" />
          </div>
          <div class="form-group">
            <label for="trangthai" class="form-label">Trạng thái</label>
            <select name="trangthai" id="trangthai" class="form-input">
              <option value="1">Hiển thị</option>
              <option value="0">Không hiển thị</option>
            </select>
          </div>
        </div>
        <!-- Row 3 -->
        <div class="form-row">
          <div class="form-group">
            <label for="khoiluong" class="form-label">Khối lượng (g)</label>
            <input type="number" id="khoiluong" name="khoiluong" class="form-input" min="0" max="1000" step="0.01"/>
          </div>
          <div class="form-group">
            <label for="giagoc" class="form-label">Giá gốc</label>
            <input type="number" id="giagoc" name="giagoc" class="form-input" min="0" max="100000000" step="0.01" />
          </div>
        </div>
        <!-- Row 4 -->
        <div class="form-row">
          <div class="form-group">
            <label for="loaida" class="form-label">Loại đá</label>
            <input type="text" id="loaida" name="loaida" class="form-input"/>
          </div>
          <div class="form-group">
            <label for="giagiam" class="form-label">Giá giảm</label>
            <input type="number" id="giagiam" name="giagiam" class="form-input" />
          </div>
        </div>
        <!-- Row 5 -->
        <div class="form-row">
          <div class="form-group">
            <label for="kichthuocda" class="form-label">Kích thước đá (mm)</label>
            <input type="number" id="kichthuocda" name="kichthuocda" class="form-input"/>
          </div>
          <div class="form-group">
            <label for="hinhanhsp" class="form-label">Hình ảnh</label>
            <input type="file" id="hinhanhsp" name="hinhanh1" class="file-pro" title="Hình ảnh 1"/>
            <input type="file" name="hinhanh2" class="file-pro" title="Hình ảnh 2"/>
            <input type="file" name="hinhanh3" class="file-pro" title="Hình ảnh 3"/>
          </div>       
        </div>
     
        <!-- Row 6 -->
        <div class="form-group-variant">
          <label for="HinhAnhSP" class="form-label">Biến thể</label>
          <table class="table table-bordered" id="dynamic_field">
          <tr>
          <td><input type="text" name="tenbienthe[]" placeholder="Nhập tên biến thể" class="form-control name_list" /></td>
          <td><input type="number" name="soluong[]" placeholder="Nhập số lượng" class="form-control name_list"/></td>
          <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
          </tr>
          </table>
        </div>
        <script>
          $(document).ready(function(){
            var i=1;
            $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="tenbienthe[]" placeholder="Nhập tên biến thể" class="form-control name_list" /></td><td><input type="number" name="soluong[]" placeholder="Nhập số lượng" class="form-control name_list"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">x</button></td></tr>');
            });
            
          $(document).on('click', '.btn_remove', function(){
          var button_id = $(this).attr("id"); 
          $('#row'+button_id+'').remove();
            });
          });
        </script>        
        <div class="edit-action">
          <input type="submit" value="Thêm" class="edit-btn" />
          <input type="button" value="Huỷ" class="edit-btn" onclick="window.location.href = 'sanpham.php?opt=view_sp'"/>
        </div>
      </form>
    </section>
  </body>
</html>
