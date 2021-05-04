function verif() {
    var errors = "<ul>";
    var nom = document.querySelector('#nom').value;
    var prix = document.querySelector('#prix').value;
    var race = document.querySelector('#race').value;
    var id_vendeur = document.querySelector('#id_vendeur').value;
    var categorie_animal = document.querySelector('#categorie_animal').value;


    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
  
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
    }
    if (prix == '0') {
        errors += "<li>Le prix doit > 0 </li>";
    }

    if (nom === "") {
        errors += "<li> Veuillez vérifier nom saisi </li>";
        document.querySelector('#nom').value = "";

    }
    if (prix === "") {
        errors += "<li> Veuillez vérifier prix saisi </li>";
        document.querySelector('#prix').value = "";
  
    }
    if (race === "") {
        errors += "<li> Veuillez vérifier race saisi </li>";
  
 
    }
    if (id_vendeur === "") {
        errors += "<li> Veuillez vérifier ID Vendeu saisi </li>";

     
    }
    if (categorie_animal === "") {
        errors += "<li> Veuillez vérifier categorie saisi </li>";
    
    
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    }
}