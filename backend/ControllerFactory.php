<?php
use Model\EntityManagerFactory;

class ControllerFactory
{
    /**
     * @param $controller - nazwa kontrolera do stworzenia
     * @param $metod - nazwa metody do wywołania
     * @param $request - request to Request, bedzie przekazany w parametrach, a params to parametry z paska adresu. Chociaz mogą być one w request
     */
    public static function createControllerFromRouter($controller, $action, $request) {
        $entity_manager = EntityManagerFactory::getEntityManager();
        $ctrl = new $controller($entity_manager);
        $ctrl->{$action}($request);
    }
}