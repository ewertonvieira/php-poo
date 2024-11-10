<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/list.css">
    <title></title>
</head>

<body>
    <div class="emprestimos-table">
        <h2>Tabela Emprestimo</h2>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Data do Empréstimo</th>
                    <th scope="col">Data de Devolução</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $file = 'Class/CSV/Emprestimo.csv';
                $arr_table = [];

                $fileop = fopen($file, 'r');

                $cabecalho = fgetcsv($fileop, 1000, ',');

                while (($linha = fgetcsv($fileop, 1000, ',')) !== false) {
                    $arr_table[] = array_combine($cabecalho, $linha);
                }

                fclose($fileop);

                foreach ($arr_table as $item) {
                    echo "<tr>
                    <td>{$item['id']}</td>
                    <td>{$item['dataEmprestimo']}</td>
                    <td>{$item['dataDevolucao']}</td>           
                  </tr>";
                }
                ?>
            </tbody>
    </div>

    <div class="livros-table"></div>

    <div class="membros-table"></div>
</body>

</html>