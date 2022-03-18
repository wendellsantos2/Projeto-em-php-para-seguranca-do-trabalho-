<?php

class LoginDao{  
    
    public function cadastrar(Login $aluno) {
        try {
            $sql = "INSERT INTO aluno (                   
                  nomeAluno,loginAluno,senhaAluno)
                  VALUES (
                  :nomeAluno,:loginAluno,md5(:senha))";

                    $p_sql = Conexao::getConexao()->prepare($sql);


                    $p_sql->bindValue(":nomeAluno", $aluno->getNomeAluno());
                    $p_sql->bindValue(":loginAluno", $aluno->getLoginAluno());
                    $p_sql->bindValue(":senha", $aluno->getSenha());
     
                 return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir Cliente <br>" . $e . '<br>';
        }
    }
    
}

 ?>