<?php

namespace ErikaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Acl\Exception\Exception;

class ApiController extends Controller
{
    public function producaoAction($id_movie)
    {
        $response = new JsonResponse();
        $service = $this->get('erika.producao');
        $prd = $service->getProducao($id_movie);

        return new JsonResponse($prd);
    }
}
