<?php 
   function pegar_produto($conexao){

    //Pegando os dados ID e título
    $dados_produto = json_decode(file_get_contents('php://input'));
    $id_inserido = $dados_produto-> id;
    $titulo_inserido = $dados_produto-> titulo;
    


    $sql = "SELECT * FROM tbl_produtos WHERE id = '$id_inserido' and titulo = '$titulo_inserido'";
    $res = mysqli_query($conexao, $sql) or die("Erro ao tentar consultar");

    $produtos = [];

    while ($registro = mysqli_fetch_array($res)) {
        $id = utf8_encode( $registro['id']);
        $titulo = utf8_encode($registro['titulo']);
        $descricao = utf8_encode(  $registro['descricao']);
        $preco = utf8_encode( $registro['preco']);
        $imagem = utf8_encode( $registro['imagem']);
        $tipo = utf8_encode( $registro['tipo']);
        
        $novo_produto = new Produto($id, $titulo, $descricao, $preco, $imagem, $tipo);
        array_push($produtos ,$novo_produto);
    };
    
    fecharConexao($conexao);
    return $produtos;
   };

   
?>