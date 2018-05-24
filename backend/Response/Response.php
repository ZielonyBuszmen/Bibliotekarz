<?php


namespace Response;

/**
 * todo:
 *  - jakie naglowki powinny byc wysylane przy kazdym response? i co one oznaczaja?
 */

class Response
{
    const DEFAULT_RESPONSE_CODE = 200;

    /**
     * @var array[string] - headers to header() function
     */
    private $headers;

    /**
     * @var int Response code
     */
    private $code;

    /**
     * @var string json response
     */
    private $body;

    /**
     * Response constructor.
     */
    public function __construct()
    {
        $this->code = self::DEFAULT_RESPONSE_CODE;
    }

    public function addHeader($header)
    {
        $this->headers[] = $header;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @param array|\stdClass $body - albo tablica, albo stdClassa
     */
    public function setResponseBody($body)
    {
        $this->body = $body;
    }

    public function buildResponse() {
        foreach ($this->headers as $header) {
            header($header);
        }
        http_response_code($this->code);
        echo json_encode($this->body);
    }

}