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
	    	$em = $this->entityManager;
	    	$genre = $em->getRepository(Genero::class)->findOneBy(array('idTmdbGnr' => $genero->id));
	    	if(empty($genre) || $genre == null){
	    		$genre = new Genero();
	    		$genre->setNome($genero->name);
	    		$genre->setIdTmdbGnr($genero->id);
	    		$em->persist($genre);
	    		$em->flush();
	    	}

	    	return $genre;
	    }
	}

?>