<?php
    interface Desconto {
        public function calcular(float $valor): float;
    }

    class DescontoVip implements Desconto {
        public function calcular(float $valor): float {
            return $valor * 0.2;
        }
    }

    class DescontoRegular implements Desconto {
        public function calcular(float $valor): float {
            return $valor * 0.1;
        }
    }

    
    class DescontoBlackFriday implements Desconto {
        public function calcular(float $valor): float {
            return $valor * 0.5;
        }
    }

    class Pedido {
        private float $valor;
        private Desconto $estrategiaDesconto;

        
        public function __construct(float $valor, Desconto $estrategiaDesconto) {
            $this->valor = $valor;
            $this->estrategiaDesconto = $estrategiaDesconto;
        }

        public function processarPedido() {
     
            $valorDesconto = $this->estrategiaDesconto->calcular($this->valor);
            $valorFinal = $this->valor - $valorDesconto;

            echo "Valor original: {$this->valor} | Desconto: {$valorDesconto} | Total: {$valorFinal} <br>";
        }
    }

    $pedidoVip = new Pedido(100.00, new DescontoVip());
    $pedidoVip->processarPedido();

    $pedidoComum = new Pedido(100.00, new DescontoRegular());
    $pedidoComum->processarPedido();
?>