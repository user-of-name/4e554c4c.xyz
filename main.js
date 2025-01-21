document.addEventListener('DOMContentLoaded', () => {
  document.documentElement.style.setProperty('--vh', `${viewportHeight * 0.01}px`)
})
 
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


    //this thing waits for the content to load and then runs the init function okey cool
     document.addEventListener('DOMContentLoaded', init);

//when page loads it checks device width and does the myfunction okey okey okey
     function init(){
      let query = window.matchMedia("(max-width:600px)");
      contributors_toggle()
      if (query.matches){
        text_toggle();
      } else {
      }
    }
    
    //this is for the mobile version thing
    function text_toggle() {
      var x = document.getElementById("mobile-d-content");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function contributors_toggle() {
      var x = document.getElementById("contributorsList");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

//this was for the index page to show the project i guess????...... maybe? commented this shit out and it still works so i guess it wasnt in use....

// function contentToggler(project_id) {
//   var y = document.getElementById("img"+project_id);

//   if (x.style.display === "none") {
//     y.style.display = "block";
//   } else {
//     y.style.display = "none";
//   }
// };

// function contentHide(project_id) {
//   var y = document.getElementById("img"+project_id);
//   if (x.style.display === "none") {
//     y.style.display = "block";
//   } else {
//     y.style.display = "none";
//   }
// };

