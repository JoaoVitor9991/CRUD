<?php

class Guilda {
    private $membros = [];

    public function adicionarMembros(Personagem $novoMembro)
    {
        $this->membros[] = $novoMembro;
    }

    public function listarMembros()
    {
        foreach($this->membros as $contaMembros) {
            echo "Membros: " . $contaMembros->getNome() . "<br>";
        }
    }
 
    public function expulsarMembros($nome)
    {
        foreach ($this->membros as $chave => $membro) {
            if ($membro->getNome() == $nome) {
                unset($this->membros[$chave]);

                echo "O membro " . $nome . " foi expulso da guilda! <br>";

                break;
            }
        }
    }
}