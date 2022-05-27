<h1>Calcula IMC</h1>

<form action="" method="post">

    <input name="nome" type="text" placeholder="Nome">

    <input name="peso" type="text" placeholder="10.0">

    <input name="altura" type="text" placeholder="1.7"><br/>

    <button>CALCULAR IMC</button>
</form>

<?php 

    if ($_POST){
        $name = $_POST['nome'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $indiceMassaCorporea = floatval($peso)/(floatval($altura)*floatval($altura));

        echo $name." seu IMC é ".number_format($indiceMassaCorporea, 1, '.');
    }


?>