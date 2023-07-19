<?php

require_once 'CONEXAO/CONEXAO.php';

class DoacaoDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function Pesquisar() {

        try {
            $sql = "select *, date_format(datadoacao, '%d/%m/%Y %H:%i:%s') dt_formatada from doacao d
                    INNER JOIN representante r on r.idrepresentante = d.idrepresentante
                    INNER JOIN doador as da on d.cpfdoador=da.cpfdoador;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Pesquisarhistorico($id) {

        try {
            $sql = "select * from usuario U "
                    . "inner join doador DO on DO.idusuario=U.idusario "
                    . "inner join doacao DA on DA.cpfdoador=DO.cpfdoador"
                    . "where U.idusuario=?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarUmRegistro($iddoacao) {

        try {
            $sql = "select * from doacao where iddoacao = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $iddoacao);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarUmDoador($cpfdoador) {

        try {
            $sql = "SELECT *, date_format(datadoacao,'%d/%m/%Y %H:%i:%s')AS dataFormatada FROM doacao AS d INNER JOIN representante as r on d.idrepresentante=r.idrepresentante INNER JOIN pedido p on p.idpedido =d.idpedido WHERE cpfdoador = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $cpfdoador);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarDoacaoDoador($iddoacao) {

        try {
            $sql = "select * from doacao where iddoacao = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $iddoacao);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Gravar(DoacaoDTO $DoacaoDTO) {
        try {
            $sql = "insert into doacao (nomedoacao,descricaodoacao,quantidadedoacao,idrepresentante,idpedido,cpfdoador) values(?,?,?,?,?,?);";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $DoacaoDTO->getNomedoacao());
            $execucao->bindValue(2, $DoacaoDTO->getDescricaodoacao());
            $execucao->bindValue(3, $DoacaoDTO->getQuantidadedoacao());
            $execucao->bindValue(4, $DoacaoDTO->getIdrepresentante());
            $execucao->bindValue(5, $DoacaoDTO->getIdpedido());
            $execucao->bindValue(6, $DoacaoDTO->getCpfdoador());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Apagar($iddoacao) {
        try {
            $sql = "delete from doacao where iddoacao = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $iddoacao);
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Alterar(DoacaoDTO $DoacaoDTO) {
        try {
            $sql = "UPDATE doacao SET quantidadedoacao=?, nomedoacao=nomedoacao, descricaodoacao=descricaodoacao, datadoacao=datadoacao, idrepresentante=idrepresentante, idpedido=idpedido, cpfdoador=cpfdoador WHERE iddoacao=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $DoacaoDTO->getQuantidadedoacao());
            $stmt->bindValue(2, $DoacaoDTO->getIddoacao());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarDoacoes($idrepresentante) {
        try {
            $sql = "select *, date_format(datadoacao,'%d/%m/%Y %H:%i:%s')AS dataFormatada from doacao D inner join Doador DA on D.cpfdoador = DA.cpfdoador where idrepresentante = ?";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idrepresentante);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
