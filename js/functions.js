// Navbar collapse for mobile
function navFunction() 
{
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
}


(function() {
  var id = document.getElementById('search-form');
  if (id && id.txtInput) {
    var name = id.txtInput;
    var unclicked = function() {
        if (name.value == '') {
            name.style.background = '#FFFFFF url(images/scp_002_image.jpg) left no-repeat';
        }
     };
     var clicked = function() {
        name.style.background = '#ffffff';
     };
  name.onfocus = clicked;
  name.onblur = unclicked;
  unclicked();
  }
})();
