<?php

/**
 * Simpla - Just a simple Framework
 *  
 * The MIT License (MIT)
 * For full copyright and license information, please see the LICENSE file
 * 
 * @link          [Site-Simpla]
 * @since         1.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

namespace Simpla\Http\Router\Contract;


/**
 * Routing sytem
 * 
 * @package Simpla
 * @subpackage Router
 * @author robert <robert.di.jesus@gmail.com>
 * @version 1.0.0
 */
interface RouterInterface
{
    /**
     * Create Route to GET method
     * 
     * @param string $route Route name
     * @param string|closure $callable 
     * @return void|object
     */
    public function get($route, $callable);
    
    /**
     * Create Route to POST method
     * 
     * @param string $route Route name
     * @param string|closure $callable 
     * @return void|object
     */
    public function post($route, $callable);
    
    /**
     * Create Route to PUT method
     * 
     * @param string $route Route name
     * @param string|closure $callable 
     * @return void|object
     */
    public function put($route, $callable);    
     
    /**
     * Create Route to DELETE method
     * 
     * @param string $route Route name
     * @param string|closure $callable 
     * @return void|object
     */
    public function delete($route, $callable);
 
    /**
     * Create Route to PATH method
     * 
     * @param string $route Route name
     * @param string|closure $callable 
     * @return void|object
     */
    public function patch($route, $callable);  

    /**
     * Create Route to any method
     * 
     * @param string $route Route name
     * @param string|closure $callable 
     * @return void|object
     */
    public function any($route, $callable);   
    
    /**
     * Create Route to match method
     * 
     * @param array $methods 
     * @param string $route Route name
     * @param string|closure $callable 
     * @return void|object
     */
    public function match(array $methods, $route, $callable);    
    
    public function controller($routerName, $controllerSignature, $namesRoute = []);
    
    public function redirect($route, $to);
    
    public function group($callable);
    
    public function prefix($name);
    
    public function where($param, $value = null);
    
    public function name($name);
    
    public function middleware($middleware);
    
    public function run();
    
    public function link($name);
}
