<?php

declare(strict_types=1);

class Venda 
{
    
    private string $data;
    private string $produto;
    private int $quantidade;
    private float $valorTotal;

    public function __construct(string $data, string $produto, int $quantidade, float $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function dadosVenda()
    {
        return "Data: " . $this->data . " Produto: " . $this->produto . " quantidade: " . $this->quantidade . "\n" . "Valor total da venda: " . $this->valorTotal;
    }
}//fecha class Venda

$venda1 = new Venda(
    '02/12/2020',//data
    'GTX 1650',//produto
    1,//quantidade
    1250//valor total
);

$venda2 = new Venda(
    '01/05/2020',//data
    'GTX 1660 super',//produto
    5,//quantidade
    1700//valor total
);

echo $venda1->dadosVenda();
echo "\n";
echo $venda2->dadosVenda();


?>