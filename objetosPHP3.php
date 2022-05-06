<?php
abstract class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }
    public function getDetalhes(){
        return "Agencia: $this->agencia | Conta: $this->conta | Saldo: $this->saldo".PHP_EOL;
    }

    public final function depositar($valor){
        $this->saldo += $valor;
        echo "Depósito de: $valor | Saldo atual: $this->saldo".PHP_EOL;
    }
    public abstract function saque($valor);
}

final class Poupanca extends Conta{
    public  function saque($valor){
        if ($this->saldo >= $valor){
            $this->saldo -= $valor;
            echo "Saque de: $valor | Saldo atual: $this->saldo".PHP_EOL;
        } else{
            echo "Saque não autorizado | Saldo atual: $this->saldo";
        }
    }
}


final class Corrente extends Conta{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public  function saque($valor){
        if (($this->saldo + $this->limite) >= $valor){
            $this->saldo -= $valor;
            echo "Saque de: $valor | Saldo atual: $this->saldo".PHP_EOL;
        } else{
            echo "Saque não autorizado | Saldo atual: $this->saldo | Limite: $this->limite";
        }
    }
}

$c1 = new Poupanca(100, 2586, 5000);
$c1->depositar(1800);
$c1->saque(2500);
$c1->saque(5500);

echo $c1->getDetalhes();
