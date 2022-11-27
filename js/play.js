function temp(){
    var current;

    current = document.getElementById("details").childNodes[1].childNodes[5].value;

    audio = new Audio("./src/sound/"+current);

    audio.play();

    console.log("DO");
}

function nextSong(){
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
}