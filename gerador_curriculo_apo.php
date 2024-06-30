<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $qualidades = $_POST['qualidades'];
    $perspectiva = $_POST['perspectiva'];

    $experiencias = [];
    foreach ($_POST['cargo'] as $key => $value) {
        $cargo = $_POST['cargo'][$key];
        $empresa = $_POST['empresa'][$key];
        $inicio = $_POST['inicio'][$key];
        $fim = $_POST['fim'][$key];

        if (!empty($cargo) && !empty($empresa) && !empty($inicio)) {
            $experiencias[] = [
                'cargo' => $cargo,
                'empresa' => $empresa,
                'inicio' => $inicio,
                'fim' => $fim
            ];
        }
    }

    $formacoes = [];
    foreach ($_POST['curso'] as $key => $value) {
        $curso = $_POST['curso'][$key];
        $instituicao = $_POST['instituicao'][$key];
        $conclusao = $_POST['conclusao'][$key];

        if (!empty($curso) && !empty($instituicao) && !empty($conclusao)) {
            $formacoes[] = [
                'curso' => $curso,
                'instituicao' => $instituicao,
                'conclusao' => $conclusao
            ];
        }
    }
    
    echo "<h2>Dados Pessoais</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>CPF:</strong> $cpf</p>";

    echo "<h2>Experiência Profissional</h2>";
    foreach ($experiencias as $exp) {
        echo "<p><strong>Cargo:</strong> {$exp['cargo']}</p>";
        echo "<p><strong>Empresa:</strong> {$exp['empresa']}</p>";
        echo "<p><strong>Data de Início:</strong> {$exp['inicio']}</p>";
        if (!empty($exp['fim'])) {
            echo "<p><strong>Data de Término:</strong> {$exp['fim']}</p>";
        }
        echo "<hr>";
    }

    echo "<h2>Formação Acadêmica</h2>";
    foreach ($formacoes as $formacao) {
        echo "<p><strong>Curso:</strong> {$formacao['curso']}</p>";
        echo "<p><strong>Instituição:</strong> {$formacao['instituicao']}</p>";
        echo "<p><strong>Ano de Conclusão:</strong> {$formacao['conclusao']}</p>";
        echo "<hr>";
    }

    echo "<h2>Qualidades Pessoais</h2>";
    echo "<p>$qualidades</p>";

    echo "<h2>Perspectiva de Carreira</h2>";
    echo "<p>$perspectiva</p>";
}
?>
