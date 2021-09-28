<?php 

namespace Ens\Container;

interface IServiceEns
{
    public function set(string $name, $service);

    public function call(string $name, callable $callback);

    public function get(string $name);

    public function is(string $name);
}


