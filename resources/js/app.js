import IMask from "imask";
import "./bootstrap";

// Funções auxiliares
function openModal(modal) {
    modal.classList.remove("hidden");
    document.body.classList.add("overflow-hidden"); // Travar scroll
}

function closeModal(modal) {
    modal.classList.add("hidden");
    document.body.classList.remove("overflow-hidden"); // Liberar scroll
}

// Abrir modal
document.querySelectorAll("[data-modal-target]").forEach((button) => {
    button.addEventListener("click", () => {
        const modalId = button.getAttribute("data-modal-target");
        const modal = document.getElementById(modalId);
        openModal(modal);
    });
});

// Fechar modal pelo botão
document.querySelectorAll("[data-modal-close]").forEach((button) => {
    button.addEventListener("click", () => {
        const modal = button.closest(".modal");
        closeModal(modal);
    });
});

// Fechar ao clicar fora do conteúdo
document.querySelectorAll(".modal").forEach((modal) => {
    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            closeModal(modal);
        }
    });
});

document.querySelectorAll(".telefone-input").forEach((e) => {
    IMask(e, {
        mask: "(00) 9 0000-0000",
    });
});

const userButton = document.getElementById("user-menu-button");
const userDropdown = document.getElementById("user-dropdown");

if (userButton) {
    userButton.addEventListener("click", () => {
        userDropdown.classList.toggle("hidden");
    });
    
    document.addEventListener("click", (event) => {
        if (
            !userButton.contains(event.target) &&
            !userDropdown.contains(event.target)
        ) {
            userDropdown.classList.add("hidden");
        }
    });
}

