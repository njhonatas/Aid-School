<?php

require_once 'CONEXAO/CONEXAO.php';

class RepresentanteDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function Pesquisar() {
        try {
            $sql = "SELECT *, date_format(dtnascrep,'%d/%m/%Y')AS dataformatada FROM representante;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Pesquisar2() {
        try {
            $sql = "SELECT *, date_format(dtnascrep, '%d/%m/%Y') AS dataformatada, 
                CASE WHEN sexo = 1 THEN 'Masculino'
           WHEN sexo = 2 THEN 'Feminino'
           ELSE 'Outro'
       END AS SEXOCORRIGIDO
FROM representante AS r
INNER JOIN usuario AS u ON r.idusuario = u.idusuario
INNER JOIN instituto AS i ON r.idinstituto = i.idinstituto;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarUmRegistro($idrepresentante) {
        try {
            $sql = "SELECT * FROM representante WHERE idrepresentante = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idrepresentante);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function selecionaID($idusuario) {
        try {
            $sql = "SELECT * FROM representante where idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Gravar(RepresentanteDTO $RepresentanteDTO) {
        try {
            $sql = "INSERT INTO representante (nomerep,cpfrep,rgrep,dtnascrep,enderecorep,emailrep,telefonerep,sexo,idinstituto,idusuario) VALUES(?,?,?,?,?,?,?,?,?,?);";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $RepresentanteDTO->getNomerep());
            $execucao->bindValue(2, $RepresentanteDTO->getCpfrep());
            $execucao->bindValue(3, $RepresentanteDTO->getRgrep());
            $execucao->bindValue(4, $RepresentanteDTO->getDtnascrep());
            $execucao->bindValue(5, $RepresentanteDTO->getEnderecorep());
            $execucao->bindValue(6, $RepresentanteDTO->getEmailrep());
            $execucao->bindValue(7, $RepresentanteDTO->getTelefonerep());
            $execucao->bindValue(8, $RepresentanteDTO->getSexo());
            $execucao->bindValue(9, $RepresentanteDTO->getIdinstituto());
            $execucao->bindValue(10, $RepresentanteDTO->getIdusuario());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Apagar($idrepresentante) {
        try {
            $sql = "DELETE FROM representante WHERE idrepresentante = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idrepresentante);
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    //public function Alterar(RepresentanteDTO $RepresentanteDTO) {
    //    try {
    //        $sql = "UPDATE FROM representante SET nomerep=?,rgrep=?,enderecorep=?,emailrep=?,telefonerep=?,sexo=? WHERE idrepresentante=?;";
    //        $execucao = $this->pdo->prepare($sql);
    //        $execucao->bindValue(1, $RepresentanteDTO->getNomerep());
    //        $execucao->bindValue(2, $RepresentanteDTO->getRgrep());
    //        $execucao->bindValue(3, $RepresentanteDTO->getEnderecorep());
    //        $execucao->bindValue(4, $RepresentanteDTO->getEmailrep());
    //        $execucao->bindValue(5, $RepresentanteDTO->getTelefonerep());
    //        $execucao->bindValue(6, $RepresentanteDTO->getSexo());
    //        $execucao->bindValue(7, $RepresentanteDTO->getIdrepresentante());
    //        $resultado = $execucao->execute();
    //        return $resultado;
    //    } catch (PDOException $exc) {
    //        echo $exc->getMessage();
    //    }
    //}
    public function Alterar(RepresentanteDTO $RepresentanteDTO) {
        try {
            $sql = "UPDATE representante SET nomerep=?,
                                rgrep=?,
                                enderecorep=?,
                                emailrep=?,
                                telefonerep=?,
                                sexo=?
                                WHERE idinstituto=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $RepresentanteDTO->getNomerep());
            $stmt->bindValue(2, $RepresentanteDTO->getRgrep());
            $stmt->bindValue(3, $RepresentanteDTO->getEnderecorep());
            $stmt->bindValue(4, $RepresentanteDTO->getEmailrep());
            $stmt->bindValue(5, $RepresentanteDTO->getTelefonerep());
            $stmt->bindValue(6, $RepresentanteDTO->getSexo());
            $stmt->bindValue(7, $RepresentanteDTO->getIdrepresentante());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
