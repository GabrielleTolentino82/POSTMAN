<?php 
   
   function editar_produto($conexao, $u, $id){

        $sql = "UPDATE tbl_produtos SET titulo = '$u->titulo', descricao = '$u->descricao', preco = '$u->preco', imagem = '$u->imagem', tipo='$u->tipo' WHERE id = $id;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>