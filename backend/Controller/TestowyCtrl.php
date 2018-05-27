<?php

namespace Controller;

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

    public function testGeta($request)
    {
        $a = NuLl;
        $response = new Response('GET');
        $response->setResponseBody(['ble' => 'ffff']);
        $response->buildResponse();
    }
}