<?php 

    class Produto{
        public $id;
        public $titulo;
        public $descricao;
        public $preco;
        public $imagem;
        public $tipo;

        function __construct($id_informado, $titulo_informado, $descricao_informado, $preco_informado, $imagem_informada, $tipo_informado){
            $this->id = $id_informado;
            $this->titulo = $titulo_informado;
            $this->descricao = $descricao_informado;
            $this->preco = $preco_informado;
            $this->imagem = $imagem_informada;
            $this->tipo = $tipo_informado;
        }

        
    }
?>
