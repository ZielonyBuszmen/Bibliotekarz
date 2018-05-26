<?php

namespace Request;

class Request
{
    public $request_method;
    public $body;
    public $url;

//    public arguments_array;

    public function __construct($expected_method_of_page_request = 'null')
    {
        $this->request_method = $this->getRequestMethod();
//        if ($expected_method_of_page_request != $this->request_method) {
////            throw new \Exception("O niet, zly typ requestu!!"); todo
//            echo "zly typ requestu";
//        }
        $this->url = $this->getRequestUrl();
        $this->body = $this->getBody($this->request_method); // tymczasowo, potem tylko będzie korzystać się z getBody()
    }

    private function getRequestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    private function getRequestUrl()
    {
        #remove the directory path we don't want
        $request = str_replace(server_subfolder_backend, "", $_SERVER['REQUEST_URI']);

        #split the path by '/'
        $params = explode("/", $request);
        return $params[0];
    }

    public function getBody()
    {
        if ($this->isGet()) {
            return (object)$_GET;
        }
        return json_decode(file_get_contents("php://input"));
    }

    public function isGet(): bool
    {
        return $_SERVER['REQUEST_METHOD'] == \HttpConsts::GET;
    }

    public function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] == \HttpConsts::POST;
    }

    public function isPut(): bool
    {
        return $_SERVER['REQUEST_METHOD'] == \HttpConsts::PUT;
    }

    public function isDelete(): bool
    {
        return $_SERVER['REQUEST_METHOD'] == \HttpConsts::DELETE;
    }
}