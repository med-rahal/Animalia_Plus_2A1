function verif() {
    var errors = "<ul>";
    var nom = document.querySelector('#nom_client').value;
    var prenom = document.querySelector('#prenom_client').value;
    var dateNais = document.querySelector('#date_naissance').value;
    var type = document.querySelector('#type_client').value;
    var email= document.querySelector('#email_client').value;
    var login= document.querySelector('#login_client').value;
    var pass = document.querySelector('#mot_passe').value;
    var pass1 = document.querySelector('#mdp_verif').value;
    var emailregex=/^([a-zA-Z.a-zA-Z]+@gmail.com)*$/; 


    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
  
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
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

    if (tel.substring(0, 1) != '7' || tel.length != 8) {
        errors += "<li>Numéro de téléphone erroné </li>";
    }

    if (type === 'select') {
        errors += "<li>Veuillez indiquer votre type de compte </li>";
    }



    if (login.charAt(0) < 'A' ||login.charAt(0) > 'Z') {
        errors += "<li>Le login doit commencer par une lettre Majuscule </li>";
    }

    if (pass !== pass1 || pass === "" || pass1 === "") {
        errors += "<li> Veuillez vérifier le mot de passe saisi </li>";
        document.querySelector('#mot_passe').value = "";
        document.querySelector('#mdp_verif').value = "";
        document.querySelector('#pass').focus();
    }

    if(email.match(emailregex) && pass.length >=8) 
    {
        return true; 
     }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } 
}