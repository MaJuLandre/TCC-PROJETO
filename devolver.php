<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolver MAterial</title>
    <link rel="stylesheet" href="formata.css">
    <style>
    .verm{
        color:red;
    }
    </style>
</head>
<body>
    <header><h1>Devolver Material</h1></header>
    <main>
        <form action="devolver.php" method="POST">
        <table>
            <tr><td>Material:</td><td><input type="text" name="mat"></td></tr>
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Devolver"></td></tr>
        </table>
        </form>
    <?php
        

        if(isset($_POST["mat"])){
            $mat = $_POST["mat"];
        }
        else{
            $mat = null;
        }

        if($mat != null){
            include_once("conecta.php"); 
            //aqui busca usuário e data
            $sql = "SELECT codusu, datad FROM emprestimo WHERE codmat = '$mat' AND obs = 'A'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $codusu = $row["codusu"];
                    $datad = $row["datad"]; 
                    }
            }else{
                echo"<p class='verm'>Material não esta emprestado!</p>";
                $codusu = null;
                $datad = null; 
            }
            //aqui busca status do usuário
            $sql = "SELECT statususu FROM usu WHERE codusu = '$codusu'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $statususu = $row["statususu"];
                                       }
            }else{
                echo"<p class='verm'>Erro ao buscar usuário!</p>";
                }


            if($codusu != null and  $datad != null){
                $at = 0;

                $sql = "UPDATE material SET statusmat='Livre' WHERE codmat = '$mat'";
                if($conn->query($sql) === TRUE){
                    $at = $at + 1; 
                }
                 else{
                     echo"<p>Erro na atualização do material". $conn->error." </p>";
                 }

                 $statususu = $statususu - 1;
                 $sql = "UPDATE usu SET statususu='$statususu' WHERE codusu = '$codusu'";
                 if($conn->query($sql) === TRUE){
                     $at = $at + 1; 
                 }
                  else{
                      echo"<p>Erro na atualização do usuário". $conn->error." </p>";
                  }

                  $sql = "UPDATE emprestimo SET obs ='F' WHERE codmat = '$mat' AND obs = 'A'";
                  if($conn->query($sql) === TRUE){
                      $at = $at + 1; 
                  }
                   else{
                       echo"<p>Erro na atualização do empréstimo". $conn->error." </p>";
                   }
                    if($at == 3){
                        echo"Devolução realizada com sucesso!!!";
                    }}}
        
                       
            

    ?>
    </main>
    <footer><h1>Programação WEB II - Prof James Willian</h1></footer>
</body>
</html>