<?php

	namespace ErikaBundle\Service;

	use Doctrine\ORM\EntityManager;
	use Symfony\Component\DependencyInjection\Container;
	use ErikaBundle\Entity\ElencoProducaoTipo;
	use ErikaBundle\Entity\TipoElenco;

	/**
	* 
	*/
	class ElencoProducaoTipoService
	{
		private $entityManager;
    	private $container;
		
    	public function __construct(EntityManager $entityManager, Container $container)
	    {
	        $this->entityManager = $entityManager;
	        $this->container = $container;
	    }

	    public function saveActors(array $actors, $movie)
	    {
	    	$salvos = array();

	    	$em = $this->entityManager;
	    	$tipoElencoAtor = $em->getRepository(TipoElenco::class)->findOneBy(array("id" => 3));

	    	foreach ($actors as $actor) {
	    		$ept = $em->getRepository(ElencoProducaoTipo::class)->findOneBy(array(	"prd" => $movie,
																						"tipoElc" => $tipoElencoAtor,
																						"elc" => $actor['obj'],
																						"nomeChar" => $actor['char_name']
																				));
	    		if(empty($ept) || $ept == null){
	    			$ept = new ElencoProducaoTipo();
	    			$ept->setPrd($movie);
	    			$ept->setTipoElc($tipoElencoAtor);
	    			$ept->setElc($actor['obj']);
	    			$ept->setNomeChar($actor['char_name']);

	    			$em->persist($ept);
					$em->flush();
	    		}

	    		$salvos[] = $ept;
	    	}

	    	return $salvos;
	    }

	    public function saveCrews(array $crews, $movie){
    	    $salvos = array();

    	    $em = $this->entityManager;

            foreach ($crews as $crew) {
                $department = $em->getRepository(TipoElenco::class)->findOneBy(array('descricao' => $crew['department']));
                $crew_department = $em->getRepository(ElencoProducaoTipo::class)->findOneBy(array(
                                                                                                                'prd' => $movie,
                                                                                                                'tipoElc' => $department,
                                                                                                                'elc' => $crew['obj']
                                                                                                            ));
                if(empty($crew_department) || $crew_department == null){
                    $crew_department = new ElencoProducaoTipo();
                    $crew_department->setPrd($movie);
                    $crew_department->setElc($crew['obj']);
                    $crew_department->setTipoElc($department);

                    $em->persist($crew_department);
                    $em->flush();
                }

                $salvos[] = $crew_department;
            }

            return $salvos;
        }
	}

?>