<?php

class Login{
    
    public $idAluno;
    public $nomeAluno;
    public $loginAluno;
    public $senha;
    
 
    /*métodos set*/
    
    function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    function setNomeAluno($nomeAluno) {
        $this->nomeAluno = $nomeAluno;
    }

    function setLoginAluno($loginAluno) {
        $this->loginAluno = $loginAluno;
    }

    function setSenha($senha ) {
        $this->senha=$senha ;
    }

    
    /*métodos get*/


    function getIdAluno() {
        return $this->idAluno;
    }

    function getNomeAluno() {
        return $this->nomeAluno;
    }

    function getLoginAluno() {
        return $this->loginAluno;
    }

    function getSenha() {
        return $this->senha ;
    }
}

?>

