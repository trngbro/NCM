<?php
@include 'config.php';

if (isset($_POST["verify_email"]))
{
    $email = $_POST["email"];
    $verification_code = $_POST["verification_code"];

    // Đánh dấu tài khoản đã xác thực
    $sql = "UPDATE verify INNER JOIN accounts ON verify.email = accounts.email SET accounts.flag=NOW() WHERE accounts.email = '" . $email . "' AND verify.code = '" . $verification_code . "'";
    $result  = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0)
    {
        header("Location: signin.php");
    }
}

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

                                <h4 class="mt-1 mb-5 pb-1">Xác thực tài khoản</h4>
                                
                                <form method="POST">

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email" style="margin-left: 0px;">Email</label>
                                        <input type="email" disabled="disabled" value="<?php echo $_GET['email']; ?>" id="email" name="verification_email" class="form-control">
                                        <div class="form-notch">
                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                            <div class="form-notch-middle" style="width: 66.4px;"></div>
                                            <div class="form-notch-trailing"></div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password" style="margin-left: 0px;">Mã xác thực</label>
                                        <input type="text" required id="code" name="verification_code" class="form-control" placeholder="Nhập mã xác thực qua email">
                                        <div class="form-notch">
                                            <div class="form-notch-leading" style="width: 9px;"></div>
                                            <div class="form-notch-middle" style="width: 64.8px;"></div>
                                            <div class="form-notch-trailing"></div>
                                        </div>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn-submit" name="submit" type="submit">Kiểm tra</button>
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