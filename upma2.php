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
    <header><h1>Update de MAterial</h1></header>
    
    <main>
       
    <?php
        if(isset($_POST["cod"])){
            $cod = $_POST["cod"];
        }
        else{
            $cod = null;
        }

        if(isset($_POST["tipo"])){
            $tipo = $_POST["tipo"];
        }
        else{
            $tipo = null;
        }

        if(isset($_POST["titu"])){
            $titu = $_POST["titu"];
        }
        else{
            $titu = null;
        }

        if(isset($_POST["autor"])){
            $autor = $_POST["autor"];
        }
        else{
            $autor = null;
        }

        if(isset($_POST["tema"])){
            $tema = $_POST["tema"];
        }
        else{
            $tema = null;
        }

        if(isset($_POST["outro"])){
            $outro = $_POST["outro"];
        }
        else{
            $outro = null;
        }

        if(isset($_POST["status"])){
            $status = $_POST["status"];
        }
        else{
            $status = null;
        }

       
        if($cod != null){
            include_once("conecta.php");
            $sql = "UPDATE material SET tipomat='$tipo', titulomat='$titu', autormat='$autor', temamat='$tema', outromat='$outro', statusmat='$status' WHERE codmat = '$cod'";
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