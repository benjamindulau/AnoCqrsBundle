<?php

namespace Ano\CqrsBundle\Web\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as FrameworkController;

class Controller extends FrameworkController
{
    /**
     * @return \LiteCQRS\Bus\CommandBus;
     */
    public function getCommandBus()
    {
        return $this->get('command_bus');
    }
}