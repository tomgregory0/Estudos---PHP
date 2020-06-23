<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--	REFERENCIA 	https://www.rlsystem.com.br/dao-php/ -->
	<link rel="stylesheet" href="Template/CSS/estilo.css"/>
    <title>Atividade de autoconhecimento</title>
    <meta charset="utf-8">
</head>
<body>
	<div class="FormularioDiv">
		<h1>Inventário de personalidade ocupacional</h1>
		<h3>Preencha os campos abaixo para realizar sua atividade de autoconhecimento.</h3>
		<form name="form1" id="form1" action="Calculo/calculo.php" method="POST">    		
			<div class="inputs">
				<div class="campo">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" required="required"/>
				</div>
				<div class="campo">
					<label for="email">E-mail</label>
					<input type="text" name="email" id="email" required="required"/>
				</div>
				<div class="campo">
					<label for="dataNasc">Data de nascimento</label>
					<input type="text" name="dataNascimento" id="dataNascimento" required="required"/>
				</div>
				<div class="campo">
					<label for="RG">RG</label>
					<input type="text" name="RG" id="RG"/>
				</div>			
				<div class="campo">
					<label for="celular">Celular</label>
					<input type="tel" name="celular" id="celular" required="required"/>
				</div>
				<div class="campo">
					<label for="telResidencial">Telefone residencial</label>
					<input type="tel" name="telResidencial" id="telResidencial" required="required"/>
				</div>				
				<div class="campo">
					<label for="endereco">Endereço</label>
					<input type="text" name="endereco" id="endereco" required="required"/>
				</div>					
				<div class="campo">
					<label for="numero">Número</label>
					<input type="text" name="numero" id="numero" required="required"/>
				</div>			
				<div class="campo">
					<label for="complemento">Complemento</label>
					<input type="text" name="complemento" id="complemento"/>
				</div>			
				<div class="campo">
					<label for="bairro">Bairro</label>
					<input type="text" name="bairro" id="bairro" required="required"/>
				</div>								
				<div class="campo">
					<label for="estado">Estado</label>
					<select id="estado" required="required">
						<option value="">
						  Selecione
						</option>  
						<option value="AC">AC</option>    
						<option value="AL">AL</option>    
						<option value="AP">AP</option>    
						<option value="AM">AM</option>    
						<option value="BA">BA</option>    
						<option value="CE">CE</option>    
						<option value="DF">DF</option>    
						<option value="ES">ES</option>    
						<option value="GO">GO</option>    
						<option value="MA">MA</option>    
						<option value="MT">MT</option>    
						<option value="MS">MS</option>    
						<option value="MG">MG</option>    
						<option value="PA">PA</option>    
						<option value="PB">PB</option>    
						<option value="PR">PR</option>    
						<option value="PE">PE</option>    
						<option value="PI">PI</option>    
						<option value="RJ">RJ</option>    
						<option value="RN">RN</option>    
						<option value="RS">RS</option>						
					</select>
				</div>
				<div class="campo">
					<label for="cidade">Cidade</label>
					<select id="cidade" required="required">
						<option value="">
						  Selecione
						</option>
						<option value="Porto Alegre - RS">Porto Alegre - RS</option>	
						<option value="Porto Alegre - RS">Porto Alegre - RS</option>	
						<option value="Porto Alegre - RS">Porto Alegre - RS</option>								
					</select>
				</div>						
				<div class="campo">
					<label for="nomeEscola">Nome da sua escola</label>
					<select id="nomeEscola" required="required">
						<option value="">
						  Selecione
						</option>
						<option value="CE FRANCISCO A VIEIRA CALDAS JR">CE FRANCISCO A VIEIRA CALDAS JR</option>

						<option value="CE PADRE RAMBO">CE PADRE RAMBO</option>

						<option value="CE PROF OTAVIO DE SOUZA">CE PROF OTAVIO DE SOUZA</option>

						<option value="CE PROFESSOR ELMANO LAUFFER LEAL">CE PROFESSOR ELMANO LAUFFER LEAL</option>

						<option value="COL CONCORDIA">COL CONCORDIA</option>

						<option value="COL EST DOM JOAO BECKER">COL EST DOM JOAO BECKER</option>

						<option value="COL EST PRESIDENTE ARTHUR DA COSTA E SILVA">COL EST PRESIDENTE ARTHUR DA COSTA E SILVA</option>

						<option value="COL KENNEDY">COL KENNEDY</option>

						<option value="COL MONTEIRO LOBATO - ESC EDUC BASICA">COL MONTEIRO LOBATO - ESC EDUC BASICA</option>

						<option value="COLEGIO ADVENTISTA DE VIAMAO - EDUC INF ENS FUNDAMENTAL E MEDIO">COLEGIO ADVENTISTA DE VIAMAO - EDUC INF ENS FUNDAMENTAL E MEDIO</option>

						<option value="COLEGIO ADVENTISTA DO PARTENON">COLEGIO ADVENTISTA DO PARTENON</option>

						<option value="COLEGIO BATISTA">COLEGIO BATISTA</option>

						<option value="COLEGIO EST ALCEBIADES AZEREDO DOS SANTOS">COLEGIO EST ALCEBIADES AZEREDO DOS SANTOS</option>

						<option value="COLEGIO ESTADUAL ANTONIO DE CASTRO ALVES">COLEGIO ESTADUAL ANTONIO DE CASTRO ALVES</option>

						<option value="COLEGIO ESTADUAL FLORINDA TUBINO SAMPAIO">COLEGIO ESTADUAL FLORINDA TUBINO SAMPAIO</option>

						<option value="COLEGIO ESTADUAL JAPAO">COLEGIO ESTADUAL JAPAO</option>

						<option value="COLEGIO ESTADUAL RUBEN BERTA">COLEGIO ESTADUAL RUBEN BERTA</option>

						<option value="COLEGIO LUTERANO DA PAZ">COLEGIO LUTERANO DA PAZ</option>

						<option value="COLEGIO MARISTA SAO PEDRO">COLEGIO MARISTA SAO PEDRO</option>

						<option value="COLEGIO MESQUITA">COLEGIO MESQUITA</option>

						<option value="COLEGIO ROMANO SAO MATEUS">COLEGIO ROMANO SAO MATEUS</option>

						<option value="COLEGIO ROMANO SENHOR BOM JESUS">COLEGIO ROMANO SENHOR BOM JESUS</option>

						<option value="COLEGIO STELLA MARIS">COLEGIO STELLA MARIS</option>

						<option value="EEEB ALMIRANTE BACELAR">EEEB ALMIRANTE BACELAR</option>

						<option value="EEEB APELES PORTO ALEGRE">EEEB APELES PORTO ALEGRE</option>

						<option value="EEEB DOLORES ALCARAZ CALDAS">EEEB DOLORES ALCARAZ CALDAS</option>

						<option value="EEEB JULIO CESAR RIBEIRO DE SOUZA">EEEB JULIO CESAR RIBEIRO DE SOUZA</option>

						<option value="EEEB MONSENHOR LEOPOLDO HOFF">EEEB MONSENHOR LEOPOLDO HOFF</option>

						<option value="EEEB PROF GENTIL VIEGAS CARDOSO">EEEB PROF GENTIL VIEGAS CARDOSO</option>

						<option value="EEEM 1 DE MAIO">EEEM 1 DE MAIO</option>

						<option value="EEEM BALTAZAR DE OLIVEIRA GARCIA">EEEM BALTAZAR DE OLIVEIRA GARCIA</option>

						<option value="EEEM CRISTOVAO COLOMBO">EEEM CRISTOVAO COLOMBO</option>

						<option value="EEEM ITALIA">EEEM ITALIA</option>

						<option value="EEEM PROFESSOR ALCIDES CUNHA">EEEM PROFESSOR ALCIDES CUNHA</option>

						<option value="EEEM SANTA ISABEL">EEEM SANTA ISABEL</option>

						<option value="EEEM SENADOR SALGADO FILHO">EEEM SENADOR SALGADO FILHO</option>

						<option value="EMEB DR LIBERATO SALZANO VIEIRA DA CUNHA">EMEB DR LIBERATO SALZANO VIEIRA DA CUNHA</option>

						<option value="ESC DE EDUC BASICA DON LUIS GUANELLA">ESC DE EDUC BASICA DON LUIS GUANELLA</option>

						<option value="ESC EST DE ENS MEDIO FARROUPILHA">ESC EST DE ENS MEDIO FARROUPILHA</option>

						<option value="ESC EST DE ENS MEDIO SETEMBRINA">ESC EST DE ENS MEDIO SETEMBRINA</option>

						<option value="ESC EST EDUC BASICA GOMES CARNEIRO">ESC EST EDUC BASICA GOMES CARNEIRO</option>

						<option value="ESCOLA DE ENSINO MEDIO SALVADOR JESUS CRISTO">ESCOLA DE ENSINO MEDIO SALVADOR JESUS CRISTO</option>

						<option value="ESCOLA TECNICA ESTADUAL SENADOR ERNESTO DORNELLES">ESCOLA TECNICA ESTADUAL SENADOR ERNESTO DORNELLES</option>

						<option value="ETE IRMAO PEDRO">ETE IRMAO PEDRO</option>

						<option value="ETE JOSE FEIJO">ETE JOSE FEIJO</option>

						<option value="EXITO SISTEMAS DE ENSINO LTDA">EXITO SISTEMAS DE ENSINO LTDA</option>

						<option value="IEE ISABEL DE ESPANHA">IEE ISABEL DE ESPANHA</option>

						<option value="INST EDUCAC JOAO XXIII-ESC DE 1 E 2 GRAUS">INST EDUCAC JOAO XXIII-ESC DE 1 E 2 GRAUS</option>

						<option value="INSTITUTO DE EDUCACAO SAO FRANCISCO">INSTITUTO DE EDUCACAO SAO FRANCISCO</option>

						<option value="INSTITUTO ESTADUAL DOM DIOGO DE SOUZA">INSTITUTO ESTADUAL DOM DIOGO DE SOUZA</option>

						<option value="INSTITUTO SAO FRANCISCO SANTA FAMILIA">INSTITUTO SAO FRANCISCO SANTA FAMILIA</option>

						<option value="C E JOSE LOUREIRO DA SILVA">C E JOSE LOUREIRO DA SILVA</option>

						<option value="COL ESTADUAL AUGUSTO MEYER">COL ESTADUAL AUGUSTO MEYER</option>

						<option value="COL ESTADUAL GUIANUBA">COL ESTADUAL GUIANUBA</option>

						<option value="COL ESTADUAL JUSSARA MARIA POLIDORO">COL ESTADUAL JUSSARA MARIA POLIDORO</option>

						<option value="COL ESTADUAL MARECHAL RONDON">COL ESTADUAL MARECHAL RONDON</option>

						<option value="COL ESTADUAL MIGUEL LAMPERT">COL ESTADUAL MIGUEL LAMPERT</option>

						<option value="COL ESTADUAL SENADOR ALBERTO PASQUALINI">COL ESTADUAL SENADOR ALBERTO PASQUALINI</option>

						<option value="COL ESTADUAL TEREZA FRANCESCUTTI">COL ESTADUAL TEREZA FRANCESCUTTI</option>

						<option value="COLEGIO ADVENTISTA DE ESTEIO">COLEGIO ADVENTISTA DE ESTEIO</option>

						<option value="COLEGIO ADVENTISTA DE GRAVATAI">COLEGIO ADVENTISTA DE GRAVATAI</option>

						<option value="COLEGIO ADVENTISTA DE NOVO HAMBURGO">COLEGIO ADVENTISTA DE NOVO HAMBURGO</option>

						<option value="COLEGIO CORACAO DE MARIA">COLEGIO CORACAO DE MARIA</option>

						<option value="COLEGIO DA IMACULADA">COLEGIO DA IMACULADA</option>

						<option value="COLEGIO DOM FELICIANO">COLEGIO DOM FELICIANO</option>

						<option value="COLEGIO ESPIRITO SANTO">COLEGIO ESPIRITO SANTO</option>

						<option value="COLEGIO ESTADUAL BARBOSA RODRIGUES">COLEGIO ESTADUAL BARBOSA RODRIGUES</option>

						<option value="COLEGIO ESTADUAL RODRIGUES ALVES">COLEGIO ESTADUAL RODRIGUES ALVES</option>

						<option value="COLEGIO LUTERANO CONCORDIA">COLEGIO LUTERANO CONCORDIA</option>

						<option value="COLEGIO MARIA AUXILIADORA">COLEGIO MARIA AUXILIADORA</option>

						<option value="COLEGIO SANTA CATARINA">COLEGIO SANTA CATARINA</option>

						<option value="EEEM AFFONSO CHARLIER">EEEM AFFONSO CHARLIER</option>

						<option value="EEEM ANDRE LEAO PUENTE">EEEM ANDRE LEAO PUENTE</option>

						<option value="EEEM BARAO DO AMAZONAS">EEEM BARAO DO AMAZONAS</option>

						<option value="EEEM BENTO GONCALVES">EEEM BENTO GONCALVES</option>

						<option value="EEEM CAETANO GONCALVES DA SILVA">EEEM CAETANO GONCALVES DA SILVA</option>

						<option value="EEEM CECILIA MEIRELES">EEEM CECILIA MEIRELES</option>

						<option value="EEEM FRANCISCO JOSE RODRIGUES">EEEM FRANCISCO JOSE RODRIGUES</option>

						<option value="EEEM GUARANI">EEEM GUARANI</option>

						<option value="EEEM GUILHERME DE ALMEIDA">EEEM GUILHERME DE ALMEIDA</option>

						<option value="EEEM GUIMARAES ROSA">EEEM GUIMARAES ROSA</option>

						<option value="EEEM JOSE GOMES DE VASCONCELOS JARDIM">EEEM JOSE GOMES DE VASCONCELOS JARDIM</option>

						<option value="EEEM PRESIDENTE KENNEDY">EEEM PRESIDENTE KENNEDY</option>

						<option value="EEEM PROF MARGOT TEREZINHA NOAL GIACOMA">EEEM PROF MARGOT TEREZINHA NOAL GIACOMA</option>

						<option value="EEEM SÃO FRANCISCO DE ASSIS">EEEM SÃO FRANCISCO DE ASSIS</option>

						<option value="EEEM VISCONDE DO RIO BRANCO">EEEM VISCONDE DO RIO BRANCO</option>

						<option value="ESC EST DE ENS MEDIO ADELAIDE PINTO DE LIMA LINCK">ESC EST DE ENS MEDIO ADELAIDE PINTO DE LIMA LINCK</option>

						<option value="ESC LUTERANA DE ENSINO MEDIO MARTINHO LUTERO">ESC LUTERANA DE ENSINO MEDIO MARTINHO LUTERO</option>

						<option value="ESCOLA DE ENSINO MEDIO DORA DIMER">ESCOLA DE ENSINO MEDIO DORA DIMER</option>

						<option value="ESCOLA DE ENSINO MEDIO NOSSA SENHORA DE FATIMA">ESCOLA DE ENSINO MEDIO NOSSA SENHORA DE FATIMA</option>

						<option value="ESCOLA ESTADUAL DE ENSINO FUNDAMENTAL E MÉDIO JOAO XXIII">ESCOLA ESTADUAL DE ENSINO FUNDAMENTAL E MÉDIO JOAO XXIII</option>

						<option value="ETE MARECHAL MASCARENHAS DE MORAES">ETE MARECHAL MASCARENHAS DE MORAES</option>

						<option value="IEE DR CARLOS CHAGAS">IEE DR CARLOS CHAGAS</option>

						<option value="IEE RUBEN DARIO">IEE RUBEN DARIO</option>

						<option value="INSTITUTO SAO FRANCISCO-CACHOEIRINHA">INSTITUTO SAO FRANCISCO-CACHOEIRINHA</option>

						<option value="CE CEL AFONSO EMILIO MASSOT">CE CEL AFONSO EMILIO MASSOT</option>

						<option value="CE DR GLICERIO ALVES">CE DR GLICERIO ALVES</option>

						<option value="CE FORM DE PROFESSORES GENERAL FLORES DA CUNHA">CE FORM DE PROFESSORES GENERAL FLORES DA CUNHA</option>

						<option value="CE INACIO MONTANHA">CE INACIO MONTANHA</option>

						<option value="CE JULIO DE CASTILHOS">CE JULIO DE CASTILHOS</option>

						<option value="CE PARANA">CE PARANA</option>

						<option value="CE PAULA SOARES">CE PAULA SOARES</option>

						<option value="CEEM TIRADENTES">CEEM TIRADENTES</option>

						<option value="CENT ENS MEDIO FARROUPILHA">CENT ENS MEDIO FARROUPILHA</option>

						<option value="CENTRO DE ENSINO MEDIO PASTOR DOHMS-UNIDADE DE ENSINO HIGIENOPOLIS">CENTRO DE ENSINO MEDIO PASTOR DOHMS-UNIDADE DE ENSINO HIGIENOPOLIS</option>

						<option value="CENTRO DE ESNINO MEDIO PASTOR DOHMS- UNIDADE DE ENSINO ZONA SUL">CENTRO DE ESNINO MEDIO PASTOR DOHMS- UNIDADE DE ENSINO ZONA SUL</option>

						<option value="COL ADVENTISTA MARECHAL RONDON">COL ADVENTISTA MARECHAL RONDON</option>

						<option value="COL CONHECER">COL CONHECER</option>

						<option value="COL EST ELPIDIO FERREIRA PAES">COL EST ELPIDIO FERREIRA PAES</option>

						<option value="COL EST ODILA GAY DA FONSECA">COL EST ODILA GAY DA FONSECA</option>

						<option value="COL EST PIRATINI">COL EST PIRATINI</option>

						<option value="COL EST PROTASIO ALVES">COL EST PROTASIO ALVES</option>

						<option value="COL LA SALLE SAO JOAO">COL LA SALLE SAO JOAO</option>

						<option value="COL MARIA IMACULADA">COL MARIA IMACULADA</option>

						<option value="COL MARISTA NOSSA SENHORA DO ROSARIO">COL MARISTA NOSSA SENHORA DO ROSARIO</option>

						<option value="COL SAO JOSE DE MURIALDO - ESC DE EDUCACAO BASICA">COL SAO JOSE DE MURIALDO - ESC DE EDUCACAO BASICA</option>

						<option value="COLEGIO ACM CENTRO">COLEGIO ACM CENTRO</option>

						<option value="COLEGIO ADVENTISTA DE PORTO ALEGRE">COLEGIO ADVENTISTA DE PORTO ALEGRE</option>

						<option value="COLEGIO ISRAELITA BRASILEIRO">COLEGIO ISRAELITA BRASILEIRO</option>

						<option value="COLEGIO LA SALLE DORES">COLEGIO LA SALLE DORES</option>

						<option value="COLEGIO LEONARDO DA VINCI-ALFA">COLEGIO LEONARDO DA VINCI-ALFA</option>

						<option value="COLEGIO LEONARDO DA VINCI-BETA">COLEGIO LEONARDO DA VINCI-BETA</option>

						<option value="COLEGIO MAE DE DEUS">COLEGIO MAE DE DEUS</option>

						<option value="COLEGIO MARISTA ASSUNCAO">COLEGIO MARISTA ASSUNCAO</option>

						<option value="COLEGIO MARISTA IPANEMA">COLEGIO MARISTA IPANEMA</option>

						<option value="COLEGIO MILITAR DE PORTO ALEGRE">COLEGIO MILITAR DE PORTO ALEGRE</option>

						<option value="COLEGIO NOSSA SRA DA GLORIA">COLEGIO NOSSA SRA DA GLORIA</option>

						<option value="COLEGIO PROVINCIA DE SAO PEDRO">COLEGIO PROVINCIA DE SAO PEDRO</option>

						<option value="COLEGIO ROMANO SANTA MARTA">COLEGIO ROMANO SANTA MARTA</option>

						<option value="COLEGIO SANTA TERESA DE JESUS">COLEGIO SANTA TERESA DE JESUS</option>

						<option value="COLEGIO SINODAL DO SALVADOR">COLEGIO SINODAL DO SALVADOR</option>

						<option value="COLEGIO UNIFICADO">COLEGIO UNIFICADO</option>

						<option value="COLEGIO UNIFICADO IGUATEMI">COLEGIO UNIFICADO IGUATEMI</option>

						<option value="COLEGIO UNIVERSITARIO">COLEGIO UNIVERSITARIO</option>

						<option value="EEEM ALBERTO TORRES">EEEM ALBERTO TORRES</option>

						<option value="EEEM INFANTE DOM HENRIQUE">EEEM INFANTE DOM HENRIQUE</option>

						<option value="EEEM JOSE DO PATROCINIO">EEEM JOSE DO PATROCINIO</option>

						<option value="EEEM PROFESSOR JULIO GRAU">EEEM PROFESSOR JULIO GRAU</option>

						<option value="EEEM ROQUE GONZALES">EEEM ROQUE GONZALES</option>

						<option value="EEEM SANTOS DUMONT">EEEM SANTOS DUMONT</option>

						<option value="ESC DE EDUC BAS RAINHA DO BRASIL">ESC DE EDUC BAS RAINHA DO BRASIL</option>

						<option value="ESC ENS MEDIO CESI ZONA SUL">ESC ENS MEDIO CESI ZONA SUL</option>

						<option value="ESC ENS MEDIO MARIA IMACULADA">ESC ENS MEDIO MARIA IMACULADA</option>

						<option value="ESC EST ENS MEDIO PADRE REUS">ESC EST ENS MEDIO PADRE REUS</option>

						<option value="ESCOLA TECNICA ESTADUAL PAROBE">ESCOLA TECNICA ESTADUAL PAROBE</option>

						<option value="IE RIO BRANCO">IE RIO BRANCO</option>

						<option value="INST VICENTE PALLOTTI ESCOLA EDUCACAO INFANTIL ENSINO FUNDAMENTAL E MEDIO">INST VICENTE PALLOTTI ESCOLA EDUCACAO INFANTIL ENSINO FUNDAMENTAL E MEDIO</option>

						<option value="INSTITUTO SANTA LUZIA">INSTITUTO SANTA LUZIA</option>

						<option value="COLEGIO ESTADUAL CECILIA MEIRELES">COLEGIO ESTADUAL CECILIA MEIRELES</option>

						<option value="COLEGIO JOAO PAULO I - Higienopolis">COLEGIO JOAO PAULO I - Higienopolis</option>

						<option value="COLEGIO MARISTA NOSSA SENHORA DAS GRACAS">COLEGIO MARISTA NOSSA SENHORA DAS GRACAS</option>

						<option value="COLEGIO SALESIANO DOM BOSCO">COLEGIO SALESIANO DOM BOSCO</option>

						<option value="COLEGIO SAO JUDAS TADEU">COLEGIO SAO JUDAS TADEU</option>

						<option value="INSTITUTO PRO-UNIVERSIDADE CANOENSE - IPUC">INSTITUTO PRO-UNIVERSIDADE CANOENSE - IPUC</option>

						<option value="CE 25 DE JULHO">CE 25 DE JULHO</option>

						<option value="IEE PROF PEDRO SCHNEIDER">IEE PROF PEDRO SCHNEIDER</option>

						<option value="UNID DE ENS COLEGIO SINODAL- PORTAO">UNID DE ENS COLEGIO SINODAL- PORTAO</option>

						<option value="UNIDADE DE ENSINO COLEGIO SINODAL - SAO LEOPOLDO">UNIDADE DE ENSINO COLEGIO SINODAL - SAO LEOPOLDO</option>

						<option value="EEEM BERNARDO VIEIRA DE MELLO">EEEM BERNARDO VIEIRA DE MELLO</option>

						<option value="COL METODISTA AMERICANO">COL METODISTA AMERICANO</option>

						<option value="COLEGIO SANTA INES">COLEGIO SANTA INES</option>

						<option value="COL UNIFICADO LINDOIA">COL UNIFICADO LINDOIA</option>

						<option value="COLEGIO UNIFICADO CANOAS">COLEGIO UNIFICADO CANOAS</option>

						<option value="ESCO PANAMERICANA EDUC BASICA">ESCO PANAMERICANA EDUC BASICA</option>								
					</select>
				</div>									
				<div class="campo">
					<label for="bairroEscola">Bairro da Escola</label>
					<input type="text" name="bairroEscola" id="bairroEscola" required="required"/>
				</div>	
				<div class="campo">
					<label for="ano">Ano</label>
					<select id="ano" required="required">
						<option value="">
						  Selecione
						</option>
						<option value="Primeiro ano">Primeiro ano</option>

						<option value="Segundo ano">Segundo ano</option>

						<option value="Terceiro ano">Terceiro ano</option>

						<option value="Outros">Outros</option>								
					</select>
				</div>				
				<div class="campo">
					<label for="turma">Turma</label>
					<input type="text" name="turma" id="turma" required="required"/>
				</div>						
				<div class="campo">
					<label for="perfilEscola">Perfil da escola</label>
					<select id="perfilEscola" required="required">
					<option value="">
					  Selecione
					</option>				
					  <option value="Particular">Particular</option>				
					  <option value="Pública">Pública</option>								
				  </select>
				</div>
				
				<div class="campo">
					<label for="p1">Sou bastante autêntico e digo aquilo que penso.*</label>
					<select id="p1" name="p1" required="required">
					<option value="">
					  Selecione
					</option>				
					  <option value="0">0 - Nada</option>				
					  <option value="1">1 - Às vezes</option>				
					  <option value="2">2 - Frequentemente</option>				
					  <option value="3">3 - Sou eu!</option>				
				  </select>
				</div>			
				<div class="campo">
					<label for="p2">Sou tímido, penso muito antes de me expor.*</label>
					<select id="p2" name="p2" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p3">Questões intelectuais profundas não me interessam.*</label>
					<select id="p3" name="p3" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
					<label for="p4">Sou persistente e não desisto até atingir meus objetivos.*</label>
					<select id="p4" name="p4" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p5">As pessoas podem contar comigo. Sou bastante estável em minhas ações.*</label>
					<select id="p5" name="p5" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p6">Gosto de trabalhar com materiais, com as mãos, objetos e instrumentos.*</label>
					<select id="p6" name="p6" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p7">Consigo aguentar por um bom tempo uma atividade física ou intelectual.*</label>
					<select id="p7" name="p7" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p8">Dou muito valor para o dinheiro.*</label>
					<select id="p8" name="p8" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p9">Sei utilizar instrumentos e aparelhos eletrônicos.*</label>
					<select id="p9" name="p9" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p10">Aceito bem as regras, limites, ordens e o contexto no qual vivo.*</label>
					<select id="p10" name="p10" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p11">Gosto de observar, analisar e entender o modo como as coisas, a natureza ou as pessoas funcionam.*</label>
					<select id="p11" name="p11" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p12">Não sou muito impulsivo, penso antes de agir.*</label>
					<select id="p12" name="p12" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p13">Áreas como matemática ou ciências me atraem. Gosto de estudar um assunto a fundo.*</label>
					<select id="p13" name="p13" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p14">Tenho facilidade para aprender.*</label>
					<select id="p14" name="p14" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p15">Sou racional para tomar uma decisão ou para decidir o melhor caminho a seguir.*</label>
					<select id="p15" name="p15" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p16">Sou muito organizado e detalhista.*</label>
					<select id="p16" name="p16" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p17">Sou capaz de dar respostas precisas sobre datas, valores e descrever bem determinada situação do passado.*</label>
					<select id="p17" name="p17" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p18">Tenho um grande senso crítico. As coisas sempre podem ser melhoradas.*</label>
					<select id="p18" name="p18" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p19">Gosto de tomar minhas próprias decisões, mesmo que seja diferente do pensamento da maioria.*</label>
					<select id="p19" name="p19" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p20">Tenho boa habilidade lógica ou matemática.*</label>
					<select id="p20" name="p20" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p21">É difícil para mim aceitar regras, limites e algo que me é imposto.*</label>
					<select id="p21" name="p21" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p22">Para mim, é fácil viver em um ambiente desorganizado e fazer as coisas sem uma lógica.*</label>
					<select id="p22" name="p22" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p23">Sou muito sensível. Uso mais a emoção nas minhas decisões.*</label>
					<select id="p23" name="p23" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p24">Sou uma pessoa idealista. Acredito que possamos construir um mundo melhor.*</label>
					<select id="p24" name="p24" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p25">Gosto de criar, inventar, idealizar e fantasiar.*</label>
					<select id="p25" name="p25" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p26">Gosto de causar impacto, provocando, entretendo, seduzindo, encantando as pessoas.*</label>
					<select id="p26" name="p26" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p27">Gosto de descobrir novas possibilidades para as coisas e situações da vida.*</label>
					<select id="p27" name="p27" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p28">Muitas vezes não penso muito antes de tomar uma decisão, nem meço as consequências.*</label>
					<select id="p28" name="p28" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p29">Gosto de me expressar, de representar ou de me mostrar em público.*</label>
					<select id="p29" name="p29" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p30">Sou responsável por minhas atitudes e decisões.*</label>
					<select id="p30" name="p30" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p31">Gosto de liderar, de organizar ou de mobilizar um grupo em torno de uma causa ou ação.*</label>
					<select id="p31" name="p31" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p32">Gosto de ajudar e colaborar com os outros. Sou leal e gosto de fazer o bem.*</label>
					<select id="p32" name="p32" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p33">Uso a emoção e a sensibilidade para tomar decisões.*</label>
					<select id="p33" name="p33" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p34">Em geral sou uma pessoa agradável e fácil de lidar.*</label>
					<select id="p34" name="p34" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p35">Sou idealista e quero mais da vida.*</label>
					<select id="p35" name="p35" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p36">Questões éticas, de justiça ou bem-estar comum são importantes para mim.*</label>
					<select id="p36" name="p36" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p37">Sou responsável. Podem contar comigo porque sempre correspondo ao esperado.*</label>
					<select id="p37" name="p37" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p38">Costumo me dedicar a pessoas, ou a causas, "vestindo a camisa" de um grupo ou clube que eu acredite.*</label>
					<select id="p38" name="p38" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p39">No geral, me relaciono bem com os outros. Tenho facilidade para dialogar.*</label>
					<select id="p39" name="p39" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p40">Gosto de ajudar, ensinar, cuidar, de alguma forma quero ser importante para os outros.*</label>
					<select id="p40" name="p40" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p41">Sou firme e confiante em minhas decisões e não preciso de palpites.*</label>
					<select id="p41" name="p41" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p42">Muitas vezes consigo convencer as pessoas sobre determinado ponto de vista.*</label>
					<select id="p42" name="p42" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p43">Sou uma pessoa motivada, autoincentivada, otimista.*</label>
					<select id="p43" name="p43" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p44">Falo muito. Não desisto facilmente de uma argumentação.*</label>
					<select id="p44" name="p44" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p45">Dou muito valor aos bens materiais. Gosto de comprar e, às vezes, até de demonstrar aos outros minhas conquistas, meus bens materiais, minha sabedoria e meus talentos.*</label>
					<select id="p45" name="p45" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p46">Tomo decisões rapidamente. Ajo sem refletir muito. Chego a ser impulsivo.*</label>
					<select id="p46" name="p46" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p47">Gosto de estar no meio das pessoas, especialmente para mostrar a elas o modo como penso.*</label>
					<select id="p47" name="p47" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p48">Gosto muito de aventuras, de me arriscar e de desafios.*</label>
					<select id="p48" name="p48" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p49">Estou sempre procurando novas oportunidades, novos caminhos a seguir.*</label>
					<select id="p49" name="p49" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p50">Prefiro ser o dono de um negócio do que trabalhar para alguém.*</label>
					<select id="p50" name="p50" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p51">Aceito bem as regras e o contexto no qual vivo. Gosto de limites claros.*</label>
					<select id="p51" name="p51" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p52">Sou introvertido, me resguardo e não me exponho muito.*</label>
					<select id="p52" name="p52" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p53">Cuido de minhas coisas e gosto de conservá-las.*</label>
					<select id="p53" name="p53" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p54">Sou bem calmo e tenho bom equilíbrio emocional.*</label>
					<select id="p54" name="p54" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p55">Prefiro ter um plano de ação, uma rotina definida de trabalho.*</label>
					<select id="p55" name="p55" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p56">Sou um tipo de pessoa estável, confiável, adequada á realidade.*</label>
					<select id="p56" name="p56" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p57">Respeito a ética, guardo segredos, cumpro com meus combinados.*</label>
					<select id="p57" name="p57" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p58">Sou muito organizado e detalhista nas coisas. Eficácia é muito importante para mim.*</label>
					<select id="p58" name="p58" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p59">Eu vou até o fim em meus objetivos. Não desisto até atingi-los.*</label>
					<select id="p59" name="p59" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				<div class="campo">
					<label for="p60">Gosto de satisfazer os outros em relação aquilo que me pedem.*</label>
					<select id="p60" name="p60" required="required">
					<option value="">
					  Selecione
					</option>

					  <option value="0">0 - Nada</option>

					  <option value="1">1 - Às vezes</option>

					  <option value="2">2 - Frequentemente</option>

					  <option value="3">3 - Sou eu!</option>

					</select>
				</div>
				
				<div class="campo">
					<label for="captcha">11 + 7 = ?</label>
					<input type="text" name="captcha" id="captcha" required="required"/>
				</div>    
				<div class="envio">
					<input name="enviar" type="submit" value="Enviar"/>
				</div>    				
			</div>		
		</form>    
	</div>
</body>
</html>



<?php
         if (isset($_POST['cadastrar'])) {
                 require_once '../conexao.php';
                 require_once '../classes/Pessoa.php';
				 require_once '../DAO/PassoaDAO.php';


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
	}

	?>