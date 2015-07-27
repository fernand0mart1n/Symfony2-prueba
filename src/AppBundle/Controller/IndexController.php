<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    /**
     * @Route("")
     */
    public function indexAction()
    {
        return new Response(
	    '<html><body>Página principal</body></html>'
        );
    }
}
