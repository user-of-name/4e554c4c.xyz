 const mobileIndexToggler = document.getElementById("indexToggler");
 const mobileIndexContent = document.getElementById('indexContent');

 
    //  contentToggler.addEventListener("mouseclick", ToggleContentOn, false);
    //  imgToggler.addEventListener("mouseclick", ToggleContentOff, false);

    //  function ToggleImgOn()
    //  {
    //  img1.style.display = ("block");
    //  }
    //  function ToggleImgOff()
    //  {
    //  img1.style.display = ("none");
    //  };

     document.addEventListener('DOMContentLoaded', init);

     function init(){
      let query = window.matchMedia("(min-width:600px)");
      
      if (query.matches){
        myFunction();
      } else {

      }
    }
    
    function myFunction() {
      var x = document.getElementById("mobile-d-content");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    

function contentToggler(project_id) {
  var y = document.getElementById("img"+project_id);

  if (x.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
};

function contentHide(project_id) {
  var y = document.getElementById("img"+project_id);
  if (x.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
};

