<?php include_once "./api/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <style>
    .container {
      min-height: 544px;
    }
  </style>
</head>

<body>
  <!-- Nav bar -->
  <nav class='navbar navbar-light bg-light sticky-top'>
  <div class="container-fluid">
    <a class="navbar-brand col-9" href="#"><img src="./image_admin/logo.png" alt=""></a>
    <?php

    //判斷是否有任何的錯誤訊息存在，有則顯示
    if (isset($_SESSION['error'])) {
      echo "<span class='text-danger'>" . $_SESSION['error'] . "</span>";
    }

    //判斷是否有登入的紀錄，根據登入狀況，顯示不同的功能按鈕
    if (isset($_SESSION['user'])) {
      echo "<span class='pr-5 justify-content-end'>歡迎{$_SESSION['user']}！</span>";
    ?>
      <div>
        <a class="btn btn-outline-secondary mx-1" href="./backend">會員中心</a>
      </div>
      <div>
        <a class="btn btn-outline-info mx-1" href="logout.php">登出</a>
      </div>

    <?php

    } else {
    ?>
      <div>
        <a class="btn btn-outline-secondary mx-1" href="?do=login">會員登入</a>
        <a class="btn btn-outline-info mx-1" href="?do=reg">註冊新會員</a>
      </div>
    <?php
    }
    ?>
    </div>
  </nav>
  <!-- Nav bar end -->

  <!-- 左邊按鈕(免費建立問卷)、右邊輪播網站宣傳圖 -->
  <!-- buttom for conducting a poll -->
  <!-- <div>
    <img src="./image/free-01.jpg" alt="完全免費" style="overflow:hidden;height:250px">
  </div> -->
  <!-- buttom for conducting a poll end -->

  <!-- 輪播PR -->
  <div class="jumbotron p-0 mb-0" style="overflow:hidden;height:250px">
    <a href="index.php">
      <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner position-absolute" style="top:-250px">
          <?php

          //取得資料表中狀態為1的廣告圖片
          $images = all('ad', ['sh' => 1]);

          //使用迴圈來將每一筆廣告圖片依照html的格式顯示在網頁上
          foreach ($images as $key => $image) {

            //判斷如果是第一筆，會加入一個active的class
            if ($key == 0) {
              echo "<div class='carousel-item active'>";
            } else {
              echo "<div class='carousel-item'>";
            }

            //帶入圖片的檔名及資訊
            echo "  <img class='d-block w-100' src='image/{$image['name']}' title='{$image['intro']}'>";
            echo "</div>";
          }


          ?>
        </div>
      </div>
    </a>
  </div>
  <!-- 輪播PR end -->
  <!-- 左邊按鈕(免費建立問卷)、右邊輪播網站宣傳圖 end -->

  <!-- hot poll 1*3 -->

    <?php

    //根據網址帶的do參數內容來決定要include那一個檔案內容
    $do = (isset($_GET['do'])) ? $_GET['do'] : 'show_vote_list';

    //建立要引入的檔案路徑
    $file = "./frontend/" . $do . ".php";
    if (file_exists($file)) {
      include $file;
    } else {
      include "./frontend/show_vote_list";
    }
    ?>
  </div>
  <!-- hot poll -->

  <!-- latest poll 1*3-->
  <!-- latest poll -->

  <!-- ADs -->
  <!-- ADs -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>