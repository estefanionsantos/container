<?php 

namespace Belgian\Container;


interface IServiceContainer
{
    public function set(string $name, $service);

    public function call(string $name, callable $callback);

    public function get(string $name);

    public function has(string $name);
}


