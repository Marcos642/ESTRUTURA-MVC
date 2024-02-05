<?php
namespace App\Http;

class Request
{
    private $httpMethod; #Referenciada pelo server
    private $uri; #Referenciada pelo server
    private $queryPamams = []; #Parametos que vem no GET da página
    private $postVars = []; #Variáveis recebidas no POST da página
    private $headers = []; #Pegar o cabeçalho da requisição

    public function __construct()
    {
        $this->queryPamams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders(); #Método do php que obtem todos os métodos
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getQueryParams()
    {
        return $this->queryPamams;
    }

    public function getPostVars()
    {
        return $this->postVars;
    }


}