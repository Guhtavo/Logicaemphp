<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Declarando uma nova classe
    class Carro {
        public $marca;
        public $modelo;
        public $ano;

        //Metodo (Funçoes dentro da classe)
        public function exibirDetalhes(){
            echo "Marcas: " . $this -> marca . "<br>";
echo "Modelo: " . $this-> modelo . "<br>";
echo "Ano:" . $this-> ano . "<br>";

        }
    }
    //Objetos (instacias)
    $meuCarro = new Carro();
    $meuCarro->marca = "Toyota";
    $meuCarro->modelo = "Corola";
    $meuCarro->ano = 2023;

    //Chamar a função para exibir os detalhes do carro
    $meuCarro->exibirDetalhes();

    //Instanciando novo carro
$meuNovoCarro = new Carro();
$meuNovoCarro ->marca ="BMW";
$meuNovoCarro ->modelo ="320i";
$meuNovoCarro ->ano = 2025;

//Exibindo a função para o novo objeto
$meuNovoCarro->exibirDetalhes();

class Pessoa{
    //Atributos (propriedades)
    public $nome;
    public $idade;

    //Metodos
    public function saudacao(){
        echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade .  " anos. <br>";

    }
}

//instanciado uma nova pessoa
$joao = new Pessoa();
$joao ->nome = "João";
$joao-> idade = 30;

//Exibir a saudação com os dados do João
$joao->saudacao();
    ?>
</body>
</html>