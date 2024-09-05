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
    <header><h1>Consulta de Material</h1></header>
    <main>
        <form action="coma.php" method="POST">
        <table>
            <tr><td>Título:</td><td><input type="text" name="titu"></td></tr>
            <tr><td>Tema:</td><td><input type="text" name="tema"></td></tr>
            <tr><td>Código:</td><td><input type="text" name="cod"></td></tr>
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Consultar"></td></tr>
        </table>
        </form>
    <?php
        if(isset($_POST["titu"])){
            $titu = $_POST["titu"];
        }
        else{
            $titu = null;
        }

        if(isset($_POST["tema"])){
            $tema = $_POST["tema"];
        }
        else{
            $tema = null;
        }

        if(isset($_POST["cod"])){
            $cod = $_POST["cod"];
        }
        else{
            $cod = null;
        }

        
        if($titu != null){
            include_once("conecta.php");            
            $sql = "SELECT codmat, tipomat, titulomat, autormat, temamat, outromat, statusmat FROM material WHERE titulomat LIKE '%$titu%'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo"
                    <p>Código: ".$row["codmat"]."
                    <br>Tipo: ".$row["tipomat"]."
                    <br>Título: ".$row["titulomat"]."
                    <br>Autor: ".$row["autormat"]."
                    <br>Tema: ".$row["temamat"]."
                    <br>Outros dados: ".$row["outromat"]."  
                    <br>Status: ".$row["statusmat"]."  
                    </p>";
                }
            }else{
                echo"<p>Nada encontrado! </p>";
            }            
        }

        if($tema != null){
            include_once("conecta.php");            
            $sql = "SELECT codmat, tipomat, titulomat, autormat, temamat, outromat, statusmat FROM material WHERE temamat LIKE '%$tema%'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo"
                    <p>Código: ".$row["codmat"]."
                    <br>Tipo: ".$row["tipomat"]."
                    <br>Título: ".$row["titulomat"]."
                    <br>Autor: ".$row["autormat"]."
                    <br>Tema: ".$row["temamat"]."
                    <br>Outros dados: ".$row["outromat"]."  
                    <br>Status: ".$row["statusmat"]."  
                    </p>";
                }
            }else{
                echo"<p>Nada encontrado! </p>";
            }            
        }

        if($cod != null){
            include_once("conecta.php");            
            $sql = "SELECT codmat, tipomat, titulomat, autormat, temamat, outromat, statusmat FROM material WHERE codmat = '$cod%'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo"
                    <p>Código: ".$row["codmat"]."
                    <br>Tipo: ".$row["tipomat"]."
                    <br>Título: ".$row["titulomat"]."
                    <br>Autor: ".$row["autormat"]."
                    <br>Tema: ".$row["temamat"]."
                    <br>Outros dados: ".$row["outromat"]."  
                    <br>Status: ".$row["statusmat"]."  
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