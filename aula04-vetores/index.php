<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//criação de vetores/array indexado
$array = [10, 20, 30, 40];
 
//exibindo o array
echo "Array original: ";
print_r($array); //print_r() exibi o array de forma legivel
echo "<br>";
//Adicionando um valor final ao array
$array []= 50;
//Exibindo o valor atualizado do array
echo "array após adicionar 50:";
print_r($array);
echo "<br>";
//Alterando o valor na posição 1 para a posição 25
$array [1] = 25;

//Exibindo o array após a alteração
echo "Array após alterar o valor na posição 1 para 25: ";
print_r($array);
echo"<br>";

//Removendo o valor na posição 2
unset($array[2]);

//reorganizando
$array = array_values($array);

//Exibindo o array após remover o valor 
echo "Array após remover o valor na posição 2:";
print_r($array);
echo "<br>";
//adicionando varios valores
array_push($array, 60, 3, 22);
print_r($array);

echo "<br>";
//Ordenando o vetor 
sort($array);

//Exibindo o valor ordenado
echo "Array após ardenar os valores: ";
print_r($array);

echo"<br>";
//Criando um array associativo
   $associativo = [
    "nome" => "Gustavo",
    "idade" => 24,
    "cidade" => "São Paulo"
   ];


   //Exibindo o array associativo
   echo "Array associativo: ";
   print_r($associativo);

echo "<br>";
//Criando um array multi dimensional (matrizes)
$multidimensional = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
//Exibindo o valor na posição [1] [2] (4, 5, 6) -> 6
echo "Valor na posição [1] [2] " . $multidimensional [1][2];

//Função array_merge()
echo"<br>";

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

// Mesclano dois arrays
$novo_array = array_merge($array1, $array2);

//Exibindo o array resultante
echo "Array mesclado: ";
print_r($novo_array);

//Função array_seach()
echo"<br>";
$numeros = [2, 4, 6, 30, 8];

//Procurando o valor 30 no array
$indice = array_search(30, $numeros);

//Exibindo o indice onde o valor foi encontrado
echo "O indice do valor 30 é:" . $indice;
echo "<br>";
print_r($numeros);

echo "<br>";
//Função in_array()
//Verificando se o valor 25 está no array
$existe = in_array(25, $numeros);
if($existe){
    echo "O valor 25 está no array.";
} else {
    echo "O valor 25 não esta no array.";
}
print_r($existe);

    ?>
    
</body>
</html>