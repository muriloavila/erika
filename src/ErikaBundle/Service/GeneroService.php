<?php

	namespace ErikaBundle\Service;

	use Doctrine\ORM\EntityManager;
	use Symfony\Component\DependencyInjection\Container;
	use ErikaBundle\Entity\Genero;

	/**
	* 
	*/
	class GeneroService
	{

		private $entityManager;
    	private $container;
		
		public function __construct(EntityManager $entityManager, Container $container)
	    {
	        $this->entityManager = $entityManager;
	        $this->container = $container;
	    }


	    public function newGenero($genero)
	    {
	    	# code...
	    }
	}

?>