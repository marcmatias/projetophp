<div class="form-g	roup card-body">
	<input type="hidden" id="id" class="config form-control" name="id_txt" title="ID"
	value="<?php echo $registro_contato["idcontato"]; ?>" required />
	<div class="form-group">
		<label for="nome">Nome: </label>
		<input type="text" id="nome" class="config form-control" name="nome_txt"
		placeholder="Insira o nome" title="Nome"
		value="<?php echo $registro_contato["nome"]; ?>" required />
	</div>
	<div class="form-group">
		<label for="email">Email: </label>
		<input type="email" id="email" class="config form-control" name="email_txt"
		placeholder="Insira o e-mail" title="E-mail"
		value="<?php echo $registro_contato["email"]; ?>" />
	</div>
	<div class="form-group">
		<label for="m">Sexo: </label>
		<input type="radio" id="m" name="sexo_rdo" title="Sexo" value="M"
		<?php if ($registro_contato["sexo"]=="M") {
			echo "checked";
		} ?>
		required />&nbsp;<label for="m">Masculino</label>
		&nbsp;&nbsp;&nbsp;
		<input type="radio" id="f" name="sexo_rdo" title="Sexo" value="F"
		<?php if ($registro_contato["sexo"]=="F") {
			echo "checked";
		} ?>
		required />&nbsp;<label for="f">Feminino</label>
	</div>
	<div class="form-group">
		<label for="nascimento">Data de Nascimento: </label>
		<input type="date" id="nascimento" class="config form-control" name="nascimento_txt"
		placeholder="Insira a data de nascimento" title="Data"
		value="<?php echo $registro_contato["nascimento"]; ?>"
		required />
	</div>
	<?php $registro_telefone = $executar_consulta_telefone->fetch_assoc() ?>
 	<input type="hidden" id="idtelefone0" class="config form-control" name="idtelefone0_txt" title="idtelefone" value="<?php echo $registro_telefone["idtelefone"]; ?>" required />
	<div class="form-group">
		<label for="telefone0">Contato tel/cel: </label>
		<input minlength="10" maxlength="11"type="text" value="<?php echo $registro_telefone["telefone"]; ?>" id="telefone0" class="config form-control sonumero" name="telefone0_txt" placeholder="Insira o telefone" title="Telefone" />
	</div>
	<?php $registro_telefone = $executar_consulta_telefone->fetch_assoc() ?>
	<input type="hidden" id="idtelefone1" class="config form-control" name="idtelefone1_txt" title="idtelefone" value="<?php echo $registro_telefone["idtelefone"]; ?>" required />
	<div class="form-group">
		<label for="telefone1">Contato tel/cel 2: </label>
		<input minlength="10" maxlength="11"type="text" value="<?php echo $registro_telefone["telefone"]; ?>" id="telefone1" class="config form-control sonumero" name="telefone1_txt" placeholder="Insira o contato 2" title="Telefone" />
	</div>
	<?php $registro_telefone = $executar_consulta_telefone->fetch_assoc() ?>
	<input type="hidden" id="idtelefone2" class="config form-control" name="idtelefone2_txt" title="idtelefone" value="<?php echo $registro_telefone["idtelefone"]; ?>" required />
	<div class="form-group">
		<label for="telefone2">Contato tel/cel 3: </label>
		<input minlength="10" maxlength="11" type="text" value="<?php echo $registro_telefone["telefone"]; ?>" id="telefone2" class="config form-control sonumero" name="telefone2_txt" placeholder="Insira o contato 3" title="Telefone" />
	</div>
	<div class="form-group">
		<label for="cep">CEP: </label>
		<input type="text" id="cep" class="config form-control sonumero" name="cep_txt"
		placeholder="Insira o cep" title="cep"
		value="<?php echo $registro_contato["cep"]; ?>" required />
	</div>
	<div class="form-group">
		<label for="rua">Rua: </label>
		<input type="text" id="rua" class="config form-control" name="rua_txt"
		placeholder="Insira o nome da rua" title="Rua"
		value="<?php echo $registro_contato["logradouro"]; ?>" required />
	</div>
	<div class="form-group">
		<label for="numero">Número: </label>
		<input type="text" id="numero" class="config form-control sonumero" name="numero_txt"
		placeholder="Insira o número da casa" title="Número"
		value="<?php echo $registro_contato["numero"]; ?>"	required />
	</div>
	<div class="form-group">
		<label for="complemento">Complemento: </label>
		<input type="text" id="complemento" class="config form-control" name="complemento_txt"
		placeholder="Insira o complemento" title="Complemento"
		value="<?php echo $registro_contato["complemento"]; ?>" />
	</div>
	<div class="form-group">
		<label for="bairro">Bairro: </label>
		<input type="text" id="bairro" class="config form-control" name="bairro_txt"
		placeholder="Insira o bairro" title="Bairro"
		value="<?php echo $registro_contato["bairro"]; ?>" required />
	</div>
	<div class="form-group">
		<label for="cidade">Cidade: </label>
		<input type="text" id="cidade" class="config form-control" name="cidade_txt"
		placeholder="Insira a cidade" title="Cidade"
		value="<?php echo $registro_contato["cidade"]; ?>" required />
	</div>
	<div class="form-group">
		<label for="estado">Estado: </label>
		<input type="text" id="estado" class="config form-control" name="estado_txt"
		placeholder="Insira o estado(sigla)" title="Estado"
		value="<?php echo $registro_contato["estado"]; ?>" required />
	</div>
	<div class="form-group float-right">
		<input type="submit" id="enviar-add" class="config form-control btn btn-primary" name="enviar_btn" value="Atualizar" />
	</div>
</div>
