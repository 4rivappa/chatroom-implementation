function popupOpen(){
   console.log("enetered popupopen function");
   document.getElementById("popup-button").style.display = "none";
   document.getElementById("popup-form").style.display = "block";
}
function popupClose(){
   document.getElementById("popup-form").style.display = "none";
   document.getElementById("popup-button").style.display = "block";
}
function passwordVisible() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
