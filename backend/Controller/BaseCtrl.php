<?php


namespace Controller;


use Doctrine\ORM\EntityManager;
use Core\Request\Request;
use Core\Response\Response;

abstract class BaseCtrl
{
    protected $entity_manager;

    public function __construct(EntityManager $entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }

    protected function buildResponse(Request $request, $response_body, $code = 200)
    {
        $response_body['ok'] = true;
        $response = new Response($request->request_method);
        $response->setCode($code);
        $response->setResponseBody($response_body);

        return $response;
    }

}
