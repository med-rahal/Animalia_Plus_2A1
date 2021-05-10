function verif() {
    var errors = "<ul>";
    var nom = document.querySelector('#nom_alimentation').value;
    var prix = document.querySelector('#prix').value;
    var type = document.querySelector('#type').value;
    var ref_alimentation = document.querySelector('#ref_alimentation').value;
    var categorie_alimentation = document.querySelector('#cat_alimentation').value;


    if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
  
        errors += "<li>Le nom doit commencer par une lettre Majuscule </li>";
    }
    if (prix == '0') {
        errors += "<li>Le prix doit > 0 </li>";
    }

    if (nom === "") {
        errors += "<li> Veuillez saisir le nom </li>";
        document.querySelector('#nom').value = "";

    }
    if (prix === "") {
        errors += "<li> Veuillez saisir le prix </li>";
        document.querySelector('#prix').value = "";
  
    }
    if (type === "") {
        errors += "<li> Veuillez saisir le type </li>";
  
 
    }
    if (categorie_alimentation === "") {
        errors += "<li> Veuillez saisir la catégorie</li>" ;

     
    }
    if (ref_alimentation === "") {
        errors += "<li> Veuillez saisir le référence</li>";
    
    
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    }
}