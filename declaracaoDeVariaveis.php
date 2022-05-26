<h2>Crie um programa que declare 3 variáveis<br/>
 para receber o Nome, o peso e a altura de uma pessoa.<br/> Ao final imprima os dados na tela.
</h2>
<form action="" method="post">
    <label for="name">Nome</label><br>
    <input name="name" type="text"><br/>

    <label for="peso">Peso</label><br>
    <input name= "peso" type="text"><br/>

    <label for="altura">Altura</label><br>
    <input name= "altura" type="text"><br/>

    <button>Enviar</button>

</form>

<?php
    if($_POST){
        echo "Oi ".$_POST['name']." seu peso é ".$_POST['peso']." e sua altura ".$_POST['altura'];
    }
?>