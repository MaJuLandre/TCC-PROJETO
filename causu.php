<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" href="formata.css">
</head>
<body>
    <header><h1>Cadastro de Usuário</h1></header>
    <main>
        <form action="causu.php" method="POST">
        <table>
            <tr><td>Nome:</td><td><input type="text" name="nome"></td></tr>
            <tr><td>Tipo:</td><td><select name="tipo">
                    <option value="">Selecione</option>
                    <option value="aluno">Aluno</option>
                    <option value="prof">Professor</option>
                    <option value="func">Funcionário</option>
                    <option value="outro">Outro</option>
                    </select></td></tr>
            <tr><td>E-mail:</td><td><input type="text" name="ende"></td></tr>
            <tr><td>Documento:</td><td><input type="text" name="doc"></td></tr>
            <tr><td>Status:</td><td><select name="status">
                    <option value="0">Selecione</option>
                    <option value="0">Etec Pedro D'Arcádia Neto</option>
                    <option value="1">USP Bauru</option>
                    <option value="2">UNICAMP Campinas</option>
                    <option value="3">UNNESP Assis</option>
                    </select></td></tr>
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Cadastrar"></td></tr>
        </table>
        </form>
    <?php
        if(isset($_POST["nome"])){
            $nome = $_POST["nome"];
        }
        else{
            $nome = null;
        }

        if(isset($_POST["tipo"])){
            $tipo = $_POST["tipo"];
        }
        else{
            $tipo = null;
        }

        if(isset($_POST["ende"])){
            $ende = $_POST["ende"];
        }
        else{
            $ende = null;
        }

        if(isset($_POST["doc"])){
            $doc = $_POST["doc"];
        }
        else{
            $doc = null;
        }

        if(isset($_POST["status"])){
            $status = $_POST["status"];
        }
        else{
            $status = null;
        }

        if($nome != null and $ende != null and $doc != null){
            include_once("conecta.php");
            $sql = "INSERT INTO usu (codusu, tipousu, nomeusu, endusu, docusu, statususu) VALUES (' ', '$tipo', '$nome', '$ende', '$doc', '$status')";
            if($conn->query($sql) === TRUE){
                echo"<p>Cadastrado com sucesso!</p>"; 
            }
            else{
                echo"Erro:".$sql."<br>".$conn->error;
            }
        }

    ?>
    </main>
    
</body>
</html>