<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Aluno</title>
    <link rel="stylesheet" href="formata.css">
</head>
<body>
    <header><h1>Update de Usuário</h1></header>
    
    <main>
       
    <?php
        if(isset($_POST["cod"])){
            $cod = $_POST["cod"];
        }
        else{
            $cod = null;
        }

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

       
        if($cod != null){
            include_once("conecta.php");
            $sql = "UPDATE usu SET tipousu='$tipo', nomeusu='$nome', endusu='$ende', docusu='$doc', statususu='$status' WHERE codusu = '$cod'";
           if($conn->query($sql) === TRUE){
               echo"Atualizado com sucesso!!!";
           }
            else{
                echo"<p>Erro na atualização". $conn->error." </p>";
            }
        }

       

    ?>
    </main>
   </body>
</html>