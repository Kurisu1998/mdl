// Get the modal
var modal = document.getElementById("myModal");
var modal_un = document.getElementById("modal_un");
var connn = document.getElementById("createEventModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var contact = document.getElementById("contact");
var connection = document.getElementById("calendar");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span_un = document.getElementsByClassName("close_un")[0];
var span_deux = document.getElementsByClassName("close_two")[0];



// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
contact.onclick = function() {
  modal_un.style.display = "block";
}
connection.onclick = function() {
  connn.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
span_un.onclick = function() {
  modal_un.style.display = "none";
}
span_deux.onclick = function() {
  connn.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal_un) {
    modal_un.style.display = "none";
  }
  if (event.target == connn) {
    connn.style.display = "none";
  }
}