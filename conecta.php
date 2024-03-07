<?php
    $conn = mysqli_connect("sql.freedb.tech", "freedb_abcdeTOP", "QWWz25Mpc#@J2p@", "freedb_Tds10_Senai"); //criação de VAR é com $(nome da VAR), alias o php é uma linguagem fortemente tipada
    mysqli_set_charset($conn, "utf8");
    if(!$conn) { //o ! é negação, se não existir $conn, ou seja, se não conseguir me conectar, codigo...
        echo "Erro:".mysqli_connect_error().PHP_EOL;
    }
    else{
        echo "Você está conectado!";
    }
?>