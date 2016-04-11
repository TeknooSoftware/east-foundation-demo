<?php

namespace AppBundle\Controller;

use Teknoo\East\Framework\Controller\Controller;
use Teknoo\East\Framework\Http\ClientInterface;

class DefaultController extends Controller
{
    public function fooAction(ClientInterface $client)
    {
        return $this->render($client, 'AppBundle:Default:foo.html.twig');
    }
}
