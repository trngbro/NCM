const items = document.querySelectorAll('.item');

items.forEach(item => {
    item.addEventListener('click', function handleClick(event) {
        console.log('item clicked', event);
        location.href = "./play.php";
    });
});