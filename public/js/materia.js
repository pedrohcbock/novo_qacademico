document.addEventListener('DOMContentLoaded', function () {
    const materiaForm = document.getElementById('materiaForm');
    const materiaIdInput = document.getElementById('materiaId');

    materiaForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const nomeMateria = document.getElementById('nomeMateria').value;
        const cursosSelecionados = Array.from(document.querySelectorAll('input[name="curso[]"]:checked')).map(input => input.value);

        const cursosStr = cursosSelecionados.join(', ');
        alert(`Matéria adicionada:\nID: ${materiaIdInput.value}\nNome: ${nomeMateria}\nCursos: ${cursosStr}`);

        materiaForm.reset();
    });
});
