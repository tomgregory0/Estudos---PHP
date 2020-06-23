CREATE TABLE pessoa(

    Id               INT     NOT NULL AUTO_INCREMENT,
    Nome	         VARCHAR(80)  NOT NULL, 
    Email	         VARCHAR(80)  NOT NULL,
    DataNascimento	 VARCHAR(80)  NOT NULL,
    RG               VARCHAR(80)  NOT NULL,
    Celular	         VARCHAR(80)  NOT NULL,
    TelResidencial 	 VARCHAR(80)  NOT NULL,
    Endereco	     VARCHAR(80)  NOT NULL,
    Numero	         VARCHAR(80)  NOT NULL,
    Complemento	     VARCHAR(80)  NULL,
    Bairro	         VARCHAR(80)  NOT NULL,
    Estado	         VARCHAR(80)  NOT NULL,     
    Cidade	         VARCHAR(80)  NOT NULL,  
    NomeEscola	     VARCHAR(80)  NOT NULL,
    BairroEscola     VARCHAR(80)  NOT NULL,
    Ano	             VARCHAR(80)  NOT NULL,
    Turma            VARCHAR(80)  NOT NULL,
    PerfilRealista		 DECIMAL	  NOT NULL,
	PerfilInvestigativo	 DECIMAL	  NOT NULL,
	PerfilEmpreendedor	 DECIMAL	  NOT NULL,
	PerfilConvencional	 DECIMAL	  NOT NULL,
	PerfilArtistico		 DECIMAL	  NOT NULL,
	PerfilSocial    	 DECIMAL	  NOT NULL,	
	Resultado      DECIMAL	  NOT NULL,	

    PRIMARY KEY (Id)

);