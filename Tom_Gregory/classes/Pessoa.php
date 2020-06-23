<?PHP

class Pessoa{

        private $Nome =null;	             
        private $Email = null;	            
        private $DataNascimento = null;	    
        private $RG = null;                
        private $TelResidencial = null;
        private $Endereco = null;
        private $Numero	= null;        
        private $Complemento = null;    
        private $Bairro	= null;
        private $Cidade	= null;
        private $Estado	= null;
        private $NomeEscola	        = null;
        private $BairroEscola       = null;
        private $Ano	               = null;
        private $Turma    = null;
        private $PerfilRealista = null;			
		private $PerfilInvestigativo = null;			
		private $PerfilEmpreendedor = null;			
		private $PerfilConvencional = null;			
		private $PerfilArtistico = null;			
		private $PerfilSocial = null;
        private $Resultado = null;
       
       

	      public function __construct($Nome, $Email, $DataNascimento,$RG,$TelefoneResidencial,
         $Endereco, $Numero, $Complemento, $Bairro, $Cidade, $Estado, $NomeEscola, $BairroEscola, $Ano, 
		 $Turma, $PerfilRealista, $PerfilInvestigativo , $PerfilEmpreendedor, $PerfilConvencional, $PerfilArtistico, $PerfilSocial, $Resultado )
    {
       
         $this-> Nome   = $Nome;   
         $this-> Email   =$Email;            
         $this-> DataNascimento =$DataNascimento;      
         $this-> RG              = $RG;      
         $this-> TelResidencial = $TelResidencial; 
         $this-> Endereco  = $Endereco;
         $this-> Numero     = $Numero;     
         $this-> Complemento  = $Complemento;   
         $this-> Bairro = $Bairro;
         $this-> Cidade = $Cidade;
         $this-> Estado = $Estado; 
         $this-> NomeEscola  = $NomeEscola;         
         $this-> BairroEscola  = $BairroEscola;      
         $this-> Ano             = $Ano;       
         $this-> Turma          = $Turma;
         $this-> PerfilRealista   = $PerfilRealista;        
         $this-> PerfilInvestigativo   = $PerfilInvestigativo;             
         $this-> PerfilEmpreendedor      = $PerfilEmpreendedor;     
         $this-> PerfilConvencional       = $PerfilConvencional;   
         $this-> PerfilArtistico           = $PerfilArtistico;  
         $this-> PerfilSocial = $PerfilSocial;
         $this-> Resultado = $Resultado;
    }




       	public function getNome(){
		return $this->Nome;
	}

	public function setNome($Nome){
		$this->Nome = $Nome;
	}

	public function getEmail(){
		return $this->Email;
	}

	public function setEmail($Email){
		$this->Email = $Email;
	}

	public function getDataNascimento(){
		return $this->DataNascimento;
	}

	public function setDataNascimento($DataNascimento){
		$this->DataNascimento = $DataNascimento;
	}

	public function getRG(){
		return $this->RG;
	}

	public function setRG($RG){
		$this->RG = $RG;
	}

	public function getCelular(){
		return $this->Celular;
	}

	public function setCelular($Celular){
		$this->Celular = $Celular;
	}

	public function getTelefoneResidencial(){
		return $this->TelefoneResidencial;
	}

	public function setTelResidencial($TelResidencial){
		$this->TelResidencial = $TelResidencial;
	}

	public function getEndereco(){
		return $this->Endereço;
	}

	public function setEndereco($Endereco){
		$this->Endereço = $Endereço;
	}

	public function getNumero(){
		return $this->Numero;
	}

	public function setNumero($Numero){
		$this->Numero = $Numero;
	}

	public function getComplemento(){
		return $this->Complemento;
	}

	public function setComplemento($Complemento){
		$this->Complemento = $Complemento;
	}

	public function getBairro(){
		return $this->Bairro;
	}

	public function setBairro($Bairro){
		$this->Bairro = $Bairro;
	}

	public function getCidade(){
		return $this->Cidade;
	}

	public function setCidade($Cidade){
		$this->Cidade = $Cidade;
	}

	public function getEstado(){
		return $this->Estado;
	}

	public function setEstado($Estado){
		$this->Estado = $Estado;
	}

	public function getNomeEscola(){
		return $this->NomeEscola;
	}

	public function setNomeEscola($NomeEscola){
		$this->NomeEscola = $NomeEscola;
	}

	public function getBairroEscola(){
		return $this->BairroEscola;
	}

	public function setBairroEscola($BairroEscola){
		$this->BairroEscola = $BairroEscola;
	}

	public function getAno(){
		return $this->Ano;
	}

	public function setAno($Ano){
		$this->Ano = $Ano;
	}

	public function getTurma(){
		return $this->Turma;
	}

	public function setTurma($Turma){
		$this->Turma = $Turma;
	}

	public function getPerfilRealista(){
		return $this->PerfilRealista;
	}

	public function setPerfilRealista($PerfilRealista){
		$this->PerfilRealista = $PerfilRealista;
	}

	public function getPerfilInvestigativo(){
		return $this->PerfilInvestigativo;
	}

	public function setPerfilInvestigativo($PerfilInvestigativo){
		$this->PerfilInvestigativo = $PerfilInvestigativo;
	}

	public function getPerfilEmpreendedor(){
		return $this->PerfilEmpreendedor;
	}

	public function setPerfilEmpreendedor($PerfilEmpreendedor){
		$this->PerfilEmpreendedor = $PerfilEmpreendedor;
	}

	public function getPerfilConvencional(){
		return $this->PerfilConvencional;
	}

	public function setPerfilConvencional($PerfilConvencional){
		$this->PerfilConvencional = $PerfilConvencional;
	}

	public function getPerfilArtistico(){
		return $this->PerfilArtistico;
	}

	public function setPerfilArtistico($PerfilArtistico){
		$this->PerfilArtistico = $PerfilArtistico;
	}

	public function getPerfilSocial(){
		return $this->PerfilSocial;
	}

	public function setPerfilSocial($PerfilSocial){
		$this->PerfilSocial = $PerfilSocial;
	}

	public function getResultado(){
		return $this->Resultado;
	}

	public function setResultado($Resultado){
		$this->Resultado = $Resultado;
	}
}
?>