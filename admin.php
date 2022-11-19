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
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.7/bootstrap-confirmation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
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
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./">Đăng xuất</a></li>
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
                <form action="" style="width: 100%;">
                    <div class="row mb-3 mt-4">
                        <label for="filemp3" class="col-12 col-sm-3 col-form-label">Tải bài hát</label>
                        <div class="col-12 col-sm-9">
                            <input class="form-control" type="file" id="filemp3" accept=".mp3" multiple required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="filename" class="col-12 col-sm-3 col-form-label">Tên bài hát</label>
                        <div class="col-12 col-sm-9">
                            <input class="form-control" type="text" id="filename" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fileown" class="col-12 col-sm-3 col-form-label">Ca sĩ</label>
                        <div class="col-12 col-sm-9">
                            <input class="form-control" type="text" id="fileown" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="filelyrics" class="col-12 col-sm-3 col-form-label">Lời bài hát</label>
                        <div class="col-12 col-sm-9">
                            <textarea class="form-control" type="text" id="filelyrics" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around">
                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn-submit"
                            type="submit">Cập nhật</button>
                        <button class="btn btn-primary btn-block fa-lg mb-3 btn-submit btn-outline-danger" type="button"
                            data-bs-toggle="modal" data-bs-target="#confirm" confirm="Xác nhận xoá vv" style="color: #fff;">Xóa</button>
                                <!-- The Modal -->
                                <div class="modal" id="confirm">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Xác nhận xoá vĩnh viễn</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                Không thể hoàn tác sau khi xác nhận, thận trọng nhé!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Xác nhận</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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
                <div class="row text-right">
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                    <li class="item">
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                        <i class="bi bi-pencil-fill"></i>
                    </li>
                </div>
            </div>
        </div>
    </content>
</body>

</html>