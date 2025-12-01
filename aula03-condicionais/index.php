<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //condicionais if
    if(1 < 2){
        echo "O número 1 é menor <br>";
    }
    $idade = 18;

    if($idade >= 18) {
        echo "Voçê é maior de idade.";

    }
    echo"<br>";
// condicional else 
$a = 10;
$b = 14;

if($a == $b){
    echo "As variaveis são iguais.";
}else {
    echo "As variaveis são diferentes.";
}
echo "<br>";
 // condicional elseif
 $idadepessoa = 25;
 if($idadepessoa < 13){
    echo "Você é uma criança.";
} else if ($idadepessoa >= 20 && $idadepessoa <= 19) { 
    echo "Você é adolecente.";
} else if ($idadepessoa >= 20 && $idadepessoa <= 59){
    echo "Você é um adulto.";
}else{
    echo "Você é idoso.";
}
echo "<br>";
 
//condicional switch
$numero = 3;

switch(true) {
    case($numero < 5):
    echo "O número é menor que 5.";
    break;
    case($numero == 5):
    echo "O número é igual a 5.";
    break;
    case ( $numero > 5):
    echo "O numero é maior que 5";
    break;
    default:
    echo " Número não indentificado!";
    break;
    
}
echo "<br>";
    $animal ="gato";
    $animal ="Gato";
switch ($animal){
    case "cachorro":
        echo " È um cachorro";

        break;

        case "peixe":
            echo " É um peixe";

        break;

        default:
        // Só execulta se nenhum case anterior bateu
        echo "Animal não encontrado!";
        break;

}
echo "<br>"







    ?>
</body>
</html>