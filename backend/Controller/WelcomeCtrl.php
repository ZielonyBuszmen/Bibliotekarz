<?php

namespace Controller;

use Request\Request;

class WelcomeCtrl extends BaseCtrl
{

    /**
     * Wakes up server, test request
     *
     * @param Request $request
     */
    public function wakeUpServer(Request $request)
    {
        // todo - dorobić testowe zapytanie do bazy, by ją wybudzić
        $response_body = [
            'is_woke_up' => true
        ];
        $this->buildResponse($request, $response_body, 200);
    }

    /**
     * @param Request $request
     */
    public function testGetRequest(Request $request)
    {
        $this->testRequest($request, 'GET');
    }

    /**
     * @param Request $request
     */
    public function testPostRequest(Request $request)
    {
        $this->testRequest($request, 'POST');
    }

    /**
     * @param Request $request
     */
    public function testPutRequest(Request $request)
    {
        $this->testRequest($request, 'PUT');
    }

    /**
     * @param Request $request
     */
    public function testDeleteRequest(Request $request)
    {
        $this->testRequest($request, 'DELETE');
    }

    protected function testRequest(Request $request, string $type)
    {
        $response_body = [
            'message' => "Test {$type} response",
            'your_reqeust_body' => $request->getBody(),
            'your_request_params' => $request->getUrlParams(),
        ];
        $this->buildResponse($request, $response_body, 200);
    }
}