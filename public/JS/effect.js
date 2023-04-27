
// changer la couleur de la nav sur les pages blanches

if (window.location.href == "http://localhost/cvotreavenirMVC/starter/afficher" || window.location.href == "http://localhost/cvotreavenirMVC/pro/afficher" || window.location.href == "http://localhost/cvotreavenirMVC/CV/afficher" || window.location.href == "http://localhost/cvotreavenirMVC/cvImportant/afficher" || window.location.href == "http://localhost/cvotreavenirMVC/post/afficher") {
  document.body.style.backgroundColor = "white";
  document.body.style.color = "#0b1c3d";

  let navLinks = document.querySelectorAll("nav a");
  for (let i = 0; i < navLinks.length; i++) {
    navLinks[i].style.color = "#0b1c3d";
  }

}

//Faire apparaitre/disparaitre la nav barre

let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector(".logo img").style.top = "0";
    document.querySelector("nav").style.top = "0";
  } else {
    document.querySelector(".logo img").style.top = "-100px";
    document.querySelector("nav").style.top = "-100px"; /* ajoutez la hauteur de votre nav ici */
  }
  prevScrollpos = currentScrollPos;
}


ScrollReveal().reveal('.container-section2', { duration: 1300, origin:"left", distance:"1700px", opacity:1, reset:false});
ScrollReveal().reveal('.container-section3', { duration: 1300, origin:"right", distance:"1700px", opacity:1, reset:false});
ScrollReveal().reveal('.container-section4', { duration: 1300, origin:"left", distance:"1700px", opacity:1, reset:false});
ScrollReveal().reveal('.services', { duration: 1300, origin:"left", distance:"1700px", opacity:1, reset:false});
