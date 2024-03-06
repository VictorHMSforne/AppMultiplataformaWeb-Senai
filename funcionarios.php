<?php
    include 'conecta.php';
    $pessoa = mysqli_query($conn, "SELECT * FROM pessoa");
    $row = mysqli_num_rows($pessoa);
    if ($row > 0) {
        echo "<table class='table table-hover'>";
        echo "<thead>";//cabeça da tabela (cabeçalho)
        echo "<tr>";//linhas da tabela
        echo "<th>ID</th>";
        echo "<th>NOME</th>";
        echo "<th>IDADE</th>";
        echo "<th>CIDADE</th>";
        echo "<th>AÇÕES</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($registro = $pessoa->fetch_array()) {//o fetch pega todos os registros gerados
            $id = $registro['id'];
            echo '<tr>';
            echo '<td>'.$registro['id'].'</td>';
            echo '<td>'.$registro['nome'].'</td>';
            echo '<td>'.$registro['idade'].'</td>';
            echo '<td>'.$registro['cidade'].'</td>';
            echo '<td><a href="editar.php?id='.$id.'">EDITAR</a> | <a href="excluir.php?id='.$id.'">EXCLUIR</a></td>';//href = http reference
            echo '</tr>';
        }
        echo "</tbody>";
        echo "</table>";
    }
    else {
        echo "IMAGEM...";
        echo "<center><h2>Não existem pessoas cadastradas!</h2></center>";
    }
?>