<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../imagem/unnamed.ico" type="image/x-icon">
    <title>Listar Funcionários</title>
    <style>
    .fundo {
        height: 100vh;
        background:linear-gradient(#212529,#1f348f, #1f348f, #1f348f)no-repeat;
    }

    </style>
</head>
<body class="fundo">
<center>
<h1 class="text-white">Listar Funcionários</h1>
<br>

<input type="text" id="input-busca" class="form-control search" placeholder="Pesquisar Funcionário">
</center>
<?php
    $sql = "SELECT * FROM funcionarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
            print "<table  id='tabela'>";
            print "<tr>";
            print "<th class='th'>CPF</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Setor</th>";
            print "<th>Cargo</th>";
            print "<th>Telefone</th>";
            print "<th>Data de Entrada</th>";
            print "<th class='acao'>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->setor."</td>";
            print "<td>".$row->cargo."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->data_entrada."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"
                    if(confirm('Tem certeza que deseja excluir?'))
                    {location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false}\"
                    class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Nenhum resultado encontrado</p>";
    }
?>
<script src="../js/search.js"></script>
</body>
</html>