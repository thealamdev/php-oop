<?php

class Container
{
    protected array $bindings = [];

    // bind interface → concrete class
    public function bind(string $abstract, string $concrete)
    {
        $this->bindings[$abstract] = $concrete;
    }

    // resolve object
    public function make(string $abstract)
    {
        $concrete = $this->bindings[$abstract] ?? $abstract;

        return $this->build($concrete);
    }

    // build class automatically
    protected function build(string $class)
    {
        $reflection = new ReflectionClass($class);

        $constructor = $reflection->getConstructor();

        if (!$constructor) {
            return new $class;
        }

        $dependencies = [];

        foreach ($constructor->getParameters() as $param) {
            $type = $param->getType();

            if ($type && !$type->isBuiltin()) {
                $dependencies[] = $this->make($type->getName());
            }
        }

        return $reflection->newInstanceArgs($dependencies);
    }
}
