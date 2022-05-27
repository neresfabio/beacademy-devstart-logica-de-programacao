<h1>be.Academy</h1>
<form action="" method="post">
    <input name="nome" type="text" placeholder="Nome" required>
    <input name="idade" type="text" placeholder="Idade" required>

    <button>Enviar</button>
</form>

<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($_POST) {
    echo "Nome: " . $_POST['nome'].'<br/>';
    echo "Idade: " . $_POST['idade'].'<br/>';

    if($idade > 18) {echo'Idade > 18; Verdadeiro<br/>';}
    if($idade != 25) {echo'Idade != 25; Falso<br/>';}
    if($idade != 25 && $nome == 'Marcos') {echo'Idade != 25 e Nome == Marcos; Verdadeiro<br/>';}
    if($idade != 25 || $nome == 'Marcos') {echo'Idade != 25 ou Nome == Marcos; Verdadeiro<br/>';}
    if($idade %2 == 0) {echo'Idade dividido 2 é == 0; Verdadeiro<br/>';}
}

?>