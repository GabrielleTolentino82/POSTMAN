<?php 
         function criarResposta($status, $msg){
            $resp = new Resposta($status, $msg);
     
            return $resp;
         }
    
         function receberDados(){
            $dados = json_decode(file_get_contents('php://input'));
            $titulo = $dados->titulo;
            $descricao = $dados->descricao;
            $preco = $dados->preco;
            $imagem = $dados->imagem;
            $tipo = $dados->tipo;
    
            $user = new Produto("", $titulo, $descricao, $preco, $imagem, $tipo);
            return $user;
        }
?>