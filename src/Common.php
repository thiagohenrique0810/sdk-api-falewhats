<?php

include_once('Config.php');

class Common {

	/** CONFIG **/
	private $url;
	private $key;

	public function __construct($key) 
	{
		//url api
		$this->setUrl('https://api.whatsapp.0001.falewhats.com.br/rest/');

		//verificando se foi enviada a chave de integracao
		if(!empty($key)) {
			$this->key = $key;
		}else {
			die('missing integration key');
		}
	}

	public function sendGet($data, $uriRequest)
	{
		//die($this->key);
		if(!empty($data)) {
	        return sendRequest([
	        	'url' => $uriRequest,
	        	'method' => 'GET',
	        	'request' => $data
	        ]);
    	}
	}

	public function sendPost($data, $uriRequest) 
	{
		//die($this->key);
		if(!empty($data)) {
	        return sendRequest([
	        	'url' => $uriRequest,
	        	'method' => 'POST',
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