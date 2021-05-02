document.getElementById("gros").innerHTML ="KABEYA";

var ouvre = document.getElementById("Ouvrir");
var ferme = document.getElementById("Fermer");
var Fenetre = "";

ouvre.addEventListener("click",fouvre);
ferme.addEventListener("click",fferme);

function fouvre(){
    Fenetre=window.open('Formulaire.php','_blank','width = 500');
}

function fferme(){
    Fenetre.close();
}
