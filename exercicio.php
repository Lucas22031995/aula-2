<?php
/* criar variaveis */
$nome = "celular";
$valor = 2000;
$quantidade = 50;
$totalvendido = $valor * $quantidade;
echo "<br>  O {$nome} tem o valor total de : {$totalvendido}";
echo "<hr>";
$prod = "Computador";

$valor = 1500;

$qtd = 5;

$totVen = $valor * $qtd;



echo "O {$prod} tem o valor total de: {$totVen}";




echo "<hr>";
$prod="mouse";

$valor = 12.67;

$qtd = 10;

$totVen = $valor * $qtd;

echo "<br>O {$prod} tem o valor total de: {$totVen}";

echo "hr";

$tempo = 20;
if ($tempo<5) {
echo "<h2>viagem curta</h2>"; 
} else

             {if ($tempo<=60)
echo "<h1> viagem media</h1>";
}

echo "<hr>";
$idade = 21;

if ($idade>=21){

    echo "<h3>paga inteira</h3>";

} else {

    echo "paga meia entrada";

}