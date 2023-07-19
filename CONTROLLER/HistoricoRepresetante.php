<?php
require_once '../DAO/PedidoDAO.php';
require_once '../DAO/RepresentanteDAO.php';
require_once '../DAO/InstitutoDAO.php';
$PedidoDAO = new PedidoDAO;
$resultado = $PedidoDAO ->Gravar($PedidoDAO);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Histórico de Pedidos</title>
    </head>
    <body>
        <?php
        $nomerep = $_POST["nomerep"];
        $dbdoador = $_POST["dbdoador"];
        $idinstituto = $_POST["idinstituto"];
        $idrepresentante = $_POST["idrepresentante"];
        $idpedido= $_POST["idpedido"];
        $con = new mysql($nomerep, $dbdoador,$idrepresentante, $idinstituto,$idpedido);
        
        if($conn-> connection_error){
            die("Erro com a conexão com o banco de dados:".$conn->conect_error);
        }
        $representanteId = "";
        
       $sql = "SELECTC * FROM pedidos WHERE representante_id = $representanteId";
       $result = $conn->query($sql);
       
       if ($result -> num_rows > ""){
            while ($row = $result->fetch_assoc()) {        
        echo "Nome do pedido: " . $row["nomepedido"] . "<br>";
        echo "Descrição do pedido: ". $row["descricaopedido"] . "<br>";
        echo "Condição:" . $row ["condicao"] . "<br>";
        echo "Status: " . $row["status"] . "<br>";
        echo "datapedido" . $row["datapedido"] . "<br>";
        echo "quantidadepedido" .$row["quantidadepedido"] . "<br>";
        echo "Idinstituto: " . $row["idinstituto"] . "<br>";
        echo "Idrepresentante" . $row["idrepresentante"] . "<br>";
        echo "<br>";
       }
        } else {
    echo "Nenhum pedido encontrado para o representante.";
    }
          $conn->close();
        // put your code here
        ?>
    </body>
</html>
