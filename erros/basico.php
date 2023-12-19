<?php

    echo "Veja o código";
   
   // Funciona +ou- como um if else
   try{
    echo "";
   } catch(error $e){ // este $e é de excessao
    echo "";
   }

   // Outras formas de fazer usando tipos de erros do manual php
   // https://www.php.net/manual/pt_BR/class.exception.php#122324

   try{
    echo "";
   } catch(DivisionByZeroError $e){ // este $e é de excessao
    echo "Erro: Esta dividindo por zero";
   } catch(Throwable $e){ // este $e é de excessao
    echo " Erro econtrado:" . $e->getMessage();
   }

  
?>