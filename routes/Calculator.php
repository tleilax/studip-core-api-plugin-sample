<?php
namespace RESTAPI\Routes;

/**
 * Sample calculator app.
 *
 * @author Jan-Hendrik Willms <tleilax+studip@gmail.com>
 * @license GPL2 or any later version
 */
class Calculator extends \RESTAPI\RouteMap
{
    /**
     * Initialization
     */
    public static function before()
    {
        // Set up
    }

    /**
     * Adds two numbers.
     *
     * @get /add/:a/:b
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * Multiplies two numbers.
     *
     * @get /add/:a/:b
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * Clean up
     */
    public static function after()
    {
        // Tear down
    }
}