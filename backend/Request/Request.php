<?php

namespace Request;

class Request
{
    public $request_method;
    public $body;
    public $url;

    public function __construct()
    {
        $this->request_method = $this->getRequestMethod();
        $this->url = $this->getRequestUrl();
        $this->body = $this->getBody($this->request_method); // tymczasowo, potem tylko będzie korzystać się z getBody()
    }

    public function getUrl()
    {
        return $this->url;
    }

    private function getRequestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    private function getRequestUrl()
    {
        // remove the directory path we don't want (/dir/backend/request_url?id=12 change to 'request_url'
        $request = str_replace($GLOBALS['CONFIG']['env']['server_backend_folder'], "", $_SERVER['REQUEST_URI']);
        $request = strstr($request, '?', true) ?: $request;

        // split the path by '/'
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

    public function getUrlParams()
    {
        return (object)$_GET;
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
