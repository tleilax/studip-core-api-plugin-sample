<?php
require 'routes/HelloWorld.php';
require 'routes/Calculator.php';

class CoreAPISamplePlugin extends RESTAPIPlugin
{
    public function getRouteMaps()
    {
        // You may either return a single route map
        // return new RESTAPI\Routes\HelloWorld;

        // Or an array of route maps
        $maps = array();
        $maps[] = new RESTAPI\Routes\HelloWorld;
        $maps[] = new RESTAPI\Routes\Calculator;
        return $maps;
    }
}