<?php 
   $conexao = conectar();
   function editar_produto_parcialmente($conexao, $campo, $novoValor, $id){
        switch($campo){
           case 'titulo':
               $valor = "'$novoValor'";
            break;
           case 'descricao':
               $valor = "'$novoValor'";
            break;
            case 'preco':
               $valor = "'$novoValor'";
            break;
            case 'imagem':
               $valor = "'$novoValor'";
            break;
            default:
                die("Campo não encontrado");
        }
        $sql = "UPDATE tbl_produtos SET $campo = $valor WHERE id = $id";
        $res = mysqli_query($conexao, $sql) or die("Erro ao tentar incluir");
        fecharConexao($conexao);
        return $res;
   };
   if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
      $input = file_get_contents('php://input');
      $dados = json_decode($input, true);
  
      $id = $dados['id'];
      $campo = $dados['campo'];
      $novoValor = $dados['novoValor'];
  
      $resp = editar_produto_parcialmente($conexao, $campo, $novoValor, $id);
  
      return $resp;
   }
?>