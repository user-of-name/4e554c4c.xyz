
var close = 0;

function contentToggler(project_id) {

  // if (close != 0){
  // document.getElementById("descr"+close).style.display = "none";
  // document.getElementById("img"+close).style.display = "none";
};
  var x = document.getElementById("descr"+project_id);
  var y = document.getElementById("img"+project_id);
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "block";
  } else {
    x.style.display = "none";
    y.style.display = "none";
  }
  var close = project_id;
};
function contentHide(project_id) {
  var x = document.getElementById("descr"+project_id);
  var y = document.getElementById("img"+project_id);
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "block";
  } else {
    x.style.display = "none";
    y.style.display = "none";
  }
};

// const button = document.querySelector("a");

// button.addEventListener("click", updateButton);

/*
const imgTogglerParent = document.querySelector("#imgTogglerParent");
imgTogglerParent.addEventListener("mouseover", selectToggler, false);

function selectToggler(e) {
  if (e.target !== e.currentTarget) {
    const clickedItem = e.target.id;
    alert
  }
  e.stopPropagation();
};

function ToggleImgOn(e) {
  if (clickedItem == ("#togglerMeme")) {
  img1.style.display = ("block");
  }
};*/
