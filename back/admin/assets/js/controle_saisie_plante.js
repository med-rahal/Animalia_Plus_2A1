function verif() {
    var errors = "<ul>";
    var nom_categorie = document.querySelector('#nom_categorie').value;
    var nom_plante = document.querySelector('#nom_plante').value;
    var date_plante = document.querySelector('#date_plante').value;


    if (nom_categorie.charAt(0) < 'A' || nom_categorie.charAt(0) > 'Z') {
        //document.getElementById('erreur').innerHTML = "Le nom_categorie doit commencer par une lettre Majuscule";
        //return false;
        errors += "<li>Le nom_categorie doit commencer par une lettre Majuscule </li>";
    }
    if (nom_plante.charAt(0) < 'A' || nom_plante.charAt(0) > 'Z') {
        errors += "<li>Le nom_plante doit commencer par une lettre Majuscule </li>";
    }
    if (date_plante === "") {
        errors += "<li>La date est obligatoire </li>";
    }
    else {
        var today = new Date();
        date_plante = new Date(date_plante);
        if (today.getFullYear() - date_plante.getFullYear() < 0) {
            errors += "<li>Date invalide </li>";
        }
    }
    if (errors !== "<ul>") {
        document.querySelector('#error').style.color = 'red';
        errors += "</ul>"
        document.getElementById('error').innerHTML = errors;
        return false;
    } else {
        var msg = "Succès" ;

        alert(msg);
    }


}


