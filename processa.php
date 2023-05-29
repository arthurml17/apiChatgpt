<?php
include 'api/conexaoApi.php';

class Processa{
    public function onCapturarOutput($input){
        $conn = new ConexaoApi(); 
        $conn->conectar($input);
        $resposta = $conn->getResposta();
        return $resposta;
    }
}

