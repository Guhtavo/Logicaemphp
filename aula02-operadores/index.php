<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1> Operadores</h1>
    <?php
    //operadores aritimeticos
    $a = 5;
    $b = 3;
    $soma = $a + $b;
    $subtracao = 4 - 2;
    $multiplicacao = 4 * 3;
    $potenciacao = 2 ** 2;
    $divisao = $a / $b;
    $restodivisao = $a % $b;
    echo "Resultado da soma é $soma <br>";
    echo "Resultado da subtração é $subtracao <br>";
    echo "Resultado da multiplicação é $multiplicacao <br>";
    echo "Resultado da potenciação é $potenciacao <br>";
    echo "Resultado da divisão é $divisao <br>";
    echo "Resultado do resto da divisão de $a e $b é $restodivisao <br>";
         
       //Operadores de atribuição
    $rua = "Rua Amador Boeno";
    $rua .= " na cidade de São Paulo"; 
      
      $preco = 2.45;
      $preco += 2.30;
      $preco -= 1.30; 
      // Formatar o numero para usar virgula  como  separador decimal
      $preco_formatado = number_format($preco, 2, ',', '.');

      // Exibir o resultado
    echo "$rua, <br> preco R$ $preco_formatado <br>";
    //operadores de comparação

    $c = 10;
    $d = "10";
     echo"<br> <h1> Comparação de igualdade </h1>";
      echo($c == $d) ? "São iguais." : "Não são iguais.";
       echo "<br>";
        echo($c===$d) ? "São estritamentes iguais." : " Não são estritamentes iguais.";

        echo"<br> <h1> Comparação de diferenças </h1>";
      echo($c != $d) ? "São diferentes." : " Não são diferentes.";
    echo"<br>";
   echo($c !== $d) ? "São estritamente diferentes." : "Não estritamente diferentes";

$teste = false;
echo"<br> <h1> Negação </h1>";
 echo(!$teste) ? " É verdadeiro." :"É  falso.";

$e = 5;
$f = 3;
   echo"<br>  <h1> Maior que e Menor que </h1>";
 echo($e > $f ) ? "E maior que F." : "É menor que F.";
echo"<br>";
 echo($e < $f) ? "E é menor que f." : "E não é menor que F.";

 $h = 4;
 $i = 4;
 $j = 2;
 echo"<br> <h1> Maior ou igual a, Menor ou igual a </h1>";
echo($h >= $i) ? "H é maior ou igual a I" : " H não é igual ou maior que I.";
echo"<br>";
echo($i<=$j) ? "I é menor ou igual a J" : " I não é menor ou igual a J.";

//Operadores lógicos
$idade = 20;
$tem_cnh = true;

echo($idade >= 18 and $tem_cnh) ? " você pode dirigir." : "VOCÊ não pode dirigir.";
echo "<br>";

$tem_ingresso = false;
$tem_convitevip = true;
echo($tem_ingresso or  $tem_convitevip) ? "você pode entrar na festa." : "Você Não pode entrar na festa.";
echo"<br>";

// && para anda e || para or
$sol = true;
$sem_chuva = false;
$feriado = true;

echo($sol && $sem_chuva || $feriado) ? "voce pode sair para passear." : " Voce não pode sair para passear.";


   ?>
</body>
</html>