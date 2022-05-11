<?php


class Envio extends Common {

	private $className;

	public function __construct($apiKey) {
		parent::__construct($apiKey);

		$this->className = get_class($this);
	}

	public function textToMany($data)
	{
		$uriRequest = __METHOD__;

		$request = [
			'messageData' => [
				'to' => $data['to'],
				'text' => $data['text']
			]
		];
		$response = $this->sendPost($request, $this->montaUri($uriRequest));

		return $response;
	}

	public function texto($data)
	{
		$uriRequest = __METHOD__;

		$request = [
			'messageData' => [
				'to' => $data['to'],
				'text' => $data['text']
			]
		];
		$response = $this->sendPost($request, $this->montaUri($uriRequest));

		return $response;
	}

	public function midia($data)
	{
		$uriRequest = __METHOD__;

		$request = [
			'messageData' => [
				'to' => $data['to'],
			    "url" => $data['url'],
			    "type" => $data['type'],
			    "caption" => $data['caption'],
			    "mimeType" => $data['mimeType'],
			    "nameFile" => $data['nameFile']
			]
		];
		$response = $this->sendPost($request, $this->montaUri($uriRequest));

		return $response;
	}

	public function link($data)
	{
		$uriRequest = __METHOD__ ;

		return $response;
	}

	public function botoes($data)
	{
		$uriRequest = __METHOD__ ;
	}

	public function botoesMidiaHeader($data)
	{
		$uriRequest = __METHOD__ ;

		return $response;
	}

	public function botoesLista($data)
	{
		$uriRequest = __METHOD__ ;

		return $response;
	}

	public function localizacao($data)
	{
		$uriRequest = __METHOD__ ;

		return $response;
	}

	public function contato($data)
	{
		$uriRequest = __METHOD__ ;

		return $response;
	}

	/**
	* metodo para montar a uri
	*/
	public function montaUri($uriRequest) {
		//montando uri
		$func = explode('::',$uriRequest);
		$uri = $this->getUrl() . strtolower($this->className) . '/' . $this->getKey() . '/' . $func[1];

		return $uri;
	}
}