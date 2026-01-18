<?php

class Inventario {
    private $inventario = [];

    public function guardar(Item $nomeItem){
        $this->inventario[] = $nomeItem;
    }

    public function listarItem()
    {
        foreach ($this->inventario as $item) {
            echo "Itens possuidos: " . $item->getNomeItem() . "<br>";
        }
    }

    public function usarItem($nomeItem)
    {
        foreach ($this->inventario as $chave => $item) {
            if ($item->getNomeItem() == $nomeItem) {
                unset($this->inventario[$chave]);
                echo "Usou o item: " . $item->getNomeItem();

                break;
            }
        }
    }
}