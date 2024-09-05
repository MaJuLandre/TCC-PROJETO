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
    <header><h1>Apaga usuário</h1></header>
    <main>
        <form action="delusu1.php" method="POST">
        <table>
            <tr><td>Matrícula:</td><td><input type="text" name="cod"></td></tr>
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Consultar"></td></tr>
        </table>
        </form>
    <?php
        if(isset($_POST["cod"])){
            $cod = $_POST["cod"];
        }
        else{
            $cod = null;
        }

        if($cod != null){
                include_once("conecta.php");
                $sql = "SELECT codusu, tipousu, nomeusu, endusu, docusu, statususu FROM usu WHERE codusu = '$cod'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo"
                        <p>Matrícula: ".$row["codusu"]."
                        <br>Nome: ".$row["nomeusu"]."
                        <br>Tipo: ".$row["tipousu"]." 
                        <br>Endereço: ".$row["endusu"]."
                        <br>Documento: ".$row["docusu"]."  
                        <br>Status: ".$row["statususu"]."  
                        </p>                        
                        <br>
                        <form action='delusu2.php' method='POST'>
                        <table>
                        <tr><td><input type='hidden' name='cod' value='$cod'></td></tr>
                        <tr><td><input type='submit' value='Confirmar Exclusão'></td>
                        </form>
                        </table>      
                                ";
                    }
                }else{
                    echo"<p>Nada encontrado! </p>";
                }
                
            }

       
            
    ?>
    </main>
    </body>
</html>