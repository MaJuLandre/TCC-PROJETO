<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo</title>
    <link rel="stylesheet" href="formata.css">
</head>
<body>
    <header><h1>Empréstimo de Material</h1></header>
    <main>
        <form action="emprestimo.php" method="POST">
        <table>
            <tr><td>Usuário:</td><td><input type="text" name="usu"></td></tr>
            <tr><td>Material:</td><td><input type="text" name="mat"></td></tr>
            <tr><td>Data de retirada:</td><td><input type="date" name="datar"></td></tr>
            <tr><td>Data de devolução:</td><td><input type="date" name="datad"></td></tr>
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Emprestar"></td></tr>
        </table>
        </form>
    <?php
        if(isset($_POST["usu"])){
            $usu = $_POST["usu"];
        }
        else{
            $usu = null;
        }

        if(isset($_POST["mat"])){
            $mat = $_POST["mat"];
        }
        else{
            $mat = null;
        }

        if(isset($_POST["datar"])){
            $datar = $_POST["datar"];
        }
        else{
            $datar = null;
        }

        if(isset($_POST["datad"])){
            $datad = $_POST["datad"];
        }
        else{
            $datad = null;
        }


        if($usu != null and $mat != null and $datar != null and $datad != null){
            include_once("conecta.php");            
            $sql = "SELECT statusmat FROM material WHERE codmat = '$mat'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $statusmat = $row["statusmat"];
                    }
            }else{
                echo"<p>Material não cadastrado! </p>";
                $statusmat = "não";
            }        
            
            $sql = "SELECT statususu FROM usu WHERE codusu = '$usu'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $statususu = $row["statususu"];
                    
                    }
            }else{
                echo"<p>Usuário não cadastrado! </p>";
                $statususu = 100;
            } 



            if($statususu < 2 and $statusmat == "Livre"){

                $at = 0;

                include_once("conecta.php");
            $sql = "UPDATE material SET  statusmat='Emprestado' WHERE codmat = '$mat'";
           if($conn->query($sql) === TRUE){

               $ate = $ate + 1;
            }
            else{
                echo"<p>Erro na atualização do material". $conn->error." </p>";
            }



            $statususu = $statususu + 1;
            $sql = "UPDATE usu SET  statususu='$statususu' WHERE codusu = '$usu'";
           if($conn->query($sql) === TRUE){

               $ate = $ate + 1;
            }
            else{
                echo"<p>Erro na atualização do usuário". $conn->error." </p>";
            }



            $sql = "INSERT INTO emprestimo (codemp, codusu, codmat, datar, datad, obs) VALUES (' ', '$usu', '$mat', '$datar', '$datad', 'A')";
            if($conn->query($sql) === TRUE){
                $at = $at + 1;
                
            }
            else{
                echo"Erro no cadastro do empréstimo:".$sql."<br>".$conn->error;
            }
                if($at == 3){
             echo"<p>Emprestimo realizado com sucesso!!!</p>";
            }


                
            }

            else{
                if($statususu >= 2){
                    echo"<p>Usuário não pode emprestar!</p>";
                }
                if($statusmat != "Livre"){
                    echo"<p>Material não pode ser emprestado!</p>";
                }
            }
            

        }

    ?>
    </main>
    <footer><h1>Programação WEB II - Prof James Willian</h1></footer>
</body>
</html>