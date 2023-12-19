<?php

    echo "Veja o código";
    // Simução de um sistema para calculo de aposentadoria

    // Criando uma classe de excessao de regra
    class FaixaEtariaExcessao extends Exception{
        public function __construct($message, $code = 0, $previous = null){
            echo "Erro personalizado: $message<br>";
            parent::__construct($message, $code, $previous);
        } 
    }

    $idade = 10;

    function calcularTempoAposentadoria($idade){
        if($idade <= 18){
            throw new FaixaEtariaExcessao(
                'Ainda falta muito para aposentar');
        } if($idade >= 70){
            throw new FaixaEtariaExcessao(
                'Ja deveria ter se aposentado');
        }
    }

  
?>