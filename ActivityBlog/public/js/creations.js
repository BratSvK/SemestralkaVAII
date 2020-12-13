const addBtn = document.getElementById("addActivity");
const navbarIconBtn = document.querySelector("button");
const logo = document.getElementById('logo');

addBtn.addEventListener("click", () => {
    $('#exampleModal').modal('show');
})

$(function (){
    $('#addActivity').tooltip()
})


navbarIconBtn.addEventListener("click", () => {

    // zavola sa ked sa klikne a naopak toogle je na to
    logo.classList.toggle("unvisible");
});
