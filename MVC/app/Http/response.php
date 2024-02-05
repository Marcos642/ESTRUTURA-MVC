<?php
namespace App\Http;

class Response
{
    private $httpCode = 200; # código do status http da resposta
    private $headers = []; # cabeçalho do response
    private $contentType = 'text/html'; # tipo de conteudo retornado
    private $content; # guarda o conteudo do response

    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content  = $content;
        $this->setContentType($contentType);
    }
    # método responsavel por alterar o contentType do response
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('content-Type',$contentType);
    }
    # método responsavel por adicionar um registro no cabeçalho do response
    public function addHeader($key,$value){
        $this->headers[$key] = $value;
    }

}
