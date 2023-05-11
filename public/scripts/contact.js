const form = document.querySelector("form");

form.addEventListener("submit", (event) => {
    event.preventDefault();

    const name = form.elements["name"].value;
    const email = form.elements["email"].value;
    const message = form.elements["message"].value;

    // Envoie les informations du formulaire vers le serveur ici
    // code qu'il reste à coder.


    // et affiche un message de confirmation à l'utilisateur
    alert("Message envoyé avec succès!");
});
