document.addEventListener('DOMContentLoaded', function () {
    const cursoForm = document.getElementById('cursoForm');
    const cursoIdInput = document.getElementById('cursoId');

    cursoForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const nomeCurso = document.getElementById('nomeCurso').value;
        const turmasSelecionadas = Array.from(document.querySelectorAll('input[name="turma[]"]:checked')).map(input => input.value);

        

        const turmasStr = turmasSelecionadas.join(', ');
        alert(`Curso adicionado:\nID: ${cursoIdInput.value}\nNome: ${nomeCurso}\nTurmas: ${turmasStr}`);

        cursoForm.reset();
    });
});
