function verif() {
    
    var errors ="<ul>";
    var email= document.querySelector('#email_client').value;
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var pass = document.querySelector('#mot_passe').value;

    if (!email.match(validRegex)) {
        errors += "<li> Forme Email doit étre respectée  </li>"; 
        document.querySelector('#email_client').focus();
    }

    if (pass === "") {
        errors += "<li> Veuillez vérifier le mot de passe saisi </li>";
        document.querySelector('#mot_passe').value = "";
      
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    }


}