<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While, Do While, for, foreach</title>
</head>
<body>
    <?php 
    // While
        echo "while <br>";
    $i = 1;
    while ($i <= 5){
        echo $i . "<br>"; // Imprime o valor de $i e pula para a proxima linha.
        $i++;
    }
  //while 
    echo"<br>";
    
    $j = 2;
    while ($j <= 10) {
        echo $j . "<br>";// imprimi os números pares
        $j += 2; // incrementa de 2 e 2, o mesmo que $J + $2 = 4
    }
    //Do while - faça enquanto
    echo "<br> Do while <br>";
    $m = 1;
    do{
        echo $m , "<br>";
        $m++;
    }
     while ($m <= 5 );

echo "<br> For<br>";
//for
for ($n = 1; $n <= 5; $n++ ){
    echo $n . "<br>";
}
for ( $p = 1; $p <= 5; $p++){
    echo " O quadrado de $p é " . ($p * $p) . "<br>";
}
echo "<br> Foreach<br><br>";
$frutas = [ "Maçã", "Banana", "Laranja", "Uva"];
foreach ($frutas as $fruta){
    echo $fruta . "<br>"; // Imprimi o nome de cada fruta
}
echo "<br>";
$idades = [
    "João" => 25,
    "Maria" => 30,
    "Pedro" => 22
];
foreach ($idades as $nome => $idade){
    echo "$nome tem $idade anos. <br>"; // Exibe nome e idade.
}

    ?>
    
</body>
</html>