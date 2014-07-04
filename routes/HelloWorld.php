<?php
namespace RESTAPI\Routes;

/**
 * Pretty basic hello world example for the core api.
 *
 * @author Jan-Hendrik Willms <tleilax+studip@gmail.com>
 * @license GPL2 or any later version
 */
class HelloWorld extends \RESTAPI\RouteMap
{
    /**
     * Initialization
     */
    public static function before()
    {
        // Set up
    }

    /**
     * Say hello. Either to the world or to any one you like!
     *
     * @get /hello
     * @get /hello/:name
     */
    public function say_hello($name = 'World')
    {
        return sprintf('Hello %s!', $name);
    }

    /**
     * Clean up
     */
    public static function after()
    {
        // Tear down
    }
}