function verif() 
{
    var errors = "<ul>";
    var nom_accessoire = document.querySelector('#nom_accessoire').value;
    /*  document.getElementById('nom_accessoire').value
    */
    var categorie_accessoire = document.querySelector('#categorie_accessoire').value;
    var ref_accessoire = document.querySelector('#ref_accessoire').value;
    var type = document.querySelector('#type').value
    var prix = document.querySelector('#prix').value



    if (nom_accessoire.charAt(0) < 'A' || nom_accessoire.charAt(0) > 'Z') {
        //document.getElementById('erreur').innerHTML = "Le nom_accessoire doit commencer par une lettre Majuscule";
        //return false;
        errors += "<li>Le Nom doit commencer par une lettre Majuscule </li>";
    }
    if (nom_accessoire === "") {
        errors += "<li>Saisie Votre Nom </li>";
        document.querySelector('#nom_accessoire').value = "";
    }
    if (ref_accessoire === "") {
        errors += "<li>La Reference est obligatoire </li>";
        document.querySelector('#ref_accessoire').value = "";
    }
    if (categorie_accessoire === "") {
        errors += "<li>La categorie est obligatoire </li>";
        document.querySelector('#categorie_accessoire').value = "";
    }
    if (type === "") {
        errors += "<li>Le type est obligatoire </li>";
        document.querySelector('#type').value = "";
    }
    if (prix === "") {
        errors += "<li>Le prix est obligatoire </li>";
        document.querySelector('#prix').value = "";
    }
   

    
    ;
    

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    } else {
        var msg = succes;

        alert(msg);
    }

}




