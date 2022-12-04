const items = document.querySelectorAll('.item');

items.forEach(item => {
    item.addEventListener('click', function handleClick() {
        var id = item.id;
        var name = document.getElementById('name'+id).innerHTML;
        var singer = document.getElementById('singer'+id).innerHTML;
        var music = document.getElementById('music'+id).value;
        console.log(id)
        console.log(name)
        console.log(singer)
        console.log(music)
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{id:id, name:name, singer:singer, music:music, action:"add_to_play"}
        });
        location.href = "./play.php";
    });
});