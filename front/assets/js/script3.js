function verif() {
    
    var errors ="<ul>";
<<<<<<< HEAD
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
      
=======
  
    var pass = document.querySelector('#mot_passe').value;
   
    if (pass === "") {
        errors += "<li> Veuillez vérifier le mot de passe saisi </li>";
        document.querySelector('#mot_passe').value = "";
        document.querySelector('#mot_passe').focus();
>>>>>>> 144683f7e8657a761bc3322917553d57ce103627
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    }


}