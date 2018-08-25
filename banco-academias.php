
<?php

function listaAcademias($conexao){

		$lista = array();
		$resultado = mysqli_query($conexao, "select a.*, c.nome as categoria_nome from academias as a join categorias c on c.id = a.categoria_id");

		while($academia = mysqli_fetch_assoc($resultado)) {
		
			array_push($lista, $academia); 

		
		}

		return $lista;


}



function inseriAcademia($conexao, $nome, $telefone, $email, $cnpj, $descricao, $categoria_id, $validacao){

	

	 $query = "insert into academias (nome, telefone, email, cnpj, descricao, categoria_id, validacao) values ('{$nome}', '{$telefone}', '{$email}', '{$cnpj}', '{$descricao}', '{$categoria_id}', '{$validacao}')";

	 	//	echo $query;

	 return mysqli_query($conexao, $query);
}



function buscaAcademia($conexao, $id){

	$query = "select * from academias where id={$id}";

	$resultado = mysqli_query($conexao, $query);

	return mysqli_fetch_assoc($resultado);


}




function removeAcademia($conexao, $id){

	$query = "delete from academias where id= {$id}";
	return mysqli_query($conexao, $query);
}



function alteraAcademia($conexao, $id, $nome, $telefone, $email, $cnpj, $descricao, $categoria_id, $validacao){

	

	 $query = "update academias set nome ='{$nome}', telefone = '{$telefone}', email ='{$email}', cnpj ='{$cnpj}', descricao = '{$descricao}', categoria_id = '{$categoria_id}', validacao = '{$validacao}' where id={$id}";

	 	echo $query;

	 return mysqli_query($conexao, $query);
}