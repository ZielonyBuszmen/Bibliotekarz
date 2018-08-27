<?php

use Core\Response\Response;
use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase {

    /** @var Response */
    private $tested;
    const test_code = 1;

    public function testSendWithDefaultParams()
    {
        $header = 'Test Header: 12345';
        $this->tested = new Response();
        $this->tested->addHeader($header);
        $this->tested->setCode(self:: test_code);
//        $this->tested->setResponseBody();
        // itd

    }

    // testowanie bez body

    // testowanie bez headera

    // testowanie z dwoma headerami

    // testowanie z jsonify = false
}
