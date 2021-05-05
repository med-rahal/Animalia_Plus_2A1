function verif() {

    var errors = "<ul>";
    var nom_categorie = document.querySelector('#nom_categorie').value;
    var description = document.querySelector('#description').value;
    var duree_vie = document.querySelector('#duree_vie').value;



    if (nom_categorie.charAt(0) < 'A' || nom_categorie.charAt(0) > 'Z') {
       
        errors += "<li>Le nom categorie doit commencer par une lettre Majuscule </li>";
    }


    if (nom_categorie === "") {
        errors += "<li> Veuillez vérifier nom categorie saisi </li>";
        document.querySelector('#nom_categorie').value = "";
    }


    if (description === "") {
        errors += "<li> Veuillez vérifier description saisi </li>";
        document.querySelector('#description').value = "";
    }
    
    if (duree_vie === "") {
        errors += "<li> Veuillez vérifier duree vie saisi </li>";
        document.querySelector('#duree_vie').value = "";
    }
    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    }
}