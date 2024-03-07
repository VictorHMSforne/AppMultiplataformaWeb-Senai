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
            echo '<td><a href="editar.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg></a> | <a href="excluir.php?id='.$id.'"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
            </svg></a></td>';//href = http reference
            echo '</tr>';
        }
        echo "</tbody>";
        echo "</table>";
    }
    else {
        echo "<center><svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='red' class='bi bi-cloud-slash' viewBox='0 0 16 16'>
        <path fill-rule='evenodd' d='M3.112 5.112a3 3 0 0 0-.17.613C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13H11l-1-1H3.781C2.231 12 1 10.785 1 9.318c0-1.365 1.064-2.513 2.46-2.666l.446-.05v-.447q0-.113.018-.231zm2.55-1.45-.725-.725A5.5 5.5 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773a3.2 3.2 0 0 1-1.516 2.711l-.733-.733C14.498 11.378 15 10.626 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3c-.875 0-1.678.26-2.339.661z'/>
        <path d='m13.646 14.354-12-12 .708-.708 12 12z'/>
        </svg></center>";
        echo "<br/>";
        echo "<center><h2>Não existem pessoas cadastradas!</h2></center>";
    }
    echo 'Total de Registros: '.$row;
?>