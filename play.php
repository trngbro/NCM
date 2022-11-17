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
          <div class="btn-group navbar-nav ms-auto">
            <a class="nav-item nav-link item-none">Chào buổi sáng!</a>
            <button type="button" class="btn dropdown-toggle users-log" data-bs-toggle="dropdown"></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Nguyen Trung Nghia</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="./">Đăng xuất</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <content class="row w-100">
        <div class="main-play col-12 col-lg-7">
            <div class="container">
                
            </div>

            <div class="control">
                <i class="bi bi-caret-left icon-color"></i>
                <i class="bi bi-play-circle icon-color"></i>
                <i class="bi bi-caret-right icon-color"></i>
                <i class="bi bi-heart icon-color"></i>
            </div>
        </div>

        <div class="sub-play col-12 col-lg-5">
            <div class="lists">
                Empty
            </div>
        </div>
  </content>
</body>

</html>