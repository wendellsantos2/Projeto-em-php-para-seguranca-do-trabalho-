
<?php

include_once (dirname(__FILE__) . "../../conexao/Conexao.php");
include_once (dirname(__FILE__) . "../../dao/LoginDao.php");
include_once (dirname(__FILE__) . "../../model/Login.php");
 
 
    //instancia as classes  
    $Aluno = new Login();

    $Alunodao = new LoginDao();

    //pega todos os dados passado por POST

    $d = filter_input_array(INPUT_POST);

    //se a operação for gravar entra nessa condição
    if(isset($_POST['cadastrar'])){

        $Aluno->setNomeAluno($d['nome']);
        $Aluno->setLoginAluno($d['login']);
        $Aluno->setSenha ($d['senha']);   

        $Alunodao->cadastrar($Aluno); 
        

        echo "<script>
                alert('Cadastro realizado com Sucesso. Você Precisa se logar entrar. ')
                location.href='../entrar.php'
            </script>"; 
    }   
    
?>