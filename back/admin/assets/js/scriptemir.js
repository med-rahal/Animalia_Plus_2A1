function verif() {
    var errors = "<ul>";
    var nom_alimentation = document.querySelector('#nom_alimentation').value;
    var ref_alimentation = document.querySelector('#ref_alimentation').value;
    var categorie_alimentation = document.querySelector('#categorie_alimentation').value;
    var type = document.querySelector('#type').value;
    var prix = document.querySelector('#prix').value;


    if (nom_alimentation.charAt(0) < 'A' || nom_alimentation.charAt(0) > 'Z') {
  
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
    }


    if (nom_alimentation === "") {
        errors += "<li> Veuillez vérifier nom saisi </li>";
        document.querySelector('#nom_alimentation').value = "";

    }
    if (prix === "") {
        errors += "<li> Veuillez vérifier prix saisi </li>";
        document.querySelector('#prix').value = "";
  
    }
    if (ref_alimentation === "") {
        errors += "<li> Veuillez vérifier REF saisi </li>";
  
 
    }
    if (categorie_alimentation === "") {
        errors += "<li> Veuillez vérifier Categorie saisi </li>";

     
    }
    if (type === "") {
        errors += "<li> Veuillez vérifier type saisi </li>";
    
    
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>";
        document.getElementById('erreur').innerHTML = errors;
        return false;
    }
}