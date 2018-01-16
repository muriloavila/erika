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
	    		
	    	}
	    }

	    public function newElencoCrew($crew)
	    {
	    	return $crew;
	    }
	}
?>