// SELECTING ALL TEXT ELEMENTS
var adresse_mail = document.forms['f']['adresse_mail'];

/*date-*/


// SELECTING ALL ERROR DISPLAY ELEMENTS
var mail_erreur = document.getElementById('mail_erreur');

// SETTING ALL EVENT LISTENERS

// validation function
function Validate() {
  // id produit
 if (adresse_mail.value == "") {
    id_produit.style.border = "1px solid red";
    document.getElementById('mail_div').style.color = "red";
    id_erreur.textContent = "Veuillez remplir le champs";
    adresse_mail.focus();
    return false;
  }
  // id produit
  
  }
  // check if the two passwords match
  /*if (titre.value != remise.value) {
    titre.style.border = "1px solid red";
    document.getElementById('remise_div').style.color = "red";
    titre.style.border = "1px solid red";
    titre_erreur.innerHTML = "The two passwords do not match";
    return false;
  }*/

// event handler functions
