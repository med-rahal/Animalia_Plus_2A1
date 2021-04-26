function verif() {
    
    var errors = "<ul>";
    var nom = document.querySelector('#nom_administrateur').value;
    var pass = document.querySelector('#mot_passe').value;
   


    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
  
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
    }


    if (pass === "") {
        errors += "<li> Veuillez vérifier le mot de passe saisi </li>";
        document.querySelector('#mot_passe').value = "";
        document.querySelector('#mot_passe').focus();
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    }
}