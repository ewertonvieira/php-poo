<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/index.css">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <h1>Cadastros</h1>
        <button type="submit">Cad Emprestimo</button>
        <button type="submit">Cad Livro</button>
        <button type="submit">Cad Membro</button>
    </div>

    <div class="container">
        <h1>Gerenciador de Registros</h1>
        <button type="submit" name="btn-emprestimo">Tabela Emprestimo</button>
        <button type="submit">Tabela Livro</button>
        <button type="submit">Tabela Membro</button>
    </div>

    <?php
    session_start();
    if ( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['btn-emprestimo'])) {
        header("Location: Pages/Listagem.php");
        exit();
    }

    ?>
</body>

</html>