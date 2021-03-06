<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\IPontuavel;

class CalculadorPontuacao
{
    public function recuperarPontuacao(IPontuavel $conteudo)
    {
        return $conteudo->recuperarPontuacao();
        
    }
}
