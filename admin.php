<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['adname'])){
    header('location:signin.php');
}

if(isset($_SESSION['name'])){
   header('location:home.php');
}
// Nếu tải lên nhạc thì sẽ lấy các thông tin
if(isset($_POST["submit"])){
    $filename = mysqli_real_escape_string($conn, $_POST['filename']);
    $fileown  = mysqli_real_escape_string($conn, $_POST['fileown']);
    $filelyrics = mysqli_real_escape_string($conn, $_POST['filelyrics']);
    $filetag = mysqli_real_escape_string($conn, $_POST['tag']);

    if($_FILES["filemp3"]["error"] == 4){
        echo '<script> swal("Lỗi tải lên nhạc!"); </script>';
    }
    if($_FILES["fileimg"]["error"] == 4){
        echo '<script> swal("Lỗi tải lên ảnh!"); </script>';
    }
    else{
        // Chuỗi lệnh mã hoá và truyền dữ liệu sang server  (xampp)
        $filemp3_name = $_FILES["filemp3"]["name"];
        $musicExtension = explode('.', $filemp3_name);
        $musicExtension = strtolower(end($musicExtension));

        $newMusicName = uniqid();
        $newMusicName .= '.' . $musicExtension;



        $fileimg_name = $_FILES["fileimg"]["name"];
        $imageExtension = explode('.', $fileimg_name);
        $imageExtension = strtolower(end($imageExtension));

        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;
  
        move_uploaded_file($_FILES["filemp3"]["tmp_name"], 'src/sound/' . $newMusicName);
        move_uploaded_file($_FILES["fileimg"]["tmp_name"], 'src/image/' . $newImageName);
        $query = "INSERT INTO `songs`(`name`, `singer`, `music`, `cover`, `lyrics`, `tag`) VALUES ('$filename','$fileown','$newMusicName','$newImageName','$filelyrics', '$filetag')";
        mysqli_query($conn, $query);
        $query = "";
        echo
        '
        <script>
          alert("Tải nhạc lên thành công");
          document.location.href = "admin.php";
        </script>
        ';
    }
}
?>

<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"  rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel='stylesheet' href='styles/style.css'>
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
                        <a class="nav-item nav-link item-none" id="welcome">Chào buổi sáng!</a>
                        <button type="button" class="btn dropdown-toggle users-log" data-bs-toggle="dropdown"></button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> <span><?php echo $_SESSION['adname'] ?></span></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./play.php">Chơi nhạc</a></li>
                            <li><a class="dropdown-item" href="./add.php">Thêm quản trị viên</a></li>
                            <li><a class="dropdown-item" href="./logout.php">Đăng xuất</a></li>
                        </ul>
                        <script>
                            if (new Date().getHours() >= 12) {
                                document.getElementById("welcome").innerHTML = "Chào buổi chiều!";
                            }
                            if (new Date().getHours() >= 18 && new Date().getHours <= 3) {
                                document.getElementById("welcome").innerHTML = "Chào buổi tối!";
                            }
                        </script>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <content class="row w-100">
        <div class="edit-area col-12 col-lg-7">
            <div class="container">
                <form action="" style="width: 100%;" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3 mt-4">
                        <label for="filemp3" class="col-12 col-sm-3 col-form-label">Tải bài hát</label>
                        <div class="col-12 col-sm-9">
                            <input class="form-control" type="file" id="filemp3" name="filemp3" accept=".mp3" multiple required>
                        </div>
                    </div>

                    <div class="row mb-3 mt-4">
                        <label for="fileimg" class="col-12 col-sm-3 col-form-label">Tải ảnh mô tả</label>
                        <div class="col-12 col-sm-9">
                            <input class="form-control" type="file" id="fileimg" name="fileimg" accept="image/*" multiple required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="filename" class="col-12 col-sm-3 col-form-label">Tên bài hát</label>
                        <div class="col-12 col-sm-9">
                            <input class="form-control" type="text" id="filename" name="filename" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fileown" class="col-12 col-sm-3 col-form-label">Ca sĩ</label>
                        <div class="col-12 col-sm-9">
                            <input class="form-control" type="text" id="fileown" name="fileown" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fileown" class="col-12 col-sm-3 col-form-label">Mô tả</label>
                        <div class="col-12 col-sm-9">
                            <input class="form-control" type="text" id="tag" name="tag">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="filelyrics" class="col-12 col-sm-3 col-form-label">Lời bài hát</label>
                        <div class="col-12 col-sm-9">
                            <textarea class="form-control" type="text" id="filelyrics" name="filelyrics" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around">
                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn-submit" name="submit" type="submit">Cập nhật</button>
                        <button class="btn btn-primary btn-block fa-lg mb-3 btn-submit btn-outline-danger" type="button" onclick="alert()" style="color: #fff;">Xóa</button>
                        <script>
                            function alert() {
                                swal({
                                    title: "Xác nhận xoá?",
                                    text: "Sau khi xoá, dữ liệu mất vĩnh viễn. Không thể truy cập được nữa",
                                    icon: "warning",
                                    buttons: true,
                                    dangerMode: true,
                                })
                                .then((willDelete) => {
                                    if (willDelete) {
                                        swal("Oops, Đã xoá thành công!", {
                                        icon: "success",
                                        });
                                    }
                                }); 
                            }
                        </script>
                    </div>
                    <style>
                        .gradient-custom-2 {
                            background: #fddddd;
                        }

                        .btn-submit {
                            color: black;
                            border: none;
                        }

                        @media (min-width: 768px) {
                            .gradient-form {
                                height: 100vh !important;
                            }
                        }

                        @media (min-width: 769px) {
                            .gradient-custom-2 {
                                border-top-right-radius: .3rem;
                                border-bottom-right-radius: .3rem;
                            }
                        }
                    </style>
                </form>
            </div>
        </div>

        <div class="sub-play col-12 col-lg-5">
            <div class="container vertical-scrollable">
                <?php 
                $rows = mysqli_query($conn, "SELECT * FROM songs ORDER BY id DESC")
                ?>

                <div class="row text-right">
                <?php foreach ($rows as $row) : ?>
                    <li class="item" value="<?php echo $row["id"]; ?>">
                        <p><b><?php echo $row["name"]; ?></b></p>
                        <p><?php echo $row["singer"]; ?></p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </content>
</body>

</html>