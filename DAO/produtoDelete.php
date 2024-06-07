<?php 
   

   function deletar_produtos($conexao, $id){

        $sql = "DELETE FROM tbl_produtos WHERE id = $id;";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar deletar");


        fecharConexao($conexao);
        return $res;
   };

   
   
?>