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
	        if($actor == null || empty($actor)){
	            return;
            }
	    	$em = $this->entityManager;
	    	$ator = $em->getRepository(Elenco::class)->findOneBy(array('idTmdbElc' => $actor->id));

	    	if(empty($ator) || $ator == null){

	    		$ator_detalhes = $this->getDetails($actor->id);

	    		$ator = new Elenco();
				$ator->setNome( $ator_detalhes->name );
				$ator->setAbrev( $ator_detalhes->name );
				$ator->setIdTmdbElc( $ator_detalhes->id );
				
				if(isset($ator_detalhes->birthday) && $ator_detalhes->birthday != null){

				    if(!isset($ator_detalhes->deathday)){
                        $ator_detalhes->deathday = null;
                    }

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

	    	return array("obj" => $ator, "char_name" => $actor->character);
	    }

	    public function newElencoCrew($crew)
	    {
	    	$em = $this->entityManager;
	    	$producao = $em->getRepository(Elenco::class)->findOneBy(array('idTmdbElc' => $crew->id));

	    	if(empty($producao) || $producao == null){
                $producao_detalhes = $this->getDetails($crew->id);
                if(empty($producao_detalhes)){
                    return null;
                }
                $producao = new Elenco();
                $producao->setNome( $producao_detalhes->name );
                $producao->setAbrev( $producao_detalhes->name );
                $producao->setIdTmdbElc( $producao_detalhes->id );

                if(isset($producao_detalhes->birthday) && $producao_detalhes->birthday != null){

                    if(!isset($producao_detalhes->deathday)){
                        $producao_detalhes->deathday = date('Y-m-d');
                    }


                    $data_falecimento = new \DateTime($producao_detalhes->deathday);

                    $data_nascimento = new \DateTime($producao_detalhes->birthday);

                    $producao->setIdade( $this->calculaIdade($producao_detalhes->birthday, $producao_detalhes->deathday) );
                    $producao->setDtNascimento( $data_nascimento );
                    $producao->setDtFalecimento( $data_falecimento );
                }else{
                    $producao->setIdade( 0 );
                    $producao->setDtNascimento( null );
                    $producao->setDtFalecimento( null );
                }

                $em->persist($producao);
                $em->flush();
            }

            return array('obj' => $producao, 'department' => $crew->department);
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
			if($data_nascimento != null){
                $nascimento = explode('-', $data_nascimento);
                $dianasc = isset($nascimento[2]) ? $nascimento[2] : '01' ;
                $mesnasc = isset($nascimento[1]) ? $nascimento[1] : '01';
                $anonasc = isset($nascimento[0]) ? $nascimento[0] : '1900';
            }

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