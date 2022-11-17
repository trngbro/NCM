<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='styles/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Music</title>
</head>

<body>
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fddddd;">
      <div class="container-fluid">
        <img src="./src/logo.png" alt="logo" style="width: 25px">
        <a href="./" class="navbar-brand">NCM</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Tìm kiếm bài hát">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="button">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="navbar-nav ms-auto">
            <a href="./signup.php" class="nav-item nav-link item-none">Đăng ký</a>
            <a href="./signin.php" class="nav-item nav-link item-colo">Đăng nhập</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="silder"   style="background-color: #eee;">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000"   style="background-color: #fddddd;"e>
          <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
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

  <content class="row w-100">
    <script>
      $(".item").click(function(){
        alert('Hi!');
      });
    </script>
    <div class="main-content col-12 col-lg-9">
      <h2>Nhạc gợi ý cho bạn</h2>

      <div class="suggest">
        <li class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 1qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
          <p>Ca si 1</p>
        </li>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 2</p>
          <p>Ca si 2</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 3</p>
          <p>Ca si 3</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 1</p>
          <p>Ca si 1</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 2</p>
          <p>Ca si 2</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 3</p>
          <p>Ca si 3</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 1</p>
          <p>Ca si 1</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 2</p>
          <p>Ca si 2</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 2</p>
          <p>Ca si 2</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 3</p>
          <p>Ca si 3</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 1</p>
          <p>Ca si 1</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 2</p>
          <p>Ca si 2</p>
        </div>
      </div>

      <h2>Nhạc mới tải lên</h2>
      <div class="new">
        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 1</p>
          <p>Ca si 1</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 2</p>
          <p>Ca si 2</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 3</p>
          <p>Ca si 3</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 1</p>
          <p>Ca si 1</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 2</p>
          <p>Ca si 2</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 3</p>
          <p>Ca si 3</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 1</p>
          <p>Ca si 1</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 2</p>
          <p>Ca si 2</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 2</p>
          <p>Ca si 2</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 3</p>
          <p>Ca si 3</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 1</p>
          <p>Ca si 1</p>
        </div>

        <div class="item">
          <img
            src="https://photo-resize-zmp3.zmdcdn.me/w320_r1x1_webp/cover/6/f/d/7/6fd7eb64ebf977377af4c3f5dc0f268d.jpg"
            alt="">
          <p>Bai hat 2</p>
          <p>Ca si 2</p>
        </div>
      </div>
    </div>

    <div class="sub-content col-0 col-lg-3">
      <h2>BXH Bài hát</h2>
      <div class="BXH">
        <li class="songItem">
          <span>01</span>
          <h5> On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi bi-play-fill playListPlay" id="1"></i>
        </li>

        <li class="songItem">
          <span>01</span>
          <h5> On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi bi-play-fill playListPlay" id="1"></i>
        </li>

        <li class="songItem">
          <span>01</span>
          <h5> On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi bi-play-fill playListPlay" id="1"></i>
        </li>

        <li class="songItem">
          <span>01</span>
          <h5> On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi bi-play-fill playListPlay" id="1"></i>
        </li>

        <li class="songItem">
          <span>01</span>
          <h5> On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi bi-play-fill playListPlay" id="1"></i>
        </li>

        <li class="songItem">
          <span>01</span>
          <h5> On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi bi-play-fill playListPlay" id="1"></i>
        </li>

        <li class="songItem">
          <span>01</span>
          <h5> On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi bi-play-fill playListPlay" id="1"></i>
        </li>


        <li class="songItem">
          <span>01</span>
          <h5> On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi bi-play-fill playListPlay" id="1"></i>
        </li>

        <li class="songItem">
          <span>01</span>
          <h5> On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi bi-play-fill playListPlay" id="1"></i>
        </li>

        <li class="songItem">
          <span>01</span>
          <h5> On My Way <br>
            <div class="subtitle">Alan Walker</div>
          </h5>
          <i class="bi bi-play-fill playListPlay" id="1"></i>
        </li>
      </div>
    </div>
  </content>
</body>

</html>