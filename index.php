<?php

@include 'config.php';

session_start();

if (isset($_SESSION['adname'])) {
  header('location:admin.php');
} elseif (isset($_SESSION['name'])) {
  header('location:home.php');
}

if (isset($_POST['search'])) {
  header('location:play.php');
}

?>

<!doctype html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel='stylesheet' href='styles/style.css'>
  <link rel='stylesheet' href='styles/theme.css'>

  <title>Music</title>
</head>

<body>
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fddddd;">
      <div class="container-fluid">
        <img src="./img/logo.png" alt="logo" style="width: 25px">
        <a href="./" class="navbar-brand">NCM</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
            <form class="input-group" method="POST" onsubmit="return ajsearch();">
              <input type="text" id="search" class="form-control" placeholder="Tìm kiếm bài hát">
              <div class="input-group-append">
                <button class="btn btn-secondary" name="search" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
          </div>
          <div class="navbar-nav ms-auto">
            <a href="./signup.php" class="nav-item nav-link item-none">Đăng ký</a>
            <a href="./signin.php" class="nav-item nav-link item-colo">Đăng nhập</a>
          </div>
          <div >
            <input type="checkbox" class="checkbox" id="chk" />
            <label class="label" for="chk">
                <i class="bi bi-moon-fill"></i>
                <i class="bi bi-sun-fill"></i>
                <div class="ball"></div>
            </label>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div id="slider" class="silder" style="background-color: #eee;">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000" style="background-color: #fddddd;" e>
          <img src="img/indie.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Nhạc Indie</h5>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/old.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Nhạc cổ</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/gold.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Nhạc vàng</h5>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <content id="content-music" class="row w-100">
    <div class="main-content col-12 col-lg-9">
      <h2>Nhạc ngẫu hứng</h2>

      <div class="suggest">
        <?php
        $rows = mysqli_query($conn, "SELECT * FROM songs ORDER BY RAND() LIMIT 10");
        ?>
        <?php foreach ($rows as $row) : ?>
          <div class="item">
            <img src="<?php echo './src/image/' . $row["cover"]; ?>" alt="">
            <p><?php echo $row["name"]; ?></p>
            <p><?php echo $row["singer"]; ?></p>
          </div>
        <?php endforeach; ?>
        <!-- 

                <li class="item">
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg" alt="">
                    <p>Bai hat 1qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
                    <p>Ca si 1</p>
                </li> 
            
                -->


      </div>

      <h2>Nhạc mới tải lên</h2>
      <div class="new">
        <?php
        $rows = mysqli_query($conn, "SELECT * FROM songs ORDER BY id DESC LIMIT 10");
        ?>
        <?php foreach ($rows as $row) : ?>
          <div class="item">
            <img src="<?php echo './src/image/' . $row["cover"]; ?>" alt="">
            <p><?php echo $row["name"]; ?></p>
            <p><?php echo $row["singer"]; ?></p>
          </div>
        <?php endforeach; ?>
        <!-- 

                <div class="item">
                    <img src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg" alt="">
                    <p>Bai hat 1</p>
                    <p>Ca si 1</p>
                </div> 
            
                -->

      </div>
    </div>

    <div class="sub-content col-0 col-lg-3">
      <h2>BXH Bài hát</h2>
      <div class="BXH">
        <?php
        $rows = mysqli_query($conn, "SELECT * FROM songs ORDER BY view DESC LIMIT 10");
        $i = 1;
        ?>
        <?php foreach ($rows as $row) : ?>
          <li class="songItem">
            <span><?php echo $i++; ?></span>
            <h5><?php echo $row["name"]; ?><br>
              <div class="subtitle"><?php echo $row["singer"]; ?></div>
            </h5>
            <i class="bi bi-play-fill playListPlay" id="1"></i>
          </li>
        <?php endforeach; ?>
        <!-- 
                    
                <li class="songItem">
                    <span>01</span>
                    <h5> On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi bi-play-fill playListPlay" id="1"></i>
                </li> 
            
                -->
      </div>
    </div>
  </content>
</body>
<script>
    const chk = document.getElementById('chk');

    chk.addEventListener('change', () => {
        document.getElementById("content-music").classList.toggle('dark');
        document.getElementById("carouselExampleDark").classList.toggle('dark');
        document.getElementById("slider").classList.toggle('dark');
    });
</script>
</html>