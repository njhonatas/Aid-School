<?php

require_once 'CONEXAO/CONEXAO.php';

class DoadorDAO
{

    public $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }

    public function Pesquisar()
    {

        try {
            $sql = "SELECT *, date_format(dtnascdoador,'%d/%m/%Y')AS dataformatada FROM doador d
                    INNER JOIN usuario u on d.idusuario = u.idusuario;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarUmRegistro($cpfdoador)
    {

        try {
            $sql = "select * from doador where cpfdoador = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $cpfdoador);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function PesquisaporID($idusuario)
    {

        try {
            $sql = "select * from doador where idusuario = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idusuario);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisaporapenasID($idusuario)
    {

        try {
            $sql = "select idusuario from doador where idusuario = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idusuario);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Pesquisarpedidodoador($idpedido, $idusuario)
    {

        try {
            $sql = "SELECT * FROM pedido as p, doador as d where p.idpedido = ? and d.idusuario = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idpedido);
            $execucao->bindValue(2, $idusuario);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Gravar(DoadorDTO $DoadorDTO)
    {
        try {
            $sql = "insert into doador (cpfdoador,rgdoador,nomedoador,telefonedoador,emaildoador,enderecodoador,dtnascdoador,idusuario) values(?,?,?,?,?,?,?,?);";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $DoadorDTO->getCpfdoador());
            $execucao->bindValue(2, $DoadorDTO->getRgdoador());
            $execucao->bindValue(3, $DoadorDTO->getNomedoador());
            $execucao->bindValue(4, $DoadorDTO->getTelefonedoador());
            $execucao->bindValue(5, $DoadorDTO->getEmaildoador());
            $execucao->bindValue(6, $DoadorDTO->getEnderecodoador());
            $execucao->bindValue(7, $DoadorDTO->getDtnascdoador());
            $execucao->bindValue(8, $DoadorDTO->getIdusuario());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Apagar($cpfdoador)
    {
        try {
            $sql = "delete from doador where cpfdoador = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $cpfdoador);
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Alterar(DoadorDTO $DoadorDTO)
    {
        try {
            $sql = "UPDATE doador SET rgdoador=?,
                                nomedoador=?,
                                telefonedoador=?,
                                emaildoador=?,
                                enderecodoador=?
                                WHERE cpfdoador=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $DoadorDTO->getRgdoador());
            $stmt->bindValue(2, $DoadorDTO->getNomedoador());
            $stmt->bindValue(3, $DoadorDTO->getTelefonedoador());
            $stmt->bindValue(4, $DoadorDTO->getEmaildoador());
            $stmt->bindValue(5, $DoadorDTO->getEnderecodoador());
            $stmt->bindValue(6, $DoadorDTO->getCpfdoador());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}