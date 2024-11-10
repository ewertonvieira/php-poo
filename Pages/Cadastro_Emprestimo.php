<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/form.css">
    <title>Cadastro_Emprestimo</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h1>Cadastro de Emprestimo</h1>

            <label for="">Id Emprestimo</label>
            <input type="number" name="id" id="" required>

            <div class="datas">
                <div class="separador-1">
                    <label for="dataEmprestimo">Data Inicial</label>
                    <input type="date" name="dataEmprestimo" id="dataEmprestimo" required>
                </div>

                <div class="separador-2">
                    <label for="dataDevolucao">Data de Devolução</label>
                    <input type="date" name="dataDevolucao" id="dataDevolucao" required>
                </div>
            </div>
            <button type="submit" name="salvar">Salvar</button>
        </form>
    </div>

    <?php
    include('../Class/Emprestimo.php');

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['salvar'])) {
        $id = $_POST['id'];
        $dataEmpretimo = $_POST['dataEmprestimo'];
        $dataDevolucao = $_POST['dataDevolucao'];

        $emp01 = new Emprestimo($id, $dataEmpretimo, $dataDevolucao);
        $line = $emp01->dadosClasse();
        $fp = fopen('../Class/CSV/Emprestimo.csv', 'a+');

        fwrite($fp, $line);

        fclose($fp);
        header("Location: Pages/cadastro_livro.php");
        exit();
    }



    ?>
</body>

</html>