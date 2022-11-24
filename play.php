<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['name'])){
    if(isset($_SESSION['adname'])){
        $_SESSION['name'] = $_SESSION['adname'];
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
    <link rel='stylesheet' href='styles/theme.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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
                    <div class="btn-group navbar-nav ms-auto">
                        <a class="nav-item nav-link item-none" id="welcome">Chào buổi sáng!</a>
                        <button type="button" class="btn dropdown-toggle users-log" data-bs-toggle="dropdown"></button>
                        <ul class="dropdown-menu">
                            <?php
                                if(!isset($_SESSION['name'])){
                                    echo '
                                    <li><a class="dropdown-item" href="#"><span><?php echo $_SESSION["name"] ?></span></a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <?php
                                    ';
                                }
                            ?>
                            <?php
                                if(isset($_SESSION['adname'])){
                                    echo '<li><a class="dropdown-item" href="./admin.php">Quản trị bài hát</a></li>';
                                }
                            ?>
                            <li><a class="dropdown-item" href="./logout.php"><?php if(isset($_SESSION['name']) or isset($_SESSION['adname'])) echo "Đăng xuất"; else echo "Trang chủ";?></a></li>
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

    <content id="content-music" class="row w-100" style="margin:0">
        <div id="right-content" class="main-play col-12 col-lg-7">
            <div class="container">
                <a id="top-left" class="item"></a>
                <div class="row text-right" style="width:100%; height:100px">
                    <li class="item col-10" >
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                    </li>
                    <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="1">Xoá</button>
                </div>
                <div class="row text-right" style="width:100%; height:100px">
                    <li class="item col-10" >
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                    </li>
                    <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="1">Xoá</button>
                </div>
                <div class="row text-right" style="width:100%; height:100px">
                    <li class="item col-10" >
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                    </li>
                    <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="1">Xoá</button>
                </div>
                <div class="row text-right" style="width:100%; height:100px">
                    <li class="item col-10" >
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                    </li>
                    <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="1">Xoá</button>
                </div>
                <div class="row text-right" style="width:100%; height:100px">
                    <li class="item col-10" >
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                    </li>
                    <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="1">Xoá</button>
                </div>
                <div class="row text-right" style="width:100%; height:100px">
                    <li class="item col-10" >
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                    </li>
                    <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="1">Xoá</button>
                </div>
                <div class="row text-right" style="width:100%; height:100px">
                    <li class="item col-10" >
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                    </li>
                    <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="1">Xoá</button>
                </div>
                <div class="row text-right" style="width:100%; height:100px">
                    <li class="item col-10" >
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                    </li>
                    <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="1">Xoá</button>
                </div>
                <div class="row text-right" style="width:100%; height:100px">
                    <li class="item col-10" >
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                    </li>
                    <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="1">Xoá</button>
                </div>
                <div class="row text-right" style="width:100%; height:100px">
                    <li class="item col-10" >
                        <p><b>Tên bài hát</b></p>
                        <p>Tên tác giả</p>
                    </li>
                    <button name="delete" class="btn btn-danger btn-xs col-2 delete" style="height:40%; margin:auto;" id="1">Xoá</button>
                </div>
                <span id="details"></span>
            </div>
            

            <div class="control" onclick="location.href='#top-left'">
                <i class="bi bi-file-arrow-down-fill icon-color random-color"></i>
                <i class="bi bi-play-circle-fill icon-color random-color"></i>
                <i class="bi bi-caret-right-fill icon-color random-color"></i>
                <i class="bi bi-heart-fill icon-color"></i>
                <script>
                    var icon = document.getElementsByClassName('random-color');
                    for (var i = 0; i < icon.length; i++) {
                        icon[i].onmouseover = function(e) {
                            this.style['color'] = '#' + Math.floor(Math.random() * 16777215).toString(16);
                        }
                        icon[i].onmouseout = function(e) {
                            this.style['color'] = '#eee';
                        }
                    }
                </script>
            </div>
            
            <script>
                $(document).ready(function(){
                    load_data();

                    function load_data()
                    {
                        $.ajax({
                            url:"get_playlist.php",
                            method:"POST",
                            dataType:"json",
                            success:function(data)
                            {
                                $('#details').html(data.details);
                            }
                        });
                    }

                    

                    $(document).on('click', '.delete', function(){
                        var id = $(this).attr("id");
                        var action = 'remove';
                        if(confirm("Bạn có chắc không nghe bài hát này nữa?"))
                        {
                            $.ajax({
                                url:"main.php",
                                method:"POST",
                                data:{id:id, action:action},
                                success:function()
                                {
                                    load_data();
                                    alert("Bài hát đã được xoá khỏi danh sách");
                                }
                            })
                        }
                        else
                        {
                            return false;
                        }
                    });

                    $(document).on('click', '#clear_playlist', function(){
                        var action = 'empty';
                        $.ajax({
                            url:"main.php",
                            method:"POST",
                            data:{action:action},
                            success:function()
                            {
                                load_cart_data();
                                alert("Danh sách phát đã trống");
                            }
                        });
                    });
                });
            </script>
        </div>

        <div id="left-content" class="sub-play col-12 col-lg-5">
            <div class="container vertical-scrollable" >
                <?php 
                    $results = mysqli_query($conn, "SELECT * FROM songs ORDER BY id ASC");
                ?>
                <div class="row" id="wrapper" style="width:100%">
                <li id="top-right"></li>   
                <ul style="width:100%">
                
                <?php foreach ($results as $row) : ?>
                    <div class="row">
                        <li class="item col-10" value="<?php echo $row["id"]; ?>">
                            <p><b><?php echo $row["name"]; ?></b></p>
                            <p><?php echo $row["singer"]; ?></p><br>
                            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
                            <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />
                            <input type="hidden" name="singer" value="<?php echo $row["singer"]; ?>" />
                        </li>
                        <input type="submit" name="add_to_play" style="height:20%; margin:auto; background-color:#fddddd" class="btn col-2" value="Play"/>
                    </div>
                <?php endforeach; ?>
                </ul>
                </div>
                <script src="./js/play.js"></script>
            </div>
            <script>
                function ajsearch () {
                    // Nhận yêu cầu tìm kiếm
                    var data = new FormData();
                    data.append("search", document.getElementById("search").value);
                    data.append("ajax", 1);

                    // Ajax yêu cầu tìm kiếm
                    fetch("search.php", { method:"POST", body:data })
                    .then(res => res.json()).then((results) => {
                        var wrapper = document.getElementById("wrapper");
                        if (results.length > 0) {
                            wrapper.innerHTML = "<li id='top-right'></li>";
                            for (let res of results) {
                                let line = document.createElement("div");
                                line.classList.add('row');
                                line.innerHTML = `
                                    <li class="item col-10" value="${res["id"]}">
                                        <p><b>${res["name"]}</b></p>
                                        <p>${res["singer"]}</p><br>
                                        <input type="hidden" name="id" value="${res["id"]}" />
                                        <input type="hidden" name="name" value="${res["name"]}" />
                                        <input type="hidden" name="singer" value="${res["singer"]}" />
                                    </li>
                                    <input type="submit" name="add_to_play" style="height:30%; margin:auto; background-color:#fddddd" class="btn col-2" value="Play"/>
                                `;
                                wrapper.appendChild(line);  
                            }
                        } else { wrapper.innerHTML = "<li class='item empty-result'>Không có kết quả!</li>"; }
                    });
                    return false;
                }

                $(document).ready(function(){
                    $(document).on('click', '.add_to_play', function(){
                        var id = $(this).attr("id");
                        var name = $('#name'+id+'').val();
                        var singer = $('#singer'+id+'').val();
                        var action = "add";
                        if(true)
                        {
                            $.ajax({
                                url:"main.php",
                                method:"POST",
                                data:{id:id, name:name, singer:singer, action:action},
                                success:function(data)
                                {
                                    load_data();
                                    alert("Added music to play");
                                }
                            });
                        }
                        else
                        {
                            alert("This song was in playlist");
                        }
                    });
                });
            </script>
        </div>
    </content>
    <div id="popup-widget" style="position: fixed; bottom: 20px; right: 60px; font-size: 40px; color: #fff">
        <i class="bi bi-arrow-up-circle-fill" onclick="location.href='#top-right'"></i>
    </div>
    
</body>
<script>
    const chk = document.getElementById('chk');

    chk.addEventListener('change', () => {
        document.getElementById("right-content").classList.toggle('mid-dark');
        document.getElementById("left-content").classList.toggle('mid-dark');
        document.getElementById("content-music").classList.toggle('dark');
    });
</script>
</html>