<?php

namespace ErikaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Acl\Exception\Exception;

class ApiController extends Controller
{
    public function movieAction($id_movie)
    {
        $response = new JsonResponse();
        $service = $this->get('erika.producao');
        $prd = $service->getMovie($id_movie);

        $genero_service = $this->get('erika.genero_producao');
        $generos = $genero_service->getGeneros($prd);

        $array = $prd->toArray();

        foreach ($generos as $genero) {
            $array['generos'][] = $genero->getGen()->toArray();
        }

        $produtoras_service = $this->get('erika.produtora_producao');
        $produtoras = $produtoras_service->getProdutoras($prd);

        foreach ($produtoras as $produtora) {
            $array['produtoras'][] = $produtora->getPdt()->toArray();
        }

        //dump($produtoras);
        return new JsonResponse($array);
    }
}
