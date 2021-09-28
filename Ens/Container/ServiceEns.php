<?php 

namespace Ens\Container;

use Xtreamwayz\Pimple\Container;

class ServiceEns implements IServiceEns
{
    private $container;

    public function __construct()
    {
        $this->container = new Container();
    }

    public function set(string $name, $service)
    {
        $this->container[$name] = $service;
    } 

    public function call(string $name, callable $callback)
    {
        $this->container[$name] = $this->container->factory($callback);
    } 

    public function get(string $name)
    {
       return  $this->container->get($name);
    } 

    public function is(string $name)
    {
        return $this->container->has($name);
    } 
    
}

