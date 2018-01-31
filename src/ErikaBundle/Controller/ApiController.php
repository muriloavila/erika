<?php

namespace ErikaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Acl\Exception\Exception;

class ApiController extends Controller
{
    public function getMovieAction($id_movie)
    {
        $response = new JsonResponse();
        $service = $this->get('erika.producao');
        $prd = $service->getMovie($id_movie);

        if($prd == null){
            return new JsonResponse(array('response' => 'Movie Not Find'));
        }

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

        $elenco_service = $this->get('erika.elenco_prducao_tipo');
        $elenco = $elenco_service->getTipoElenco($prd);

        foreach ($elenco as $elc) {
            $elenco_um = $elc->getElc()->toArray();

            if($elc->getTipoElc()->getId() == 3){
                $elenco_um['nome_char'] = $elc->getNomeChar();
                $array['atores'][] = $elenco_um;
            } else {
                $elenco_um['tipoPrd'] = $elc->getTipoElc()->getDescricao();
                $array['producao'][] = $elenco_um;
            }
        }
        return new JsonResponse($array);
    }
}
