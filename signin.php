<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM accounts WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
        

        if($row['user_type'] == 'admin'){
            $_SESSION['adname'] = $row['name'];
            header('location:admin.php');
        }
            

        elseif($row['user_type'] == 'user') {
            $_SESSION['name'] = $row['name'];
            header('location:home.php');
        }

        
    }else{
        $error[] = 'incorrect email or password!';
    }

};
?>

<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel='stylesheet' href='styles/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Music</title>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fddddd;">
            <img src="./img/logo.png" alt="logo" style="width: 25px; margin: 0 20px;">
            <a href="./" class="navbar-brand">NCM</a>
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


        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <h4 class="mt-1 mb-5 pb-1">Đăng nhập</h4>
                                
                                <form method="POST">

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
                                        <label class="form-label" for="password" style="margin-left: 0px;">Mật khẩu</label>
                                        <input type="password" required id="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
                                        <div class="form-notch">
                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                            <div class="form-notch-middle" style="width: 64.8px;"></div>
                                            <div class="form-notch-trailing"></div>
                                        </div>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn-submit" name="submit" type="submit">Đăng nhập</button>
                                        <?php
                                        if(isset($error)){
                                            foreach($error as $error){
                                                echo '<span class="error-msg row justify-content-center">'.$error.'</span>';
                                            };
                                        };
                                        ?>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <p class="mb-0 me-2">Bạn chưa có tài khoản?</p>
                                        <button type="button" class="btn btn-outline-danger" onclick="location.href='./signup.php'">Tạo mới</button>
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