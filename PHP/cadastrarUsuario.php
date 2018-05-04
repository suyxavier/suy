<?php
if(sizeof($_POST)>1){
    if($_POST['senha'] == $_POST['confirmarSenha']){
        $query = "INSERT INTO user (tel, dt_nasc, nome, cpf, email, cep, senha, cartao_sus, confir_senha, rua, numero, bairro)
                VALUES ('".$_POST['telefone']."', '".$_POST['dataNascimento']."', '".$_POST['nome']."', ".$_POST['cpf'].", '".$_POST['email']."', '".$_POST['cep']."', '".$_POST['senha']."', ".$_POST['cartao'].", '".$_POST['confirmarSenha']."', '".$_POST['rua']."', '".$_POST['numero']."', '". $_POST['bairro']."');";
        $stmt = $pdo->query($query);

        echo '<script language="javascript">';
        echo 'alert("usuário cadastrado com sucesso")';
        echo '</script>';
        header("location: index.php");
    }else{
        echo '<script language="javascript">';
        echo 'alert("senhas inválidas")';
        echo '</script>';        
    }
}