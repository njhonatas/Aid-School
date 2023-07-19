<?php

require_once 'CONEXAO/CONEXAO.php';

class InstitutoDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function Pesquisar() {
        try {
            $sql = "select * from instituto;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarUmRegistro($idinstituto) {
        try {
            $sql = "select * from instituto where idinstituto = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idinstituto);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Gravar(InstitutoDTO $InstitutoDTO) {
        try {
            $sql = "INSERT INTO instituto (nomeinstituto,emailinstituto,telefoneinstituto,enderecoinstituto) VALUES (?,?,?,?);";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $InstitutoDTO->getNomeinstituto());
            $execucao->bindValue(2, $InstitutoDTO->getEmailinstituto());
            $execucao->bindValue(3, $InstitutoDTO->getTelefoneinstituto());
            $execucao->bindValue(4, $InstitutoDTO->getEnderecoinstituto());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Apagar($idinstituto) {
        try {
            $sql = "DELETE FROM instituto WHERE idinstituto = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idinstituto);
            return $execucao->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

//    public function Alterar(InstitutoDTO $InstitutoDTO) {
//        try {
//            $sql = "updade from instituto set nomeinstituto=?,emailinstituto=?,telefoneinstituto=?,enderecoinstituto=? where idinstituto=?;";
//            $execucao = $this->pdo->prepare($sql);
//            $execucao->bindValue(1, $InstitutoDTO->getNomeinstituto());
//            $execucao->bindValue(2, $InstitutoDTO->getEmailinstituto());
//            $execucao->bindValue(3, $InstitutoDTO->getTelefoneinstituto());
//            $execucao->bindValue(4, $InstitutoDTO->getEnderecoinstituto());
//            $execucao->bindValue(5, $InstitutoDTO->getIdinstituto());
//            $resultado = $execucao->execute();
//            return $resultado;
//        } catch (PDOException $exc) {
//            echo $exc->getMessage();
//        }
//    }
    public function Alterar(InstitutoDTO $InstitutoDTO) {
        try {
            $sql = "UPDATE instituto SET nomeinstituto=?,
                                emailinstituto=?,
                                telefoneinstituto=?,
                                enderecoinstituto=?
                                WHERE idinstituto=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $InstitutoDTO->getNomeinstituto());
            $stmt->bindValue(2, $InstitutoDTO->getEmailinstituto());
            $stmt->bindValue(3, $InstitutoDTO->getTelefoneinstituto());
            $stmt->bindValue(4, $InstitutoDTO->getEnderecoinstituto());
            $stmt->bindValue(5, $InstitutoDTO->getIdinstituto());;
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
