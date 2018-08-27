<?php

namespace Permissions;

class PermissionChecker
{

    /**
     * @var PlaceResourcesMap
     */
    private $place_resource_map;

    public function __construct(PlaceResourcesMap $place_resource_map)
    {
        $this->place_resource_map = $place_resource_map;
    }

    public function check($controller, $action)
    {
        $place = $this->getResourcePlace($controller, $action);
        $this->checkPrivToPlace($place);
    }

    /**
     * @param $controller
     * @param $action
     * @return string|null
     */
    protected function getResourcePlace($controller, $action)
    {
        $resources = $this->place_resource_map->getResources();
        $resource_name = $controller . '::' . $action;
        return $resources[$resource_name] ?? null;
    }

    protected function checkPrivToPlace($place)
    {
        if ($place === null) {
            // jesli nie znaleziono place, to cos tam
        }
        // tutaj sprawdzenie, czy user ma dostęp do tego place, np place= 'account_settings'
        // powinno wywalać exception, jak nie ma uprawnien

    }
}
