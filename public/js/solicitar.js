const openModalButton = document.getElementById("openModal");
const closeModalButton = document.getElementById("closeModal");
const modalOverlay = document.getElementById("modalOverlay");

openModalButton.addEventListener("click", () => {
  modalOverlay.style.display = "flex";
});

closeModalButton.addEventListener("click", () => {
  modalOverlay.style.display = "none";
});