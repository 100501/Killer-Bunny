//Navbar menú responsive
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}





function addElement () { 
  // crea un nuevo div 
  // y añade contenido 
  var newDiv = document.createElement("div"); 
  var newContent = document.createTextNode("Hola!¿Qué tal?"); 
  newDiv.appendChild(newContent); //añade texto al div creado. 

  // añade el elemento creado y su contenido al DOM 
  var currentDiv = document.getElementById("div1"); 
  document.body.insertBefore(newDiv, currentDiv); 
}