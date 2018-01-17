<?php

	namespace ErikaBundle\Service;

	use Doctrine\ORM\EntityManager;
	use Symfony\Component\DependencyInjection\Container;
	use ErikaBundle\Entity\Elenco;
	use Symfony\Component\Validator\Constraints\DateTime;

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

	    		$ator = new Elenco();
				$ator->setNome( $ator_detalhes->name );
				$ator->setAbrev( $ator_detalhes->name );
				$ator->setIdTmdbElc( $ator_detalhes->id );
				
				if(isset($ator_detalhes->birthday) && $ator_detalhes->birthday != null){
		    		$data_falecimento = new \DateTime($ator_detalhes->deathday);
					$data_nascimento = new \DateTime($ator_detalhes->birthday);
					
					$ator->setIdade( $this->calculaIdade($ator_detalhes->birthday, $ator_detalhes->deathday) );
					$ator->setDtNascimento( $data_nascimento );
					$ator->setDtFalecimento( $data_falecimento );
				}else{
					$ator->setIdade( 0 );
					$ator->setDtNascimento( null );
					$ator->setDtFalecimento( null );
				}
				
				$em->persist($ator);
				$em->flush();
	    	}

	    	return $ator->getId();
	    }

	    public function newElencoCrew($crew)
	    {
	    	return $crew;
	    }


	    public function getDetails($people_id)
	    {
	    	$parameters = array(
                "api_key"   => "c3d594f81aba4df6403f9f5441d639e0",
                "language"  => "pt-BR",
            );

			$mcurl = $this->container->get('erika.mcurl');

			$mcurl->setBase_uri("https://api.themoviedb.org/3/");

			return $mcurl->getJsonToObject('person/'.$people_id, $parameters);
	    }

		public function calculaIdade($data_nascimento, $data_fim = null) {
			if($data_fim == null){
				//Data atual
				$dia = date('d');
				$mes = date('m');
				$ano = date('Y');
			}else{
				$data_end = explode('-', $data_fim);
				$dia = ($data_end[2]);
				$mes = ($data_end[1]);
				$ano = ($data_end[0]);
			}
			
			$nascimento = explode('-', $data_nascimento);
			$dianasc = ($nascimento[2]);
			$mesnasc = ($nascimento[1]);
			$anonasc = ($nascimento[0]);
			
			//Calculando sua idade
			$idade = $ano - $anonasc; // simples, ano- nascimento!
			if ($mes < $mesnasc) // se o mes é menor, só subtrair da idade
			{
				$idade--;
				return $idade;
			}
			elseif ($mes == $mesnasc && $dia <= $dianasc) // se esta no mes do aniversario mas não passou ou chegou a data, subtrai da idade
			{
				$idade--;
				return $idade;
			}
			else // ja fez aniversario no ano, tudo certo!
			{
				return $idade;
			}
		}
	}
?>