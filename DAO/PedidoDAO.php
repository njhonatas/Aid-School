<?php

require_once 'CONEXAO/CONEXAO.php';

class PedidoDAO
{

    public $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }

    public function Pesquisar()
    {
        try {
            $sql = "select *,R.nomerep as REPRESENTANTE,I.nomeinstituto as INSTITUTO,date_format(datapedido,'%d/%m/%Y %H:%i:%s')as DATAFORMATADA, 
                CASE WHEN status = 1 THEN 'Pendente'
                WHEN status = 2 THEN 'Andamento'
                ELSE 'Concluido'
                END AS STATUSPEDIDO
                from pedido P
                inner join representante R on R.idrepresentante=P.idrepresentante
                inner join instituto I on I.idinstituto=P.idinstituto;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Pesquisarconcluidos()
    {
        try {
            $sql = "select *,R.nomerep as REPRESENTANTE,I.nomeinstituto as INSTITUTO,date_format(datapedido,'%d/%m/%Y %H:%i:%s')as DATAFORMATADA, 
                CASE WHEN status = 1 THEN 'Pendente'
                WHEN status = 2 THEN 'Andamento'
                ELSE 'Concluido'
                END AS STATUSPEDIDO
                from pedido P
                inner join representante R on R.idrepresentante=P.idrepresentante
                inner join instituto I on I.idinstituto=P.idinstituto
                WHERE status != 3;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarUmRegistro($idpedido)
    {

        try {
            $sql = "select *,R.nomerep,I.nomeinstituto,date_format(datapedido,'%d/%m/%Y %H:%i:%s')as DATAFORMATADA, 
                CASE WHEN status = 1 THEN 'Pendente'
                WHEN status = 2 THEN 'Andamento'
                ELSE 'Concluido'
                END AS STATUSPEDIDO
                from pedido P
                inner join representante R on R.idrepresentante=P.idrepresentante
                inner join instituto I on I.idinstituto=P.idinstituto where idpedido = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idpedido);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarPorRepresentante($id)
    {

        try {
            $sql = "select *,R.nomerep as REPRESENTANTE,I.nomeinstituto as INSTITUTO,date_format(datapedido,'%d/%m/%Y %H:%i:%s')as DATAFORMATADA, 
                CASE WHEN status = 1 THEN 'Pendente'
                WHEN status = 2 THEN 'Andamento'
                ELSE 'Concluido'
                END AS STATUSPEDIDO
                from pedido P
                inner join representante R on R.idrepresentante=P.idrepresentante
                inner join instituto I on I.idinstituto=P.idinstituto where R.idrepresentante = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $id);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Gravar(PedidoDTO $PedidoDTO)
    {
        try {
            $sql = "insert into pedido (nomepedido,descricaopedido,condicao,quantidadepedido,idinstituto,idrepresentante) values(?,?,?,?,?,?);";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $PedidoDTO->getNomepedido());
            $execucao->bindValue(2, $PedidoDTO->getDescricaopedido());
            $execucao->bindValue(3, $PedidoDTO->getCondicao());
            $execucao->bindValue(4, $PedidoDTO->getQuantidadepedido());
            $execucao->bindValue(5, $PedidoDTO->getIdinstituto());
            $execucao->bindValue(6, $PedidoDTO->getIdrepresentante());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Apagar($idpedido)
    {
        try {
            $sql = "delete from pedido where idpedido = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idpedido);
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Alterar(PedidoDTO $PedidoDTO)
    {
        try {
            $sql = "UPDATE pedido SET nomepedido=?,
                                descricaopedido=?,
                                condicao=?,
                                quantidadepedido=?
                                WHERE idpedido=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $PedidoDTO->getNomepedido());
            $stmt->bindValue(2, $PedidoDTO->getDescricaopedido());
            $stmt->bindValue(3, $PedidoDTO->getCondicao());
            $stmt->bindValue(4, $PedidoDTO->getQuantidadepedido());
            $stmt->bindValue(5, $PedidoDTO->getIdpedido());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function AlterarPedido2($quantidade, $idpedido)
    {
        try {
            $sql = "UPDATE pedido
                    SET quantidadepedido = quantidadepedido + $quantidade
                    WHERE idpedido=$idpedido";
            //            print_r($sql);
            //            die();
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $quantidade);
            $stmt->bindValue(2, $idpedido);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function AlterarPedidoEspecifico($resultado, $idpedido)
    {
        try {
            $sql = "UPDATE pedido SET quantidadepedido =  ?, 
                nomepedido=nomepedido, descricaopedido=descricaopedido, 
                condicao=condicao, status=status, datapedido=datapedido, 
                idinstituto=idinstituto, idrepresentante=idrepresentante
                    WHERE idpedido=?";
            //            print_r($sql);
            //            die();
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $resultado);
            $stmt->bindValue(2, $idpedido);

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    //    public function AlterarPedidoSoma($resultado, $idpedido) {
    //        try {
    //            $sql = "UPDATE pedido SET quantidadepedido =  ?, 
    //                nomepedido=nomepedido, descricaopedido=descricaopedido, 
    //                condicao=condicao, status=status, datapedido=datapedido, 
    //                idinstituto=idinstituto, idrepresentante=idrepresentante
    //                    WHERE idpedido=?";
    ////            print_r($sql);
    ////            die();
    //            $stmt = $this->pdo->prepare($sql);
    //            $stmt->bindValue(1, $resultado);
    //            $stmt->bindValue(2, $idpedido);
    //
    //            return $stmt->execute();
    //        } catch (PDOException $exc) {
    //            echo $exc->getMessage();
    //        }
    //    }
    //
    //    public function AlterarPedidoSubtrair($resultado, $idpedido) {
    //        try {
    //            $sql = "UPDATE pedido SET quantidadepedido =  ?, nomepedido=nomepedido, descricaopedido=descricaopedido, condicao=condicao, status=status, datapedido=datapedido, idinstituto=idinstituto, idrepresentante=idrepresentante
    //                    WHERE idpedido=?";
    ////            print_r($sql);
    ////            die();
    //            $stmt = $this->pdo->prepare($sql);
    //            $stmt->bindValue(1, $resultado);
    //            $stmt->bindValue(2, $idpedido);
    //            return $stmt->execute();
    //        } catch (PDOException $exc) {
    //            echo $exc->getMessage();
    //        }
    //    }

    public function AlterarPedido(PedidoDTO $PedidoDTO)
    {
        try {
            $sql = "UPDATE pedido SET nomepedido=?,descricaopedido=?,condicao=?,datapedido=datapedido,idinstituto=idinstituto,idrepresentante=idrepresentante, status=status, quantidadepedido=? where idpedido=?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $PedidoDTO->getNomepedido());
            $execucao->bindValue(2, $PedidoDTO->getDescricaopedido());
            $execucao->bindValue(3, $PedidoDTO->getCondicao());
            $execucao->bindValue(4, $PedidoDTO->getQuantidadepedido());
            $execucao->bindValue(5, $PedidoDTO->getIdpedido());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function AlterarPedidoPadrao(PedidoDTO $PedidoDTO)
    {
        try {
            $sql = "UPDATE pedido SET nomepedido=nomepedido,descricaopedido=descricaopedido,condicao=condicao,datapedido=datapedido,idinstituto=idinstituto,idrepresentante=idrepresentante, status=?, quantidadepedido=? where idpedido=?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $PedidoDTO->getStatus());
            $execucao->bindValue(2, $PedidoDTO->getQuantidadepedido());
            $execucao->bindValue(3, $PedidoDTO->getIdpedido());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}
