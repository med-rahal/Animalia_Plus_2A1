function verif() {
    var errors = "<ul>";
    var nom_accessiore = document.querySelector('#nom').value;
    /*  document.getElementById('nom').value
    */
    var prenom = document.querySelector('#prenom').value;
    var dateNais = document.querySelector('#dateNais').value;
    var tel = document.querySelector('#tel').value;
    var prof = document.querySelector('#prof').value
    var pref = document.querySelectorAll('input[type=checkbox]'), nb = 0, p = "";
    var pass = document.querySelector('#pass').value
    var pass1 = document.querySelector('#pass1').value;


    if (nom_accessoire.charAt(0) < 'A' || nom_accessoire.charAt(0) > 'Z') {
        //document.getElementById('erreur').innerHTML = "Le nom doit commencer par une lettre Majuscule";
        //return false;
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
    }
    if (nom_accessoire.charAt(0) < 'A' || nom_accessoire.charAt(0) > 'Z') {
        errors += "<li>Le prenom doit commencer par une lettre Majuscule </li>";
    }
    if (dateNais === "") {
        errors += "<li>La date est obligatoire </li>";
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

    if (prof === 'select') {
        errors += "<li>Veuillez indiquer votre profession </li>";
    }

    for (var i = 0; i < pref.length; i++) {
        if (pref[i].checked) {
            nb++;
            p += pref[i].value + " ";
        }
    };
    if (nb < 2) {
        errors += "<li> Veuillez sélectionner au moins deux styles musicaux </li>";
    };

    if (pass !== pass1 || pass === "" || pass1 === "") {
        errors += "<li> Veuillez vérifier le mot de passe saisi </li>";
        document.querySelector('#pass').value = "";
        document.querySelector('#pass1').value = "";
        document.querySelector('#pass').focus();
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
        var msg = "Bienvenue " + nom + " "
            + prenom + ".\n Vos préférences: " + p;

        alert(msg);
    }


}