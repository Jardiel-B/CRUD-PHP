<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $data_nasc = $_POST["data_nasc"];
            $senha = $_POST["senha"];

            $sql = "INSERT INTO usuarios(nome, email, data_nascimento, senha) VALUES ('{$nome}','{$email}','{$data_nasc}','{$senha}')";

            $res = $conn->query($sql);

            print "<script>location.href='?page=listar';</script>";
            
            break;
        
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $data_nasc = $_POST["data_nasc"];
            $senha = $_POST["senha"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', data_nascimento='{$data_nasc}', senha='{$senha}' WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            print "<script>location.href='?page=listar';</script>";

            break;
        
        case 'deletar':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            print "<script>location.href='?page=listar';</script>";

            break;  

        default:
            print "<h1>Nenhuma ação realizada</h1>";
            break;
    }

?>