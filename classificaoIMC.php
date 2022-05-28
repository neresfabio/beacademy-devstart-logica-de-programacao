<h1>Classificação IMC</h1>
<form action="" method="post">

    <input name="imc" type="number" placeholder="Informe seu peso">
    <br/>
    <button>Enviar</button>

</form>

<?php

$IMC = $_POST['imc'];

if($_POST){

    if($IMC < 19){
        echo "Abaixo do peso.";
    }elseif(19 <= $IMC && $IMC < 25){
        echo "Peso normal.";
    }elseif(25 <= $IMC && $IMC < 30){
        echo "Sobrepeso";
    }elseif(30 <= $IMC && $IMC < 40){
        echo "Obesidade Tipo I";
    }else{
        echo "Obesidade Mórbida";
    }
    
}