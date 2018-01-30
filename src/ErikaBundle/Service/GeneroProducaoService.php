<?php
	
	namespace ErikaBundle\Service;

	use Doctrine\ORM\EntityManager;
    use ErikaBundle\Entity\GeneroProducao;
    use ErikaBundle\Entity\Producao;
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

        public function getGeneros(Producao $producao){
            if(empty($producao)){
                return null;
            }

            $em = $this->entityManager;
            $generos = $em->getRepository(GeneroProducao::class)->findBy(array('prd' => $producao));

            return $generos;
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