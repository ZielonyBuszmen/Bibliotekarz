<?php

namespace Permissions;

use Controller\WelcomeCtrl;

class PlaceResourcesMap
{
    protected static $data = [
        'place' => [
            'controller::class' . '::method',
        ],
        'tests' => [
            WelcomeCtrl::class . '::wakeUpServer',
            WelcomeCtrl::class . '::testGetRequest',
            WelcomeCtrl::class . '::testPostRequest',
            WelcomeCtrl::class . '::testPutRequest',
            WelcomeCtrl::class . '::testDeleteRequest',
        ]
    ];

    protected $resources = [];

    public function __construct()
    {
        foreach (self::$data as $place => $resources) {
            foreach ($resources as $resource) {
                $this->resources[$resource] = $place;
            }
        }
    }

    /**
     * @return array
     */
    public function getResources()
    {
        return $this->resources;
    }

}
