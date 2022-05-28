<h1>Classificação de IDADE</h1>
<form action="" method="post">

    <input name="idade" type="number" placeholder="Informe sua idade" required>
    <br/>
    <button>Enviar</button>

</form>

<?php

if($_POST){
    if($_POST["idade"] < 18){
        echo "Menor de Idade";
    }elseif($_POST["idade"] >= 18 && $_POST["idade"] < 60){
        echo "Adulto";
    }else{
        echo "Idoso";
    }
}