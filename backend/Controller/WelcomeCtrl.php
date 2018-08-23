<?php

namespace Controller;

use Request\Request;
use Response\Response;

class WelcomeCtrl extends BaseCtrl
{

    /**
     * Wakes up server, test request
     *
     * @param Request $request
     * @return Response
     */
    public function wakeUpServer(Request $request)
    {
        // todo - dorobić testowe zapytanie do bazy, by ją wybudzić
        $response_body = [
            'is_woke_up' => true
        ];
        return $this->buildResponse($request, $response_body, 200);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function testGetRequest(Request $request)
    {
        return $this->testRequest($request, 'GET');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function testPostRequest(Request $request)
    {
        return $this->testRequest($request, 'POST');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function testPutRequest(Request $request)
    {
        return $this->testRequest($request, 'PUT');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function testDeleteRequest(Request $request)
    {
        return $this->testRequest($request, 'DELETE');
    }

    protected function testRequest(Request $request, string $type)
    {
        $response_body = [
            'message' => "Test {$type} response",
            'your_reqeust_body' => $request->getBody(),
            'your_request_params' => $request->getUrlParams(),
        ];

        return $this->buildResponse($request, $response_body, 200);
    }

    /**
     * Tests server_backend_folder variable is set properly
     *
     * @param Request $request
     * @return Response
     */
    public function testServerBackendFolder(Request $request)
    {
        $CONFIG = $GLOBALS['CONFIG'];
        if ($CONFIG['env']['is_dev_mode'] != true) {
            $this->buildResponse($request, ['message' => 'set is_dev_mode to true'], 200);
        }
        $message = [
            'request_url' => $request->getUrl(),
            'server_request_uri' => $_SERVER['REQUEST_URI'],
            'config_server_backend_folder' => $CONFIG['env']['server_backend_folder'],
        ];

        return $this->buildResponse($request, $message, 200);
    }

    /**
     * Bad code, returns routing list
     *
     * @param Request $request
     * @return Response
     */
    public function routingList(Request $request)
    {
        $routes = (include routing_list)->routes;

        $routing_list_array = [];
        foreach ($routes as $route_type => $array) {
            foreach ($array as $route_name => $info) {
                $controller_string = "{$info->controller}::{$info->action}()";
                $routing_list_array[$route_type][] = '`' . $route_name . '` => ' . substr($controller_string, 11);
            }
        }

        return $this->buildResponse($request, ['routing_list' => $routing_list_array]);
    }
}
