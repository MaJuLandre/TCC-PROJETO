<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apaga Aluno</title>
    <link rel="stylesheet" href="formata.css">
</head>
<body>
    <header><h1>Apaga Material</h1></header>
    
    <main>
       
    <?php
        if(isset($_POST["cod"])){
            $cod = $_POST["cod"];
        }
        else{
            $cod = null;
        }


       
        if($cod != null){
            include_once("conecta.php");
            $sql = "DELETE FROM material WHERE codmat = '$cod'";
           if($conn->query($sql) === TRUE){
               echo"Excluido com sucesso!!!";
           }
            else{
                echo"<p>Erro na exclusão". $conn->error." </p>";
            }
        }

       

    ?>
    </main>
    <footer><h1>Programação WEB II - Prof James Willian</h1></footer>
</body>
</html>