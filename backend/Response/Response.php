<?php


namespace Response;

/**
 * todo:
 *  - jakie naglowki powinny byc wysylane przy kazdym response? i co one oznaczaja?
 */
class Response
{
    const DEFAULT_RESPONSE_CODE = 200;
    const GET_HEADERS = [
        "Access-Control-Allow-Origin: *",
        "Content-Type: application/json; charset=UTF-8",
        "Access-Control-Allow-Methods: GET",
        "Access-Control-Allow-Headers: access",
        "Access-Control-Allow-Credentials: true",
        "Content-Type: application/json",
    ];
    const POST_HEADERS = [
        "Access-Control-Allow-Origin: *",
        "Content-Type: application/json; charset=UTF-8",
        "Access-Control-Allow-Methods: POST",
        "Access-Control-Max-Age: 3600",
        "Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With",
    ];

    /**
     * @var array[string] - headers to header() function
     */
    private $headers;

    private $response_method;

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
    public function __construct($response_method = \HttpConsts::POST)
    {
        $this->code = self::DEFAULT_RESPONSE_CODE;
        $this->response_method = $response_method;
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

    public function send(bool $jsonify = true)
    {
        $headers = $this->response_method == \HttpConsts::GET ? self::GET_HEADERS : self::POST_HEADERS;
        foreach ($headers as $header) {
            header($header);
        }
        http_response_code($this->code);
        echo $jsonify ? json_encode($this->body) : $this->body;
    }

}