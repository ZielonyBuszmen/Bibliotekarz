<?php

namespace Controller;

use Request\Request;
use Response\Response;

class TestowyCtrl
{

    protected $entity_manager;


    /**
     * TestowyCtrl constructor.
     */
    public function __construct($entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }

    public function testGeta(Request $request)
    {
        $a = NuLl;
        $response = new Response($request->request_method);
        $response->setResponseBody([
            'ble' => 'ffff',
            'body' => $request->getBody(),
            'url_params' => $request->getUrlParams(),
        ]);
        $response->buildResponse();
    }

    public function testPosta(Request $request)
    {
        $a = NuLl;
        $response = new Response($request->request_method);
        $response->setResponseBody([
            'to jest' => 'post',
            'body' => $request->getBody(),
            'url_params' => $request->getUrlParams(),
        ]);
        $response->buildResponse();
    }
}