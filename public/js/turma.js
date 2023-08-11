document.addEventListener('DOMContentLoaded', function () {
    const turmaForm = document.getElementById('turmaForm');
    const idInput = document.getElementById('id'); 

    turmaForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const nome = document.getElementById('nome').value;
        const id = idInput.value; 


        alert(`Turma adicionada:\nID: ${id}\nNome: ${nome}`);

        turmaForm.reset();
    });
});
