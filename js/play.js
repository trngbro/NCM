var audio;

audio.ontimeupdate = () => {if(Math.floor(audio.currentTime*100/audio.duration)==100) nextSong();}

function autoPlay(){
    audio = new Audio("./src/sound/"+document.getElementById("details").childNodes[1].childNodes[5].value);
    seekOn();
    audio.play();
}

function nextSong(){
    if(document.getElementById("details").childNodes[1].childNodes[1].innerText === 'Không có bài hát nào để phát!'){
        cuteToast({
            type: "error", // or 'info', 'error', 'warning'
            message: "Không có bài nhạc nào trong danh sách",
            timer: 5000
        })
        console.log("Danh sách rỗng");
        return;
    }
    else {
        audio.pause();
        var current = document.getElementById("details").childNodes[1].childNodes[7].value;

        $.ajax({
            url:"action.php",
            method:"POST",
            data:{id:current, action:"remove"},
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

        audio = new Audio("./src/sound/"+document.getElementById("details").childNodes[5].childNodes[5].value);
        audio.play();
    }
}

// 



// Update progress bar
var progressed = document.getElementById('progressed');
var progressbar = document.getElementById('progressbar');

audio.ontimeupdate = function(e){
    document.getElementById("progressed").style.width = Math.floor(audio.currentTime*100/audio.duration)+"%";
}

progressbar.onclick = function(e){
    console.log((audio.currentTime = e.offsetX/progressbar.offsetWidth)*audio.duration);
}




