<?php

namespace Permissions;

class PlaceResourcesMap
{
    protected static $data = [
        'place' => [
            'controller::class' . '::method',
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