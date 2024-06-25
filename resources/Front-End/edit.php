<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NutriCampus</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
		<header>
			<h1 id="top">NutriCampus</h1>
			<!-- CAMPO DE LOGIN -->
			<div class="top-login">
				<div class="top-login-form">
				<div>
					<form action="/action_page.php">
						<input type="text" placeholder="Nome" name="username">
						<input type="text" placeholder="Senha" name="psw">
						<button type="submit" class="loginbtn">Login</button>
					</form>
					</div>
				</div>
			</div>
			<!-- /CAMPO DE LOGIN -->
		</header>
	
		<div id="box" class="box">
		<!-- Flexbox que divide a barra lateral do campo principal -->
			<aside>
			<!-- Barra lateral -->
				<nav>					
					<a href="index.html"><i class="fa fa-bars"></i></a><br>
					<a class="active"><i class="fa fa-edit"></i></a><br>
					<a href=#extra><i class="fa fa-dashboard"></i></a><br>
				</nav>
			</aside>
			
			<main>
			<!-- Campo principal -->
				<article>
					<section>
						<div class="cadastros-card">
						<!-- Área dos formulários -->
							<h3 class="tab-header">FORMULÁRIOS DE CADASTRO</h3>
							
								<!-- ABAS -->
								<div class="tab">
									<button class="tablinks" onclick="openTab(event, 'Menu')"><span class="tooltip"><i class="fa fa-list-alt"></i><span class="tooltiptext">Cardápios</span></span></button>
									<button class="tablinks" onclick="openTab(event, 'User')"><span class="tooltip"><i class="fa fa-address-book"></i><span class="tooltiptext">Usuários</span></span></button>
									<button class="tablinks" onclick="openTab(event, 'Stock')"><span class="tooltip"><i class="fa fa-cubes"></i><span class="tooltiptext">Estoque</span></span></button>
									<button class="tablinks" onclick="openTab(event, 'Meals')"><span class="tooltip"><i class="fa fa-cutlery"></i><span class="tooltiptext">Refeições</span></span></button>
									<button class="tablinks" onclick="openTab(event, 'Nutritional')"><span class="tooltip"><i class="fa fa-heartbeat"></i><span class="tooltiptext">Nutrições</span></span></button>
									<button class="tablinks" onclick="openTab(event, 'Restrictions')"><span class="tooltip"><i class="fa fa-ban"></i><span class="tooltiptext">Restrições Alimentares</span></span></button>
									<button class="tablinks" onclick="openTab(event, 'Groups')"><span class="tooltip"><i class="fa fa-group"></i><span class="tooltiptext">Grupos de Consumo</span></span></button>
									<button class="tablinks" onclick="openTab(event, 'Food-Groups')"><span class="tooltip"><i class="fa fa-pie-chart"></i><span class="tooltiptext">Grupos Alimentares</span></span></button>
								</div>
								<!-- /ABAS -->

								<!-- CONTEÚDO DAS ABAS -->

									<!-- ÁREA DE CARDÁPIOS -->
									<div id="Menu" class="tabcontent">								
									<span onclick="openTab('Menu')" class="topright">&times</span>
									
									<table class="tabcontent-table">
									<tr>
									<th class="tabcontent-th" colspan="6">CARDÁPIOS</th>
									</tr>
									
									<tr>
									<th class="tabcontent-th">DIA</th>
									<th class="tabcontent-th">MANHÃ</th>
									<th class="tabcontent-th">ALMOÇO</th>
									<th class="tabcontent-th">TARDE</th>
									<th class="tabcontent-th">JANTAR</th>
									</tr>
									
									<tr>
									<td class="tabcontent-td">03/06/2024</td>
									<td class="tabcontent-td">MANHÃ 03/06</td>
									<td class="tabcontent-td">ALMOÇO 03/06</td>
									<td class="tabcontent-td">TARDE 03/06</td>
									<td class="tabcontent-td">JANTAR 03/06</td>
									<td class="tabcontent-td edit">Editar</td>
									</tr>
									<tr>
									<td class="tabcontent-td">04/06/2024</td>
									<td class="tabcontent-td">MANHÃ 04/06</td>
									<td class="tabcontent-td">ALMOÇO 04/06</td>
									<td class="tabcontent-td">TARDE 04/06</td>
									<td class="tabcontent-td">JANTAR 04/06</td>
									<td class="tabcontent-td edit">Editar</td>
									</tr>
									<tr>
									<td class="tabcontent-td">05/06/2024</td>
									<td class="tabcontent-td">MANHÃ 05/06</td>
									<td class="tabcontent-td">ALMOÇO 05/06</td>
									<td class="tabcontent-td">TARDE 05/06</td>
									<td class="tabcontent-td">JANTAR 05/06</td>
									<td class="tabcontent-td edit">Editar</td>
									</tr>
									<tr>
									<td class="tabcontent-td">06/06/2024</td>
									<td class="tabcontent-td">MANHÃ 06/06</td>
									<td class="tabcontent-td">ALMOÇO 06/06</td>
									<td class="tabcontent-td">TARDE 06/06</td>
									<td class="tabcontent-td">JANTAR 06/06</td>
									<td class="tabcontent-td edit">Editar</td>
									</tr>
									<tr>
									<td class="tabcontent-td">07/06/2024</td>
									<td class="tabcontent-td">MANHÃ 07/06</td>
									<td class="tabcontent-td">ALMOÇO 07/06</td>
									<td class="tabcontent-td">TARDE 07/06</td>
									<td class="tabcontent-td">JANTAR 07/06</td>
									<td class="tabcontent-td edit">Editar</td>
									</tr>
									</table>
									<br>
									
										<button class="open-button" onclick="openForm('MenuForm')">Cadastrar Novo</button>
										<!-- Abre o formulário de cadastro -->
										<div class="form-popup" id="MenuForm">
										
										<!-- CADASTRO DE CARDÁPIOS -->
												<form class="cadastro-tab" action="/action_page.php">
												<!-- Formulário -->
													<div class="container">
													  <h1>CADASTRO DE CARDÁPIOS</h1>
													  <hr>
														<label for="data"><b>Dia</b></label>
														<input type="date" name="data" required>
														
														<fieldset>
														<!-- Linha que separa o campo de cada refeição -->
															<legend>MANHÃ:</legend>
															
															<div class="cadastro">
															<!-- Flexbox para dividir o formulário em colunas -->
																<div class="coluna-30">
																<!-- Coluna de 30% -->
																	  
																	<label for="prato-manha-0"><b>Prato Principal</b></label>
																	<select name="prato-manha-0" id="prato-manha-0">
																	<!-- Combobox para escolher o prato entre as opções cadastradas -->
																		<option value="0">Selecione um prato</option>
																		<option value="1">Cuscuz</option>
																		<option value="2">Biscoito</option>
																		<option value="3">Canjica</option>
																		<option value="4">Pão com Ovo</option>
																	</select>
																	
																</div>
																<div class="coluna-30">
																
																	<label for="prato-manha-1"><b>Acompanhamento</b></label>
																	<select name="prato-manha-1" id="prato-manha-1">
																		<option value="0">Selecione um acompanhamento</option>
																		<option value="1">Suco de maracujá</option>
																		<option value="2">Suco de abacaxi</option>
																		<option value="3">Suco de goiaba</option>
																		<option value="4">Vitamina de banana</option>
																	</select>
																
																</div>
																<div class="coluna-30">															
																
																	<label for="prato-manha-2"><b>Sobremesa</b></label>
																	<select name="prato-manha-2" id="prato-manha-2">
																		<option value="0">Selecione uma sobremesa</option>
																		<option value="1">Maçã</option>
																		<option value="2">Banana</option>
																		<option value="3">Tangerina</option>
																	</select>
																  
																</div>
															<!-- /Flexbox para dividir o formulário em colunas -->
															</div>
														</fieldset>
														
														<fieldset>
															<legend>ALMOÇO:</legend>
															
															<div class="cadastro">
																<div class="coluna-30">
																	  
																	<label for="prato-almoco-0"><b>Prato Principal</b></label>
																	<select name="prato-almoco-0" id="prato-almoco-0">
																		<option value="0">Selecione um prato</option>
																		<option value="1">Cuscuz</option>
																		<option value="2">Biscoito</option>
																		<option value="3">Canjica</option>
																		<option value="4">Pão com Ovo</option>
																	</select>
																	
																</div>
																<div class="coluna-30">
																
																	<label for="prato-almoco-1"><b>Acompanhamento</b></label>
																	<select name="prato-almoco-1" id="prato-almoco-1">
																		<option value="0">Selecione um acompanhamento</option>
																		<option value="1">Suco de maracujá</option>
																		<option value="2">Suco de abacaxi</option>
																		<option value="3">Suco de goiaba</option>
																		<option value="4">Vitamina de banana</option>
																	</select>
																
																</div>
																<div class="coluna-30">															
																
																	<label for="prato-almoco-2"><b>Sobremesa</b></label>
																	<select name="prato-almoco-2" id="prato-almoco-2">
																		<option value="0">Selecione uma sobremesa</option>
																		<option value="1">Maçã</option>
																		<option value="2">Banana</option>
																		<option value="3">Tangerina</option>
																	</select>
																  
																</div>
															</div>
														</fieldset>
														
														<fieldset>
															<legend>TARDE:</legend>
															
															<div class="cadastro">
																<div class="coluna-30">
																	  
																	<label for="prato-tarde-0"><b>Prato Principal</b></label>
																	<select name="prato-tarde-0" id="prato-tarde-0">
																		<option value="0">Selecione um prato</option>
																		<option value="1">Cuscuz</option>
																		<option value="2">Biscoito</option>
																		<option value="3">Canjica</option>
																		<option value="4">Pão com Ovo</option>
																	</select>
																	
																</div>
																<div class="coluna-30">
																
																	<label for="prato-tarde-1"><b>Acompanhamento</b></label>
																	<select name="prato-tarde-1" id="prato-tarde-1">
																		<option value="0">Selecione um acompanhamento</option>
																		<option value="1">Suco de maracujá</option>
																		<option value="2">Suco de abacaxi</option>
																		<option value="3">Suco de goiaba</option>
																		<option value="4">Vitamina de banana</option>
																	</select>
																
																</div>
																<div class="coluna-30">															
																
																	<label for="prato-tarde-2"><b>Sobremesa</b></label>
																	<select name="prato-tarde-2" id="prato-tarde-2">
																		<option value="0">Selecione uma sobremesa</option>
																		<option value="1">Maçã</option>
																		<option value="2">Banana</option>
																		<option value="3">Tangerina</option>
																	</select>
																  
																</div>
															</div>
														</fieldset>
														
														<fieldset>
															<legend>JANTAR:</legend>
															
															<div class="cadastro">
																<div class="coluna-30">
																	  
																	<label for="prato-jantar-0"><b>Prato Principal</b></label>
																	<select name="prato-jantar-0" id="prato-jantar-0">
																		<option value="0">Selecione um prato</option>
																		<option value="1">Cuscuz</option>
																		<option value="2">Biscoito</option>
																		<option value="3">Canjica</option>
																		<option value="4">Pão com Ovo</option>
																	</select>
																	
																</div>
																<div class="coluna-30">
																
																	<label for="prato-jantar-1"><b>Acompanhamento</b></label>
																	<select name="prato-jantar-1" id="prato-jantar-1">
																		<option value="0">Selecione um acompanhamento</option>
																		<option value="1">Suco de maracujá</option>
																		<option value="2">Suco de abacaxi</option>
																		<option value="3">Suco de goiaba</option>
																		<option value="4">Vitamina de banana</option>
																	</select>
																
																</div>
																<div class="coluna-30">															
																
																	<label for="prato-jantar-2"><b>Sobremesa</b></label>
																	<select name="prato-jantar-2" id="prato-jantar-2">
																		<option value="0">Selecione uma sobremesa</option>
																		<option value="1">Maçã</option>
																		<option value="2">Banana</option>
																		<option value="3">Tangerina</option>
																	</select>
																  
																</div>
															</div>
														</fieldset>

															<div class="clearfix">
															<!-- Botões do formulário. "Cancelar" fecha a aba -->
															<button type="button" onclick="closeForm('MenuForm')" class="cancelbtn">Cancelar</button>
															<button type="submit" class="signupbtn">Cadastrar</button>
															</div>
													</div>
												</form>
										<!-- /CADASTRO DE CARDÁPIOS -->
										</div>
									
										  
									</div>
									<!-- /ÁREA DE CARDÁPIOS -->
								
								<!-- ÁREA DE USUÁRIO -->
								<div id="User" class="tabcontent">
								<span onclick="openTab('User')" class="topright">&times</span>
								
									<?php
									include("lista-usuario.php");
									?>
									<br>
									
										<button class="open-button" onclick="openForm('UserForm')">Cadastrar Novo</button>
										<!-- Abre o formulário de cadastro -->
										<div class="form-popup" id="UserForm">
										
										<!-- CADASTRO DE USUÁRIO -->
										<form class="cadastro-tab" action="action_page.php" method="POST">
										<!-- Formulário -->
											<div class="container">
											  <h1>CADASTRO DE USUÁRIO</h1>
											  <hr>
												<div class="cadastro">
												<!-- Flexbox para dividir o formulário em duas colunas -->
													<div class="coluna-50">
													<!-- Coluna da esquerda -->
													  
														<label for="username"><b>Nome Completo</b></label>
														<input type="text" name="nome" required>
														  
														<label for="dob"><b>Data de Nascimento</b></label>
														<input type="text" name="data_nascimento" required>
														
														<label for="email"><b>Email</b></label>
														<input type="text" name="email" required>
														
														<label for="zip"><b>CEP</b></label>
														<input type="text" name="cep" required>

													<div class="cadastro">
													<div class="coluna-50">
														
														<label for="housenumber"><b>Número</b></label>
														<input type="text" name="numero" required>
														
													</div>
													
													<div class="coluna-50">
														
														<label for="adrcomp"><b>Complemento</b></label>
														<input type="text" name="complemento" required>
														
													</div>
													</div>
													
														<label for="psw"><b>Senha</b></label>
														<input type="password" name="senha" required>
													  
													</div>
													<div class="coluna-50">
													<!-- Coluna da direita -->
													
														<label for="cpf"><b>CPF</b></label>
														<input type="text" name="cpf" required>
														
														<label for="stuId"><b>Matrícula</b></label>
														<input type="text" name="matricula" required>
														
														<label for="phone"><b>Telefone</b></label>
														<input type="text" name="telefone" required>

														<label for="adr"><b>Endereço</b></label>
														<input type="text" name="endereco" required>
														
													<div class="cadastro">
													<div class="coluna-50">
														
														<label for="city"><b>Cidade</b></label>
														<input type="text" name="cidade" required>
														
													</div>
													
													<div class="coluna-50">
														
														<label for="state"><b>Estado</b></label>
														<input type="text" name="estado" required>
														
													</div>
													</div>
													
														<label for="psw-repeat"><b>Repetir Senha</b></label>
														<input type="password" name="repetir_senha" required>
													  
													</div>
												</div>

													<div class="clearfix">
													<!-- Botões do formulário. "Cancelar" fecha a aba -->
													<button type="button" onclick="closeForm('UserForm')" class="cancelbtn">Cancelar</button>
													<button type="submit" class="signupbtn">Cadastrar</button>
													</div>
											</div>
										</form>
										<!-- /CADASTRO DE USUÁRIOS -->
										</div>
									
									<!-- EXEMPLO DE FICHA DE USUÁRIO -->
									
									<div class="modal" id="user0">
										<div class="user-sheet">
											<table class="user-sheet-table">
											
												<tr>
													<th colspan="6" class="user-sheet-th table-group">INFORMAÇÕES BÁSICAS</th>
												</tr>
											
												<tr>
													<th class="user-sheet-th">NOME</th>
													<th class="user-sheet-th">CPF</th>
													<th class="user-sheet-th">DATA DE NASCIMENTO</th>
													<th class="user-sheet-th">TIPO</th>
													<th class="user-sheet-th">CURSO</th>
													<th class="user-sheet-th">MATRÍCULA</th>
												</tr>
												
												<tr>
													<td class="user-sheet-td">Alice Almeida</td>
													<td class="user-sheet-td">000.000.000-00</td>
													<td class="user-sheet-td">01/01/2001</td>
													<td class="user-sheet-td">Aluno</td>
													<td class="user-sheet-td">Computação Gráfica</td>
													<td class="user-sheet-td">1000011</td>
												</tr>
												
												<tr>
													<th colspan="4" class="user-sheet-th table-group">CONTATO</th>
													<th colspan="2" class="user-sheet-th table-group">NUTRICIONAL</th>
												</tr>
												
												<tr>
													<th class="user-sheet-th">E-MAIL</th>
													<th class="user-sheet-th">TELEFONE</th>
													<th class="user-sheet-th">ENDEREÇO</th>
													<th class="user-sheet-th"></th>
													<th class="user-sheet-th">GRUPO</th>
													<th class="user-sheet-th">RESTRIÇÃO</th>
												</tr>
												<tr>
													<td class="user-sheet-td">alicealmeida@bol.com.br</td>
													<td class="user-sheet-td">(61) 99887-7665</td>
													<td class="user-sheet-td">EQ 17/19, Lote A, Guará II</td>
													<td class="user-sheet-td"></td>
													<td class="user-sheet-td">Ensino Médio</td>
													<td class="user-sheet-td">Intolerância à Lactose</td>
												</tr>
												
											</table>
											<br>
											<div class="clearfix">
												<button type="submit" class="signupbtn">Editar</button>
												<button type="button" onclick="document.getElementById('user0').style.display='none'" class="cancelbtn">Fechar</button>
											</div>
										</div>
									</div>
									
									<!-- /EXEMPLO DE FICHA DE USUÁRIO -->
										  
									</div>
									<!-- /ÁREA DE USUÁRIOS -->
								
								<!-- ÁREA DE ESTOQUE -->
								<div id="Stock" class="tabcontent">
								<span onclick="openTab('Stock')" class="topright">&times</span>
								
									<table class="tabcontent-table">
										<tr>
											<th class="tabcontent-th" colspan="4">Estoque</th>
										</tr>
										
										<tr>
											<th class="tabcontent-th">Produto</th>
											<th class="tabcontent-th">Quantidade</th>
											<th class="tabcontent-th">Data de Validade</th>
										</tr>
										
										<tr>
											<td class="tabcontent-td">Cuscuz</td>
											<td class="tabcontent-td">500</td>
											<td class="tabcontent-td">30/02/2100</td>
											<td class="tabcontent-td edit">Editar</td>
										</tr>
										<tr>
											<td class="tabcontent-td">Biscoito</td>
											<td class="tabcontent-td">100</td>
											<td class="tabcontent-td">30/02/2100</td>
											<td class="tabcontent-td edit">Editar</td>
										</tr>
										<tr>
											<td class="tabcontent-td">Milho de Canjica</td>
											<td class="tabcontent-td">50</td>
											<td class="tabcontent-td">30/02/2100</td>
											<td class="tabcontent-td edit">Editar</td>
										</tr>
										<tr>
											<td class="tabcontent-td">Pão</td>
											<td class="tabcontent-td">100</td>
											<td class="tabcontent-td">30/02/2100</td>
											<td class="tabcontent-td edit">Editar</td>
										</tr>
										<tr>
											<td class="tabcontent-td">Maçã</td>
											<td class="tabcontent-td">10</td>
											<td class="tabcontent-td">30/02/2100</td>
											<td class="tabcontent-td edit">Editar</td>
										</tr>
									</table>
									<br>
									
										<button class="open-button" onclick="openForm('StockForm')">Cadastrar Novo</button>
										<!-- Abre o formulário de cadastro -->
										<div class="form-popup" id="StockForm">
										
										<!-- CADASTRO DE ESTOQUE -->
										<form class="cadastro-tab" action="/action_page.php">
										<!-- Formulário -->
											<div class="container">
											  <h1>CADASTRO DE ESTOQUE</h1>
											  <hr>
												<div class="cadastro">
												<!-- Flexbox para dividir o formulário em duas colunas -->
													<div class="coluna-30">
													  
														<label for="estoque-produto"><b>Produto</b></label>
														<select name="estoque-produto" id="estoque-produto">
															<option value="0">Selecione um produto</option>
															<option value="1">Cuscuz</option>
															<option value="2">Biscoito</option>
															<option value="3">Milho de Canjica</option>
															<option value="4">Pão</option>
														</select>
													  
													</div>
													<div class="coluna-30">
													
														<label for="estoque-qntd"><b>Quantidade</b></label>
														<input type="text" name="estoque-qntd" required>
													  
													</div>
													<div class="coluna-30">
													
														<label for="estoque-vld"><b>Data de Validade</b></label>
														<input type="date" name="estoque-vld" required>
													  
													</div>
												</div>

													<div class="clearfix">
													<!-- Botões do formulário. "Cancelar" fecha a aba -->
													<button type="button" onclick="closeForm('StockForm')" class="cancelbtn">Cancelar</button>
													<button type="submit" class="signupbtn">Cadastrar</button>
													</div>
											</div>
										</form>
										<!-- /CADASTRO DE ESTOQUE -->
										</div>
									
										  
									</div>
									<!-- /ÁREA DE ESTOQUE -->
								
								<!-- CADASTRO DE REFEIÇÕES -->
								<div id="Meals" class="tabcontent">
									<span onclick="openTab('Meals')" class="topright">&times</span>
									<div>
										<form class="cadastro-tab" action="/action_page.php">
											<div class="container">
											  <h1>CADASTRO DE REFEIÇÕES</h1>
											  <hr>
												<div class="cadastro">
													<div class="coluna-50">
													  
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														  
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="password" name="LOREM" required>
													  
													</div>
													<div class="coluna-50">  
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>

														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="password" name="LOREM" required>
													  
													</div>
												</div>

													<div class="clearfix">
													<button type="button" onclick="openTab('Cadastro')" class="cancelbtn">Cancelar</button>
													<button type="submit" class="signupbtn">Cadastrar</button>
													</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /CADASTRO DE REFEIÇÕES -->
								
								<!-- CADASTRO DE NUTRIÇÕES -->
								<div id="Nutritional" class="tabcontent">
									<span onclick="openTab('Nutritional')" class="topright">&times</span>
									<div>
										<form class="cadastro-tab" action="/action_page.php">
											<div class="container">
											  <h1>CADASTRO DE NECESSIDADES NUTRICIONAIS</h1>
											  <hr>
												<div class="cadastro">
													<div class="coluna-50">
													  
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														  
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="password" name="LOREM" required>
													  
													</div>
													<div class="coluna-50">  
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>

														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="password" name="LOREM" required>
													  
													</div>
												</div>

													<div class="clearfix">
													<button type="button" onclick="openTab('Cadastro')" class="cancelbtn">Cancelar</button>
													<button type="submit" class="signupbtn">Cadastrar</button>
													</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /CADASTRO DE NUTRIÇÕES -->
								
								<!-- CADASTRO DE RESTRIÇÕES -->
								<div id="Restrictions" class="tabcontent">
									<span onclick="openTab('Restrictions')" class="topright">&times</span>
									<div>
										<form class="cadastro-tab" action="/action_page.php">
											<div class="container">
											  <h1>CADASTRO DE RESTRIÇÕES ALIMENTARES</h1>
											  <hr>
												<div class="cadastro">
													<div class="coluna-50">
													  
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														  
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="password" name="LOREM" required>
													  
													</div>
													<div class="coluna-50">  
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>

														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="password" name="LOREM" required>
													  
													</div>
												</div>

													<div class="clearfix">
													<button type="button" onclick="openTab('Cadastro')" class="cancelbtn">Cancelar</button>
													<button type="submit" class="signupbtn">Cadastrar</button>
													</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /CADASTRO DE NUTRIÇÕES -->
								
								<!-- CADASTRO DE GRUPOS DE CONSUMO -->
								<div id="Groups" class="tabcontent">
									<span onclick="openTab('Groups')" class="topright">&times</span>
									<div>
										<form class="cadastro-tab" action="/action_page.php">
											<div class="container">
											  <h1>CADASTRO DE GRUPOS DE CONSUMO</h1>
											  <hr>
												<div class="cadastro">
													<div class="coluna-50">
													  
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														  
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="password" name="LOREM" required>
													  
													</div>
													<div class="coluna-50">  
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>

														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="password" name="LOREM" required>
													  
													</div>
												</div>

													<div class="clearfix">
													<button type="button" onclick="openTab('Cadastro')" class="cancelbtn">Cancelar</button>
													<button type="submit" class="signupbtn">Cadastrar</button>
													</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /CADASTRO DE GRUPOS DE CONSUMO -->
								
								<!-- CADASTRO DE GRUPOS ALIMENTARES -->
								<div id="Food-Groups" class="tabcontent">
									<span onclick="openTab('Food-Groups')" class="topright">&times</span>
									<div>
										<form class="cadastro-tab" action="/action_page.php">
											<div class="container">
											  <h1>CADASTRO DE GRUPOS ALIMENTARES</h1>
											  <hr>
												<div class="cadastro">
													<div class="coluna-50">
													  
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														  
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="password" name="LOREM" required>
													  
													</div>
													<div class="coluna-50">  
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
														
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>

														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="text" name="LOREM" required>
													
														<label for="LOREM"><b>LOREM IPSUM</b></label>
														<input type="password" name="LOREM" required>
													  
													</div>
												</div>

													<div class="clearfix">
													<button type="button" onclick="openTab('Cadastro')" class="cancelbtn">Cancelar</button>
													<button type="submit" class="signupbtn">Cadastrar</button>
													</div>
											</div>
										</form>
									</div>
								</div>
								<!-- /CADASTRO DE GRUPOS DE CONSUMO -->
								
								<!-- /CONTEÚDO DAS ABAS -->
								
							</div> 
					</section>
				</article>
			</main>
		</div>
		<script src="script.js"></script>
    </body>
</html>