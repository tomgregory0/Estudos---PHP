<?php	
class PessoaDAO{


	public function InsertPessoa(Pessoa $Pessoa){
	
	global $con;
	$sql = $con->prepare("INSERT INTO Pessoa (Nome,Email,DataNascimento,RG,Celular,
	TelefoneResidencial,Endereco,Numero,Complemento,Bairro,Estado,Cidade,NomeEscola,BairroEscola
    ,Ano,Turma,Resultado) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

	$sql ->bind_param("ssssssssssssssssdddddds", $Nome, $Email, $DataNascimento, $RG, $Celular,
    $TelefoneResidencial, $Endereço, $Complemento, $Bairro, $Estado, $Cidade, $NomeEscola, $BairroEscola,
    $Ano, $Turma, $PerfilRealista, $PerfilInvestigativo, $PerfilEmpreendedor, $PerfilConvencional, $PerfilArtistico, $PerfilSocial, $Resultado );


    $Nome                 =     $Pessoa         -> getNome                ();   
    $Email                =     $Pessoa         -> getEmail               ();  
    $DataNascimento       =     $Pessoa         -> getDataNascimento      ();   
    $RG                   =     $Pessoa         -> getRG                  ();   
    $Celular              =     $Pessoa         -> getCelular             ();  
    $TelefoneResidencial  =     $Pessoa         -> getTelefoneResidencial ();   
    $Endereço             =     $Pessoa         -> getEndereço            ();  
    $Numero               =     $Pessoa         -> getNumero              ();  
    $Complemento          =     $Pessoa         -> getComplemento         ();  
    $Bairro               =     $Pessoa         -> getBairro              ();  
    $Estado               =     $Pessoa         -> getEstado              ();  
    $Cidade               =     $Pessoa         -> getCidade              ();   
    $NomeEscola           =     $Pessoa         -> getNomeEscola          (); 
    $BairroEscola         =     $Pessoa         -> getBairroEscola        ();  
    $Ano                  =     $Pessoa         -> getAno                 ();  
    $Turma                =     $Pessoa         -> getTurma               ();    
    $PerfilRealista 	  =     $Pessoa         -> getPerfilRealista      ();
	$PerfilInvestigativo  =     $Pessoa         -> getPerfilInvestigativo ();
	$PerfilEmpreendedor   =     $Pessoa         -> getPerfilEmpreendedor  ();
	$PerfilConvencional   =     $Pessoa         -> getPerfilConvencional  ();
	$PerfilArtistico	  =     $Pessoa         -> getPerfilArtistico     ();
	$PerfilSocial		  =     $Pessoa         -> getPerfilSocial        ();
    $Resultado            =     $Pessoa         -> getResultado           ();

    $SQL->execute();

    }
}


         if (isset($_POST['cadastrar'])) {
                require_once 'conexao.php';
                 require_once 'classes/Pessoa.php';
    require_once 'DAO/PassoaDAO.php';


	$pessoa = new Carro();

	     $pessoa->setNome($_POST['nome']);   
         $pessoa->setEmail($_POST['email']);            
         $pessoa->setDataNascimento($_POST['dataNascimento']);     
         $pessoa->setRG($_POST['RG']);       
         $pessoa->setTelResidencial($_POST['Telefone Residencial']); 
         $pessoa->setEndereco($_POST['endereco']); 
         $pessoa->setNumero($_POST['Numero']);     
         $pessoa->setComplemento($_POST['Numero']); 
         $pessoa->setBairro($_POST['Numero']);
         $pessoa->setCidade($_POST['Numero']);
         $pessoa->setEstado($_POST['Numero']); 
         $pessoa->setNomeEscola($_POST['Numero']);         
         $pessoa->setBairroEscola($_POST['Numero']);      
         $pessoa->setAno($_POST['Ano']);        
         $pessoa->setTurma($_POST['Turma']);
         

    $pessoaDAO = new PessoaDAO();
    $pessoaDAO->InsertPessoaInsertCarro($pessoa);

        $SQL->execute();


	}

?>
