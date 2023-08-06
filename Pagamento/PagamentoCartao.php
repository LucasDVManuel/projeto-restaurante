<?php

class PagamentoCartao implements FormaPagamento {
    public function processarPagamento($total) {
        // Lógica para processar pagamento com cartão
        echo "Pagamento de R$ $total realizado com cartão de crédito.";
    }
}

?>