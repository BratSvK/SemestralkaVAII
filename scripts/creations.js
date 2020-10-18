const addBtn = document.getElementById("addActivity");


addBtn.addEventListener("click", () => {
    $('#exampleModal').modal('show');
})

$(function (){
    $('#addActivity').tooltip()
})
