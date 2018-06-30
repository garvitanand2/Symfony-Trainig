<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MagicNumber
{
    /**
     * @Route("/magic/number")
     */
    public function numberAction()
    {
        $number = random_int(0, 50);

        return new Response(
            '<html><body>GArvit Magic number is: '.$number.'</body></html>'
        );
    }
}