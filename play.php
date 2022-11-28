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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"  rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="./cute-alert-master/cute-alert.js"></script>
    <link rel='stylesheet' href='styles/style.css'>
    <link rel="stylesheet" href="./styles/alert.css" />
    <link rel='stylesheet' href='styles/theme.css'>
    <script src="./js/play.js"></script>
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
                            <input type="text" id="search" autocomplete="off" class="form-control" placeholder="Tìm kiếm bài hát">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" name="search" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="btn-group navbar-nav ms-auto">
                        <a class="nav-item nav-link item-none" id="welcome">Chào buổi sáng!</a>
                        <script src="./js/welcome.js"></script>
                        <button type="button" class="btn dropdown-toggle users-log" data-bs-toggle="dropdown"></button>
                        <ul class="dropdown-menu">
                            <?php
                                if(isset($_SESSION['name']) || isset($_SESSION['adname'])){
                                    echo '
                                    <li><a class="dropdown-item" href="#"><span><?php echo $_SESSION["name"] ?></span></a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
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
                <ul id="details" class="row"></ul>
            </div>

            <div id="progressbar">
                <div id="progressed"></div>
            </div>

            <div class="control" onclick="location.href='#top-left'">
                <i class="bi bi-file-arrow-down-fill icon-color random-color"></i>
                <i class="bi bi-play-circle-fill icon-color random-color" id="changeicon" ></i>
                <i class="bi bi-caret-right-fill icon-color random-color" onclick="nextSong()"></i>
                <script src="./js/play.js"></script>
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

                    
                    var changeicon = document.getElementById('changeicon');
                    changeicon.onclick = function(){
                        if(document.getElementById("details").childNodes[1].childNodes[1].innerText === 'Không có bài hát nào để phát!'){
                            cuteToast({
                                type: "error", // or 'info', 'error', 'warning'
                                message: "Không có bài nhạc nào trong danh sách",
                                timer: 5000
                            })
                            console.log("Danh sách rỗng");
                            return;
                        }
                        if(typeof(audio) == "undefined"){
                            autoPlay();
                        }
                        else if(changeicon.classList.contains('bi-play-circle-fill')){
                            changeicon.classList.remove('bi-play-circle-fill');
                            changeicon.classList.add('bi-pause-circle-fill');
                            audio.play();
                        }
                        else if(changeicon.classList.contains('bi-pause-circle-fill')) {
                            changeicon.classList.remove('bi-pause-circle-fill');
                            changeicon.classList.add('bi-play-circle-fill');
                            audio.pause();
                        }
                    };
                   
                    // $("#details li:eq(0)").css( "background-color", "yellow" );
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
                            <input type="hidden" id="id<?php echo $row["id"]; ?>" value="<?php echo $row["id"]; ?>" />
                            <input type="hidden" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />
                            <input type="hidden" id="singer<?php echo $row["id"]; ?>" value="<?php echo $row["singer"]; ?>" />
                            <input type="hidden" id="music<?php echo $row["id"]; ?>" value="<?php echo $row["music"]; ?>" />
                        </li>
                        <input type="button" name="add_to_play" id="<?php echo $row["id"]; ?>" style="height:20%; margin:auto; background-color:#fddddd" class="btn col-2 add_to_play" value="Phát"/>
                    </div>
                <?php endforeach; ?>
                </ul>
                </div>
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
                                        <input type="hidden" id="id${res["id"]}" value="${res["id"]}" />
                                        <input type="hidden" id="name${res["id"]}" value="${res["name"]}" />
                                        <input type="hidden" id="singer${res["id"]}" value="${res["singer"]}" />
                                        <input type="hidden" id="music${res["id"]}" value="${res["music"]}" />
                                    </li>
                                    <input type="submit" name="add_to_play" id="${res["id"]}" style="height:30%; margin:auto; background-color:#fddddd" class="btn col-2 add_to_play" value="Phát"/>
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
                        var music = $('#music'+id+'').val();
                        var action = "add_to_play"; 
                        if(true)
                        {
                            $.ajax({
                                url:"action.php",
                                method:"POST",
                                data:{id:id, name:name, singer:singer, music:music, action:action},
                                success:function(data)
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
                            });
                        }
                    });


                    $(document).on('click', '.delete', function(){
                        var id = $(this).attr("id");
                        var action = 'remove';
                        if(true)
                        {
                            $.ajax({
                                url:"action.php",
                                method:"POST",
                                data:{id:id, action:action},
                                success:function()
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
                            url:"action.php",
                            method:"POST",
                            data:{action:action},
                            success:function()
                            {
                                load_data();
                                alert("Danh sách phát đã trống");
                            }
                        });
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