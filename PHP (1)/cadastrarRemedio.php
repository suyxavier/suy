<?php
if(sizeof($_POST)>1){

    print_r($_POST);
    $query = "INSERT INTO remedios (nome_r, qtd)
            VALUES ('".$_POST['nome_r']."', '".$_POST['qtd']."');";
    $stmt = $pdo->query($query);

    echo '<script language="javascript">';
    echo 'alert("remedio cadastrado com sucesso")';
    echo '</script>';
}