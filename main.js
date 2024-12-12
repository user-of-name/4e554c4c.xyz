const imgToggler = document.getElementById("imgToggler");
const img1 = document.getElementById('img1');

    imgToggler.addEventListener("mouseover", ToggleImgOn, false);
    imgToggler.addEventListener("mouseout", ToggleImgOff, false);

    function ToggleImgOn()
    {
    img1.style.display = ("block");
    }
    function ToggleImgOff()
    {
    img1.style.display = ("none");
    }
;


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
