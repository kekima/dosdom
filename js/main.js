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


let projectOption = document.getElementsByClassName("project-option-trigger");
let projectOptionDescr = document.getElementsByClassName("project-option-descr");

projectOption[0].style.background = "#fff";
projectOptionDescr[0].style.display = "flex";

function openDescr(descrNumber) {

  for (i = 0; i < projectOption.length; i++) {
      projectOptionDescr[i].style.display = "none";
      projectOption[i].style.background = "none";
    }

  projectOptionDescr[descrNumber].style.display = "flex";
  projectOption[descrNumber].style.background = "#fff";
}


/*
for (i = 0; i < projectOption.length; i++) {
      //for (k = 0; k < projectOptionDescr.length; k++) {
    projectOption[i].onclick = function () {
    projectOptionDescr[i].style.display = "flex";
   // }
    
  }
}
*/