<h1>Transação Bancaria</h1>
<form action="" method="post">
    <div>
        <label for="nome">Nome</label><br/>
        <input name="nome" type="text" placeholder="João">
    </div>
    <br/>
    <div>
        <label for="deposito">Deposito</label><br/>
        <input name="deposito" type="number" placeholder="0.00">
    </div>
    <br/>
    <div>
        <button>Depositar</button>
    </div>
</form>

<?php
$nome = $_POST["nome"];
$deposito = $_POST["deposito"];
$saldoAtual = 500;
if($_POST){
    if($nome == "João"){
        echo "<h2>$nome</h2><br/>";
        echo "Saldo antigo: ".$saldoAtual."</br>";
        echo "Saldo atual: ".$deposito + $saldoAtual;
    }else{
        echo "Para este teste use João no campo João";
    }
}