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
