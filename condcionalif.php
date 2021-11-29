<?php
$idade = 21;

if ($idade>=21){

    echo "paga inteira";

} else {

    echo "paga meia entrada";

}

echo "<hr>";

# se o sal <5000 inss -- 9%¨

# senao inss - 11%

$func = "Ignez";

$sal = 8800;

if ($sal<5000) {

    echo "inss 9% <br>";
    echo "vale transporte 6% <br>";

    $inss = $sal * (9/100);
    $vale = $sal * (6/100);

    $salLiq = $sal-$inss -$vale;

    echo "O valor de inss é de: {$inss}<br>";

    echo "Salárioo Líquido: {$salLiq}";
       


      

} else {

    echo "inss 11%<br>";

    $inss = $sal * (11/100);

    $salLiq = $sal-$inss;

    echo "O valor de inss é de: {$inss}<br>";

    echo "Salárioo Líquido: {$salLiq}";

}

$ingresso  = 60;

$idade = 21;



if ($idade<>21)

{

    if($senha==123)

    {

        echo "<h2>Conectado ao Sistema</h2>";

    } else

       {

          echo "<h2> Senhas Errados</h2>";

          echo "<h3>Não Conectou</h3>";

       } 

} else {

    echo "login errado<br>";

    echo "Não Conectou";

}
echo "<br";
