<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Aluno</title>
    <link rel="stylesheet" href="formata.css">
</head>
<body>
    <header><h1>Consulta de Usuário</h1></header>
    <main>
        <form action="cousu.php" method="POST">
        <table>
            <tr><td>Nome:</td><td><input type="text" name="nome"></td></tr>
            <tr><td>Código:</td><td><input type="text" name="cod"></td></tr>
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Consultar"></td></tr>
        </table>
        </form>
    <?php
        if(isset($_POST["nome"])){
            $nome = $_POST["nome"];
        }
        else{
            $nome = null;
        }

        if(isset($_POST["cod"])){
            $cod = $_POST["cod"];
        }
        else{
            $cod = null;
        }

        
        if($nome != null){
            include_once("conecta.php");            
            $sql = "SELECT codusu, tipousu, nomeusu, endusu, docusu, statususu FROM usu WHERE nomeusu LIKE '%$nome%'";
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
                    </p>";
                }
            }else{
                echo"<p>Nada encontrado! </p>";
            }
            
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
                    </p>";
                }
            }else{
                echo"<p>Nada encontrado! </p>";
            }
            
        }

    ?>
    </main>
    <footer><h1>Programação WEB II - Prof James Willian</h1></footer>
</body>
</html>