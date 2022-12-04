<?php
use PHPMailer\PHPMailer\PHPMailer;
@include 'config.php';

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
            $insert = "INSERT INTO accounts(name, email, password, user_type, flag) VALUES('$name','$email','$pass','user','null')";
            mysqli_query($conn, $insert);

            require_once "PHPMailer/PHPMailer.php";
            require_once "PHPMailer/SMTP.php";
            require_once "PHPMailer/Exception.php";

            $mail = new PHPMailer();

            //SMTP Settings
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "nguyentrungnghiacmp528@gmail.com"; //enter you email address
            $mail->Password = 'jygwqxiczzyuvgzp'; //enter you email password
            $mail->Port = 465;
            $mail->SMTPSecure = "ssl";

            //Email Settings
            $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
            $insert = "INSERT INTO verify(email, code) VALUES('$email','$verification_code')";
            mysqli_query($conn, $insert);

            $mail->isHTML(true);
            $mail->setFrom($email, $name);
            $mail->addAddress($email); //enter you email address
            $mail->Subject = ("Email verification");
            $mail->Body = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
    
            if ($mail->send()) {
                $status = "success";
                $response = "Email is sent!";
            } else {
                $status = "failed";
                $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
            }
            header("Location: account-verification.php?email=" . $email);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <script src="./cute-alert-master/cute-alert.js"></script>
    <link rel='stylesheet' href='styles/style.css'>
    <link rel="stylesheet" href="./styles/alert.css" />
    
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

                                <h4 class="mt-1 mb-5 pb-1">Đăng ký</h4>

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