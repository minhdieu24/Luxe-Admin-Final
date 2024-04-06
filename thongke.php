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
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Scripts -->
    <script src="./js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="container">
        <div class="top-bar">
          <!-- Logo -->
          <a href="./" class="logo-nav">
            <img src="./icon/Logo.svg" alt="Luxe" />
            <h1 class="logo-title">Luxe</h1>
          </a>
          <!-- nav = navigation giống div nhưng có ngữ nghĩa -->
          <!-- Navigation -->
          <nav class="navbar">
            <ul>
              <li><a href="#!">Trang chủ</a></li>
              <li><a href="#!">Sản phẩm</a></li>
              <li><a href="#!">Khuyến mãi</a></li>
              <li><a href="#!">Đơn hàng</a></li>
              <li><a href="#!">Khách hàng</a></li>
              <li><a href="#!">Nhân viên</a></li>
              <li><a href="#!">Thống kê</a></li>
            </ul>
          </nav>

          <!-- Action -->
          <div class="top-act">
            <button class="top-act-btn">
              <img src="./icon/user.svg" alt="" />
            </button>
          </div>
        </div>
      </div>
    </header>
    <!-- Page Title -->
    <section id="page-title">
      <div class="container">
        <div class="home-title">
          <img src="./icon/statistical.svg" alt="" />
          <h1 class="title">Thống kê</h1>
        </div>
      </div>
    </section>

    <!-- Page revenue -->
    <section id="page-revenue">
      <div class="statistic">
          <!-- Tool- bar -->
          <div class="tool-bar">
            <div class="tool-bar__choose">
              <img src="./icon/revenue.svg" alt="" />
              <div class="text-revenue">Doanh thu</div>
            </div>
            <div class="tool-bar__rest">
              <div class="cost">
                <img src="./icon/cost.svg" alt="" />
                <a href="#!" class="text-revenue">Đơn hàng</a>
              </div>
              <div class="profit">
                <img src="./icon/product-sold.svg" alt="" />
                <a href="#!" class="text-revenue">Sản phẩm bán ra</a>
              </div>
              <div class="profit">
                <img src="./icon/review.svg" alt="" />
                <a href="#!" class="text-revenue">Đánh giá</a>
              </div>
            </div>
          </div>

          <div class="revenue-statistics">
            <div class="revenue">
              <div class="selectdate">
                <form class="date-form1">
                  <label>Từ:</label>
                  <label for="start-day">Ngày</label>
                  <select id="start-day" class="custom-select" onclick="day()"></select>
                  <label for="start-month">Tháng</label>
                  <select id="start-month" class="custom-select" onclick="month()"></select>
                  <label for="start-year">Năm</label>
                  <select id="start-year" class="custom-select" onclick="year()"></select>
                </form>
                <form class="date-form2">
                  <label>Đến:</label>
                  <label for="end-day" class="endday">Ngày</label>
                  <select id="end-day" class="custom-select" onclick="day()" ></select>
                  <label for="end-month">Tháng</label>
                  <select id="end-month" class="custom-select" onclick="month()"></select>
                  <label for="end-year">Năm</label>
                  <select id="end-year" class="custom-select" onclick="year()"></select>
                </form>
              </div>
              <div class="total-revenue">
                  <div class="total">30.000.000 VNĐ</div>
                  <div class="total-text">Tổng doanh thu</div>
              </div>
            </div>
            <p class="chart">Biểu đồ</p>
            <canvas id="myChart"></canvas>
          </div>
      </div>
    </section>
  </body>