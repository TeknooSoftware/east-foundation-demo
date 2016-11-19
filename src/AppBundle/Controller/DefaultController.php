<?php

namespace AppBundle\Controller;

use Psr\Http\Message\ServerRequestInterface;
use Teknoo\East\Foundation\Http\ClientInterface;
use Teknoo\East\FoundationBundle\Controller\EastControllerTrait;

class DefaultController
{
    use EastControllerTrait;

    public function __invoke(ServerRequestInterface $serverRequest, ClientInterface $client)
    {
        return $this->render($client, 'AppBundle:Default:main.html.twig');
    }
}
