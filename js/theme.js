const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
    document.getElementById("content-music").classList.toggle('dark');
    document.getElementById("carouselExampleDark").classList.toggle('dark');
    document.getElementById("slider").classList.toggle('dark');
});