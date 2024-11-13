// script.js

document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Gracias por contactarnos. Nos pondremos en contacto contigo pronto.");
});
function toggleText() {
    const textBox = document.getElementById("text-box");
    const toggleBtn = document.getElementById("toggle-btn");

    // Alternar entre las clases para expandir o contraer el texto
    if (textBox.classList.contains("expanded")) {
        textBox.classList.remove("expanded");
        toggleBtn.innerText = "Ver más";
    } else {
        textBox.classList.add("expanded");
        toggleBtn.innerText = "Ver menos";
    }
}
