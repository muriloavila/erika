<?php

	namespace ErikaBundle\Service;
	
	use Doctrine\ORM\EntityManager;
	use Symfony\Component\DependencyInjection\Container;
	use ErikaBundle\Entity\Produtora;

	/**
	* 
	*/
	class ProdutoraService
	{
		
		private $entityManager;
    	private $container;
		
    	public function __construct(EntityManager $entityManager, Container $container)
	    {
	        $this->entityManager = $entityManager;
	        $this->container = $container;
	    }

	    public function newProdutora($produtora)
	    {
	    	$em = $this->entityManager;
	    	$production_company = $em->getRepository(Produtora::class)->findOneBy(array('idTmdbPdt' => $produtora->id));
	    	if(empty($genre) || $genre == null){
	    		$production_company = new Produtora();
	    		$production_company->setNome($produtora->name);
	    		$production_company->setIdTmdbPdt($produtora->id);
	    		$em->persist($production_company);
	    		$em->flush();
	    	}
	    	return $production_company->getId();
	    }
	}




?>