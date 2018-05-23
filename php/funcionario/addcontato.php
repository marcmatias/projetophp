<form class="card" id="add-contato" name="add_frm" action="php/funcionario/adicionar-contato.php"
method="post" enctype="multipart/form-data"	>
	<div class="form-group card-body">
		<fieldset>
			<legend>Adicionar Contato</legend>
			<div class="form-group">
				<label for="nome">Nome: </label>
				<input type="text" id="nome" class="config form-control" name="nome_txt" placeholder="Insira o nome" title="Nome" required />
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input type="email" id="email" class="config form-control" name="email_txt" placeholder="Insira o e-mail" title="E-mail" required />
			</div>
			<div class="form-group">
				<label for="m">Sexo: </label>
				<input type="radio" id="m" name="sexo_rdo" title="Sexo" value="M" required />&nbsp;<label for="m">Masculino</label>
				&nbsp;&nbsp;&nbsp;
				<input type="radio" id="f" name="sexo_rdo" title="Sexo" value="F" required />&nbsp;<label for="f">Feminino</label>

			</div>
			<div class="form-group">
				<label for="nascimento">Data de Nascimento: </label>
				<input type="text" id="nascimento" class="config form-control" name="nascimento_txt" placeholder="Insira a data de nascimento" title="Data" required />
			</div>
			<!-- <div>
				<label for="telefone">Telefone: </label>
				<input type="text" id="telefone" class="config form-control" name="telefone_txt" placeholder="Insira o telefone" title="Telefone" required />
			</div> -->
			<div>
				<label for="cep">CEP: </label>
				<input type="text" id="cep" class="config form-control" name="cep_txt" placeholder="Insira o cep" title="cep" required />
			</div>
			<div class="form-group">
				<label for="rua">Rua: </label>
				<input type="text" id="rua" class="config form-control" name="rua_txt" placeholder="Insira o nome da rua" title="Rua" required />
			</div>
			<div class="form-row">
				<div class="col">
					<label for="numero">Número: </label>
					<input type="text" id="numero" class="config form-control" name="numero_txt" placeholder="Insira o número da casa" title="Número" required />
				</div>
				<div class="col">
					<label for="rua">Complemento: </label>
					<input type="text" id="complemento" class="config form-control" name="complemento_txt" placeholder="Insira complemento" title="Complemento" required />
				</div>
			</div>
			<div class="form-group">
				<label for="bairro">Bairro: </label>
				<input type="text" id="bairro" class="config form-control" name="bairro_txt" placeholder="Insira o bairro" title="Bairro" required />
			</div>
			<div class="form-group">
				<label for="cidade">Cidade: </label>
				<input type="text" id="cidade" class="config form-control" name="cidade_txt" placeholder="Insira a cidade" title="Cidade" required />
			</div>
			<div class="form-group">
				<label for="estado">Estado: </label>
				<input type="text" id="estado" class="config form-control" name="estado_txt" placeholder="Insira o estado(sigla)" title="Estado" required />
			</div>
			<div class="form-group float-right">
				<input type="submit" id="enviar-add" class="cambio btn btn-primary" name="enviar_btn" value="Adicionar" />
			</div>
		</fieldset>
	</div>
</form>
