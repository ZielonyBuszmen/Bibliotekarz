<?php

namespace Controller;

use Doctrine\ORM\EntityManager;
use Request\Request;
use Response\Response;

class TestowyCtrl
{
    protected $entity_manager;

    public function __construct(EntityManager $entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }

    public function testGeta(Request $request)
    {
        $response = new Response($request->request_method);
        $response->setResponseBody([
            'ble' => 'ffff',
            'body' => $request->getBody(),
            'url_params' => $request->getUrlParams(),
        ]);
        $response->send();
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
        $response->send();
    }
}