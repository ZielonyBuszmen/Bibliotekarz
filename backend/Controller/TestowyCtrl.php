<?php

namespace Controller;

use Request\Request;

class TestowyCtrl extends BaseCtrl
{

    public function testGeta(Request $request)
    {
        $response_body = [
            'ble' => 'ffff',
            'body' => $request->getBody(),
            'url_params' => $request->getUrlParams(),
        ];
        $this->buildResponse($request, $response_body, 200);
    }

    public function testPosta(Request $request)
    {
        $response_body = [
            'to jest' => 'post',
            'body' => $request->getBody(),
            'url_params' => $request->getUrlParams(),
        ];
        $this->buildResponse($request, $response_body, 200);
    }
}