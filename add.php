<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['adname'])){
   header('location:signin.php');
}

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['repassword']);

    $select = " SELECT * FROM accounts WHERE email = '$email' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $error[] = 'Tài khoản đã tồn tại!';

    }else{

        if($pass != $cpass){
            $error[] = 'Các mật khẩu không khớp!';
        }else{
            $insert = "INSERT INTO accounts(name, email, password, user_type) VALUES('$name','$email','$pass','admin')";
            mysqli_query($conn, $insert);
            header('location:admin.php');
        }
    }

};


?>

<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>

    <link rel='stylesheet' href='styles/style.css'>
    <script src="./cute-alert-master/cute-alert.js"></script>
    <link rel='stylesheet' href='styles/style.css'>
    <link rel="stylesheet" href="./styles/alert.css" />

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
                            <?php
                                if(isset($_SESSION['adname'])){
                                    echo '<li><a class="dropdown-item" href="./admin.php">Quản trị bài hát</a></li>';
                                }
                            ?>
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
    <section class="w-100 p-4 p-xl-5" style="background-color: #eee; border-radius: .5rem .5rem 0 0;">
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

        <script>
            function checkPassword(form) {
                if (form.password.value != form.repassword.value) {
                    cuteToast({
                        type: "warning", // or 'info', 'error', 'warning'
                        message: "Các mật khẩu phải khớp với nhau",
                        timer: 5000
                    })
                    event.preventDefault();
                }

                // If same return True.
                else {
                    cuteToast({
                        type: "warning", // or 'info', 'error', 'warning'
                        message: "Đăng ký thành công",
                        timer: 5000
                    })
                }
            }

            document.getElementById('error_message')
        </script>
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <h4 class="mt-1 mb-5 pb-1">Đăng ký (Giành cho quản trị viên)</h4>

                                <form action="" method="POST" onSubmit = "return checkPassword(this)">

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email" style="margin-left: 0px;">Email</label>
                                        <input type="email" required id="email" name="email" class="form-control" placeholder="Nhập email">
                                        <div class="form-notch">
                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                            <div class="form-notch-middle" style="width: 66.4px;"></div>
                                            <div class="form-notch-trailing"></div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name" style="margin-left: 0px;">Tên của bạn</label>
                                        <input type="text" required id="name" name="name" class="form-control" placeholder="Nhập họ và tên">
                                        <div class="form-notch">
                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                            <div class="form-notch-middle" style="width: 64.8px;"></div>
                                            <div class="form-notch-trailing"></div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password" style="margin-left: 0px;">Mật khẩu</label>
                                        <input type="password" required id="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                                        <div class="form-notch">
                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                            <div class="form-notch-middle" style="width: 66.4px;"></div>
                                            <div class="form-notch-trailing"></div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="repassword" style="margin-left: 0px;">Xác nhận mật khẩu</label>
                                        <input type="password" required id="repassword" name="repassword" class="form-control" placeholder="Nhập lại mật khẩu">
                                        <div class="form-notch">
                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                            <div class="form-notch-middle" style="width: 64.8px;"></div>
                                            <div class="form-notch-trailing"></div>
                                        </div>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn row btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn-submit" name="submit" type="submit">Đăng ký</button>
                                        <?php
                                        if(isset($error)){
                                            foreach($error as $error){
                                                echo '<span class="error-msg row justify-content-center">'.$error.'</span>';
                                            };
                                        }; 
                                        ?>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <img src="./img/logo.png" alt="logo" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>