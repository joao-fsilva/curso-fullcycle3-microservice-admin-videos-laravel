<?php

namespace Core\Domain\Entity\Traits;

use Exception;

trait MethodsMagicsTrait
{
    public function __get(string $name)
    {
        if (isset($this->{$name})) {
            return $this->$name;
        }

        $class = get_class($this);

        throw new Exception("Property {$name} not found in $class");
    }

    public function id(): string
    {
        return (string) $this->id;
    }

    public function createdAt(): string
    {
        return $this->createdAt->format('Y-m-d H:i:s');
    }
}
