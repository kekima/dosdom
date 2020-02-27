let modal = document.getElementById("modal-box");
let btn = document.getElementById("modal-btn");
let span = document.getElementsByClassName("modal-close")[0];


btn.onclick = function () {
  modal.style.display = "block";
}

span.onclick = function () {
  modal.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


let modalButton = document.getElementsByClassName("modal-button-trigger");

for (i = 0; i < modalButton.length; i++) {
  modalButton[i].onclick = function () {
    modal.style.display = "block";
  }
}