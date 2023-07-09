// script.js

// Exemple de fonctionnalité : Afficher une alerte lorsque le formulaire est soumis
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le formulaire de se soumettre
    
    // Récupérer les valeurs des champs du formulaire
    var nom = document.querySelector('input[name="nom"]').value;
    var email = document.querySelector('input[name="email"]').value;
    var message = document.querySelector('textarea[name="message"]').value;
    
    // Afficher une alerte avec les informations soumises
    alert('Formulaire soumis :\n\nNom : ' + nom + '\nEmail : ' + email + '\nMessage : ' + message);
});
