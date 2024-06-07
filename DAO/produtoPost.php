<?php 
   
   function incluir_produto($conexao, $u){

        $sql = "INSERT INTO tbl_produtos (titulo, descricao, preco, imagem, tipo) VALUES ('$u->titulo', '$u->descricao','$u->preco', '$u->imagem', '$u->tipo');";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };

?>