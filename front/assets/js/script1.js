
function verif() {
    var errors = "<ul>";
    var nom = document.querySelector('#nom_client').value;
    var prenom = document.querySelector('#prenom_client').value;
    var dateNais = document.querySelector('#date_naissance').value;
    var type = document.querySelector('#type_client').value;
    var login= document.querySelector('#login_client').value;
    var email= document.querySelector('#email_client').value;
    var pass = document.querySelector('#mot_passe').value;
    var pass1 = document.querySelector('#mdp_verif').value;
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/; 
    var response = grecaptcha.getResponse();





    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
  
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>"; 
         document.querySelector('#nom_client').focus();
    }
    if (prenom.charAt(0) < 'A' || prenom.charAt(0) > 'Z') {
        errors += "<li>Le prenom doit commencer par une lettre Majuscule </li>"; 
    }
    if (dateNais === "") {
        errors += "<li>La date de naissance est obligatoire </li>";
    }
    else {
        var today = new Date();
        dateNais = new Date(dateNais);
        if (today.getFullYear() - dateNais.getFullYear() < 18) {
            errors += "<li>Vous n'êtes pas un adulte </li>"; 
       
        }
    }

    if (!email.match(validRegex)) {
        errors += "<li> Forme Email doit étre respectée  </li>"; 

       }

  
    if (login.charAt(0) < 'A' ||login.charAt(0) > 'Z') {
        errors += "<li>Le login doit commencer par une lettre Majuscule </li>"; 
     
    }

    if (pass !== pass1 || pass === "" || pass1 === "" || pass.length < 8) {
        errors += "<li> Veuillez vérifier le mot de passe saisi </li>";
        document.querySelector('#mot_passe').value = "";
        document.querySelector('#mdp_verif').value = ""; 
    }
    if(response.length == 0)
       errors += "<li> Veuillez vérifier reCaptcha  </li>";


    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } 
}