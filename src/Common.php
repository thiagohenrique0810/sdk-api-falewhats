<?php

include_once('Config.php');

class AbstractStc {

	/** CONFIG **/
	private $url;
	private $key;

	public function __construct($options) 
	{
		//url api
		$this->setUri('https://api.whatsapp.0001.falewhats.com.br/');

		//verificando se foi enviada a chave de integracao
		if(!empty($options['key'])) {
			$this->key = $options['key'];
		}else {
			die('missing integration key');
		}
	}

	public function sendGet($data, $uriRequest)
	{
		//die($this->key);
		if(!empty($data)) {
	        return sendRequest([
	        	'key' => $this->getKey(),
	        	'urlRequest' => $this->getUrl(),
	        	'uriRequest' => $uriRequest,
	        	'method' => 'GET',
	        	'request' => $data
	        ]);
    	}
	}

	public function senPost($data, $uriRequest) 
	{
		//die($this->key);
		if(!empty($data)) {
	        return sendRequest([
	        	'key' => $this->getKey(),
	        	'urlRequest' => $this->getUrl(),
	        	'uriRequest' => $uriRequest,
	        	'method' => 'GET',
	        	'request' => $data
	        ]);
    	}
	}

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}