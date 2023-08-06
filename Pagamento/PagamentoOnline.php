<?php

class PagamentoOnline implements FormaPagamento {
    public function processarPagamento($total) {
        // Lógica para processar pagamento online
        echo "Pagamento de R$ $total realizado online.";
    }
}
?>