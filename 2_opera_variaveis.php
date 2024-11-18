<!-- USANDO A FUNÇÃO GET -->
<!-- GET: método HTML padrão, a requisição é enviada como uma string anexada a URL -->

<!-- Esse programa recebe dois valores pela URL usando o método GET -->

<?php

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    // Verifica se os valores foram passados corretamenta

    if(isset($numero1) && ($numero2)){

        //  converter para inteiros
        $numero1 = (int)$numero1;
        $numero2 = (int)$numero2;

        // SOMAR
        $soma = $numero1 + $numero2;

        // SUBTRAIR
        $subtracao = $numero1 - $numero2;

        // MULTIPLICAR
        $multiplicacao = $numero1 * $numero2;

        // DIVIDIR
        $divisao = $numero1 / $numero2;

        // Exibir resultados
        echo "A soma é: $soma <br>";
        echo "A subtração é: $subtracao <br>";
        echo "A multiplicação é: $multiplicacao <br>";
        echo "A divisão é: $divisao <br>";

    } else{
        echo "ATENÇÃO! Por favor, forneça os valores de numero1 e numero2 pela URL.";
    }

?>