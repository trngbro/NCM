if (new Date().getHours() > 12) {
    document.getElementById("welcome").innerHTML = "Chào buổi chiều!";
}
if (new Date().getHours() > 18) {
    document.getElementById("welcome").innerHTML = "Chào buổi tối!";
}