<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\IAssistivel;

class Assistidor
{
    public function assiste(IAssistivel $conteudo)
    {
        $conteudo->assistir();
    }

    
}
