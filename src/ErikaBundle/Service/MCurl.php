<?php

	namespace ErikaBundle\Service;

	use Symfony\Component\DependencyInjection\Container;

	/**
	* 
	*/
	class MCurl
	{
		
		protected $base_uri;

		public function setBase_uri($base_uri)
		{
			$this->base_uri = $base_uri;
		}

		public function get($complement_uri, array $parameters = null)
		{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FILETIME, true);

			$query = http_build_query($parameters);
			$url = $this->base_uri . $complement_uri .'?'. $query;

			curl_setopt($ch, CURLOPT_URL, $url);

			$output = curl_exec($ch);
			$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			
			if($response_code == '404'){
				return false;
			}

			curl_close($ch);

			return $output;
		}

		public function getJsonToObject($complement_uri, array $parameters = null)
		{
			return json_decode($this->get($complement_uri, $parameters));
		}

		public function getJsonToArray($complement_uri, array $parameters = null)
		{
			return json_decode($this->get($complement_uri, $parameters), true);
		}
	}
?>