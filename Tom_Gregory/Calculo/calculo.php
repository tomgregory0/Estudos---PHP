<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

	extract($_POST);
 
	$Nome;               
	$Email;              
	$DataNascimento;     
	$RG;                 
	$Celular;            
	$TelefoneResidencial;
	$Endereço;           
	$Numero;             
	$Complemento;        
	$Bairro;            
	$Estado;            
	$Cidade;             
	$NomeEscola;         
	$BairroEscola;       
	$Ano;                
	$Turma;              
	$PerfilRealista; 	
	$PerfilInvestigativo;
	$PerfilEmpreendedor; 
	$PerfilConvencional; 
	$PerfilArtistico;	
	$PerfilSocial;		
	$Resultado;          

 
	
	$PerfilRealista =  ($p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10) / 30 * 100;
	$PerfilInvestigativo = ($p11+$p12+$p13+$p14+$p15+$p16+$p17+$p18+$p19+$p20) / 30 * 100;
	$PerfilEmpreendedor = ($p21+$p22+$p23+$p24+$p25+$p26+$p27+$p28+$p29+$p30) / 30 * 100;
	$PerfilConvencional = ($p31+$p32+$p33+$p34+$p35+$p36+$p37+$p38+$p39+$p40) /  30 * 100;
	$PerfilArtistico =  ($p41+$p42+$p43+$p44+$p45+$p46+$p47+$p48+$p49+$p50) / 30 * 100;
	$PerfilSocial = ($p51+$p52+$p53+$p54+$p55+$p56+$p57+$p58+$p59+$p60) /  30 * 100;
	
	$perfil;


	if($PerfilRealista > $PerfilInvestigativo && $PerfilRealista > $PerfilArtistico && $PerfilRealista >
	$PerfilSocial && $PerfilRealista > $PerfilEmpreendedor && $PerfilRealista > $PerfilConvencional)
	{
		$perfil = "R";
		echo 'Realístico';
		echo '<br/>';
		echo 'As pessoas com esse perfil de personalidade são práticas e gostam de agir.
			São vistas como ajustadas e simples. São persistentes, sensatas e na maioria
			das vezes sinceras, diretas ao modo de se relacionar. Gostam de dizer o que
			pensam, sem muitos rodeios. Sentem apreço por todas as coisas.';
	}
	
	if($PerfilInvestigativo > $PerfilRealista && $PerfilInvestigativo > $PerfilArtistico && $PerfilInvestigativo >
	$PerfilSocial && $PerfilInvestigativo > $PerfilEmpreendedor && $PerfilInvestigativo > $PerfilConvencional)	
	{
		$perfil = "I";
		echo 'Investigativo';
		echo '<br/>';
		echo 'As pessoas desse tipo, gostam de observar e entender tudo o que está ao
			seu redor, buscando explicações para o modo como as coisas acontecem.
			São pessoas muito críticas e independentes em suas ideias. Em geral, são
			metódicas, bem organizadas, racionais e reservadas em alguns casos. Suas
			emoções são mais contidas. Gostam de adquirir conhecimento e se
			alimentam do saber, mostrando muita curiosidade para observar,
			experimentar, estimar resultados, elaborar teorias e modelos.';
	}

	if($PerfilEmpreendedor > $PerfilRealista && $PerfilEmpreendedor > $PerfilArtistico && $PerfilEmpreendedor >
	$PerfilSocial && $PerfilEmpreendedor > $PerfilInvestigativo && $PerfilEmpreendedor > $PerfilConvencional)	
	{
		$perfil = "E";
		echo 'Empreendedor';
		echo '<br/>';
		echo 'Os empreendedores gostam de manipular, coordenar e supervisionar as
			atividades dos outros, seja para alcançar seus próprios objetivos, seja para
			atingir as metas da empresa onde trabalham, ou ainda para conseguir
			resultados produtivos e obter lucro. São pessoas ativas, que gostam de
			aventuras, riscos e dos bons prazeres da vida material. Estão sempre
			buscando novidades e se mostram autoconfiantes. Geralmente são
			otimistas, sociáveis, líderes, competitivos.';
	}

	if($PerfilConvencional > $PerfilRealista && $PerfilConvencional > $PerfilArtistico && $PerfilConvencional > 
	$PerfilSocial && $PerfilConvencional > $PerfilEmpreendedor && $PerfilConvencional > $PerfilInvestigativo)	
	{
		$perfil = "C";	
		echo 'Convencional';
		echo '<br/>';
		echo 'Apreciam o trabalho concreto, bem organizado, rotineiro e com regras
			claras. Não gostam de muita proximidade e intimidade, nem sentem muita
			necessidade de contato afetivo, especialmente no trabalho, preferindo ás
			vezes o isolamento. Mostram preferência por atividades de manipulação de
			dados e fatos, como organização de arquivos e registros. Também gostam
			de lidar com números e organização, sempre de acordo com planos préestabelecidos.';
	}	

	if($PerfilArtistico > $PerfilRealista && $PerfilArtistico > $PerfilInvestigativo && $PerfilArtistico > 
	$PerfilSocial && $PerfilArtistico > $PerfilEmpreendedor && $PerfilArtistico > $PerfilConvencional)	
	{
		$perfil = "A";
		echo 'Artístico';
		echo '<br/>';
		echo 'Gostam de executar as atividades artística, e não somente de apreciá-las.
			Não gostam de rotina nem de atividades controladas. Preferem realizar
			tarefas nas quais possam mostrar seus talentos criativos e expressivos.
			Compreender e expressar as emoções é fundamental. São pessoas originais
			e inovadoras, expressivas, que gostam de chamar a atenção. São também
			muito emotivas e intuitivas. Podem ser impulsivos, pois gostam de
			novidades, espontaneidade e principalmente de liberdade.';
	}
	
	if($PerfilSocial > $PerfilRealista && $PerfilSocial > $PerfilArtistico && $PerfilSocial > 
	$PerfilInvestigativo && $PerfilSocial > $PerfilEmpreendedor && $PerfilSocial > $PerfilConvencional)	
	{
		$perfil = "S";
		echo 'Social';
		echo '<br/>';
		echo 'Gostam e buscam interações com os outros, seja para ajudar, informar,
			treinar, desenvolver, curar, esclarecer, ensinar, ouvir ou cuidar. Mostram
			bastante interesse pelo bem-estar dos outros, pelo trabalho social,
			humanitário e religioso, e pela boa e justa organização da sociedade. São
			pessoas atenciosas, compreensivas com os problemas dos outros,
			simpáticas e colaborativas. Gostam de se dedicar ao outro e também se
			mostram dominantes. São pessoas em geral responsáveis, idealistas, gentis
			e de fácil relacionamento.';
	}
}
else {
	echo 'Preencha o formulário';
}	


?>