<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro PHP</title>
</head>
<body>
    <h2>
        <?php
        echo "Meu primeiro PHP\u{1F4BB}";
        
        
        // Váriavel 
        $nome = "Gustavo";
        $sobrenome = "Antonio";

// A váriavel pode ser mudada
$nome = "Gustavo";      
   echo "<br> <br>";
   
   echo "Seja bem-vindo, $nome $sobrenome";
   
   echo"<br> <br>";
       const time = "São Paulo";
        echo "Meu time de futebol é " . time;
       echo "<br> <br>";
     echo "Seja bem-vindos, $nome $sobrenome Seu time é" . time;
   echo "<br> <br>";
    // Tipos de dados
       $sobrenome2 = "Tavares";
       $idade = 24; //int
       $peso = 75.5;//float
       $casado = false;//boolean
   echo "$sobrenome $idade $peso";
      echo "<br> <br>";

   //metodo1: Usando var_dump para exibir o valor do booleano
   var_dump($casado);
      echo "<br> <br>";


   //metodo 2 Usado uma conversão para string 
   echo ($casado ? "Casado" : "Não é casado");
         echo "<br> <br>";
    var_dump($sobrenome);  //  Utilizado para saber sobre erros
    echo "<br>";
    var_dump($idade);
        echo "<br>";
var_dump($peso);

     $frase = "Meu time de futebol é " . time;
     $frase2 = " Meu nome é $nome Meu sobre nome é $sobrenome";
   echo($frase);
  echo"<br>";
echo ($frase2);
        ?>;

    </h2>
       <p>Meu primeiro páragrafo</p> 
    
</body>
</html>