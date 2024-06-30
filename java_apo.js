document.getElementById('addExp').addEventListener('click', function() {
    var experiencia = document.getElementById('experiencia');
    var div = document.createElement('div');
    div.classList.add('exp-item');
    div.innerHTML = `
        <label>Cargo:</label><input type="text" name="cargo[]" required>
        <label>Empresa:</label><input type="text" name="empresa[]" required>
        <label>Data de Admissão:</label><input type="month" name="inicio[]" required>
        <label>Data de Término:</label><input type="month" name="fim[]">
        <button type="button" class="removeExp">Remover</button>
    `;
    experiencia.appendChild(div);
});

document.getElementById('experiencia').addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('removeExp')) {
        e.target.parentNode.remove();
    }
});

document.getElementById('addFormacao').addEventListener('click', function() {
    var formacao = document.getElementById('formacao');
    var div = document.createElement('div');
    div.classList.add('formacao-item');
    div.innerHTML = `
        <label>Curso:</label><input type="text" name="curso[]" required>
        <label>Instituição:</label><input type="text" name="instituicao[]" required>
        <label>Ano de Conclusão:</label><input type="number" name="conclusao[]" min="1900" max="2099" required>
        <button type="button" class="removeFormacao">Remover</button>
    `;
    formacao.appendChild(div);
});

document.getElementById('formacao').addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('removeFormacao')) {
        e.target.parentNode.remove();
    }
});
