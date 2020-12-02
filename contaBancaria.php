<?php

declare(strict_types=1);

class contaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo
        )
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;

    }

    public function obterSaldo () : string
    {
        return 'Seu saldo atual é: R$'. $this->saldo;
    }

    public function depositar (float $valor) : string
    {
        $this->saldo += $valor;
        return "Deposito de R$" . $valor . " realizado.";
    }

    public function sacar (float $valor) : string
    {
        $this->saldo -= $valor;
        return "Saque de R$" . $valor . " realizado.";
    }
}

$conta = new contaBancaria(
    'Banrisul', //banco
    'Diego', //nome
    '0040', //agencia
    '212121-12',//conta
    0//saldo

);
echo ($conta->obterSaldo());
echo "\n";
echo $conta->depositar(300.00);
echo "\n";
echo ($conta->obterSaldo());
echo "\n";
echo $conta->sacar(50);
echo ($conta->obterSaldo());


