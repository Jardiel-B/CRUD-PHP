<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>CRUD PHP</title>
</head>
<body>
    <div class="navegacao">
        <a href="index.php">Início</a>
        <a href="?page=criar">Cadastrar</a>
        <a href="?page=listar">Listar</a>
    </div>

    <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
            case "criar":
                include("./pages/criar.php");
                break;

            case "listar":
                include("./pages/listar.php");
                break;

            case "editar":
                include("./pages/editar.php");
                break;
            
            case "salvar":
                include("salvar.php");
                break;

            default:
                print "<h2> Este é um mini projeto criado para teste, foram utilizadas as tecnologias PHP como linguagem principal, HTML e CSS para estilização,
                Apache para a execução do servidor no ambiente de teste, o banco de dados MySQL para a realização das operações do CRUD e o mecanismo de navegação baseado em SPA (Single Page Aplication)</h2>";
                break;     
        }
    ?>

    <script src="javascript.js"></script>
</body>
</html>