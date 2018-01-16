<?php

	namespace ErikaBundle\Service;

	use Doctrine\ORM\EntityManager;
	use Symfony\Component\DependencyInjection\Container;
	use ErikaBundle\Entity\Elenco;

	/**
	* 
	*/
	class ElencoService
	{
		
		private $entityManager;
    	private $container;
		
    	public function __construct(EntityManager $entityManager, Container $container)
	    {
	        $this->entityManager = $entityManager;
	        $this->container = $container;
	    }

	    public function newElencoActor($actor)
	    {
	    	$em = $this->entityManager;
	    	$ator = $em->getRepository(Elenco::class)->findOneBy(array('idTmdbElc' => $actor->id));
	    	if(empty($ator) || $ator == null){
	    		$ator_detalhes = $this->getDetails($actor->id);
	    	}
	    }

	    public function newElencoCrew($crew)
	    {
	    	return $crew;
	    }


	    public function getDetails($people_id)
	    {
	    	$parameters = array(
                "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
            );

			$mcurl = $this->container->get('erika.mcurl');

			$mcurl->setBase_uri("https://api.themoviedb.org/3/");
			return $mcurl->getJsonToObject('people/'.$people_id, $parameters);
	    }
	}
?>