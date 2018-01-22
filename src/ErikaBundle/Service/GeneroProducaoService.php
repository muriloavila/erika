<?php
	
	namespace ErikaBundle\Service;

	use Doctrine\ORM\EntityManager;
    use ErikaBundle\Entity\GeneroProducao;
    use Symfony\Component\DependencyInjection\Container;

	/**
	* 
	*/
	class GeneroProducaoService
	{
		
		private $entityManager;
    	private $container;
		
    	public function __construct(EntityManager $entityManager, Container $container)
	    {
	        $this->entityManager = $entityManager;
	        $this->container = $container;
	    }

	    public function saveGeneroProducao($generos, $movie)
	    {
	        $em = $this->entityManager;
            $salvos = array();
            foreach ($generos as $genero){
                $generoProducao = $em->getRepository(GeneroProducao::class)->findOneBy(array('gen' => $genero, 'prd' => $movie));

                if(empty($gp) || $gp == null){
                    $generoProducao = new GeneroProducao();
                    $generoProducao->setGen($genero);
                    $generoProducao->setPrd($movie);

                    $em->persist($generoProducao);
                    $em->flush();
                }

                $salvos[] = $generoProducao;
            }

            return $salvos;
	    }
	}

?>