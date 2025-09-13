import { requestPost } from "./xhrRequest.js";

export default function handleKontaktFormular() {
    const form = document.getElementById("form");
    const alertP = document.getElementById("alertP");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        let name  = document.getElementById("kontaktFormNameID").value.trim();
        let email = document.getElementById("kontaktFormEmailID").value.trim();
        let text  = document.getElementById("kontaktTextID").value.trim();

        if (name === "" || email === "" || text === "") {
            alertP.textContent = "Bitte alle Felder ausfüllen!";
        } else {
            let url = window.location.origin + "/api/Kontakt";

            let data = { name, email, nachricht: text };

            requestPost(url, data)
                .then(data => {
                    alertP.textContent = "Vielen Dank! Nachricht verschickt.";
                    console.log("Antwort:", data);
                })
                .catch(err => {
                    alertP.textContent = "Fehler beim Senden!";
                    console.error("Fehler:", err);
                });
        }
    });
}
