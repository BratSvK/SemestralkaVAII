
const infoBtn = document.getElementById('info');
const navbarIconBtn = document.querySelector("button");
const logo = document.getElementById('logo');
const formLogOut = document.getElementById('logout');
const logOutIcon = document.getElementById('logOutI');


//using JQUERY
$(infoBtn).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});


navbarIconBtn.addEventListener("click", () => {

    // zavola sa ked sa klikne a naopak toogle je na to
    logo.classList.toggle("unvisible");
});

logOutIcon.addEventListener("click" ,function() {

    formLogOut.submit();
});













