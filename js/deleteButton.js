const Delete = document.querySelector(".delete");

const buttonDelete = document.querySelector(".deleteButton");

buttonDelete.addEventListener("click", () => {
    Delete.classList.add("visible");
});

const CancelDelete = document.querySelector(".cancelDelete");

CancelDelete.addEventListener("click", () => {
    Delete.classList.remove("visible");
});