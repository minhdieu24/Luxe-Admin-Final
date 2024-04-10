<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap"
    />
    <link rel="stylesheet" href="./css/dangnhap.css">
</head>
<body>
    <div class="top">
        <img
          class="logo-icon"
          loading="lazy"
          alt=""
          src="./icon/Logo.svg"/>
        <h1 class="logo-text">Luxe</h1>
    </div>

    <!--Fill in the form-->
    <div class="wrapper">
        <form action="">
            <h1>Đăng nhập</h1>
            <b class="name">
                <span class="name-text">Email</span>
                <span class="span"> *</span>
              </b>
            <div class="input-box">
                <input type="email" required>
            </div>
            <b class="name">
                <span class="name-text">Mật khẩu</span>
                <span class="span"> *</span>
              </b>
            <div class="input-box">
                <input type="password" required>
            </div>

            <button type="submit" class="btn">Đăng nhập</button>
        </form>
    </div>
</body>
</html>