<?php
class Produto {
    protected $nome;
    protected $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}

class ProdutoImportado extends Produto {
    private $taxaImportacao;

    public function __construct($nome, $preco, $taxaImportacao) {
        parent::__construct($nome, $preco);
        $this->taxaImportacao = $taxaImportacao;
    }

    public function getPreco() {
        return $this->preco + $this->taxaImportacao;
    }
}

// Usando as classes
$produtoLocal = new Produto("Camiseta", 50);
$produtoImportado = new ProdutoImportado("Relógio", 200, 20);

echo "Produto Local: {$produtoLocal->getNome()}, Preço: {$produtoLocal->getPreco()}<br>";
echo "Produto Importado: {$produtoImportado->getNome()}, Preço: {$produtoImportado->getPreco()}, Preço Total: {$produtoImportado->getPrecoTotal()}";
?>