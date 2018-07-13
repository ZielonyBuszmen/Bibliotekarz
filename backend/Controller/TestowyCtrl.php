<?php

namespace Controller;

use Request\Request;

class TestowyCtrl extends BaseCtrl
{

    public function testPosta(Request $request)
    {
        $response_body = [
            'to jest' => 'post',
            'body_requestu_tutaj_leci' => $request->getBody(),
            'url_params_tutaj_leci' => $request->getUrlParams(),
        ];
        $this->buildResponse($request, $response_body, 200);
    }
}