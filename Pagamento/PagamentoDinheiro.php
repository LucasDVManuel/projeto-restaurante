<?php

class PagamentoDinheiro implements FormaPagamento {
    public function processarPagamento($total) {
        // Lógica para processar pagamento em dinheiro
        echo "Pagamento de R$ $total recebido em dinheiro.";
    }
}
?>