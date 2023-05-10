<?php

namespace Kotyara\Counter\src;

class CounterService
{
    protected string $title = 'This counter value -> ';

    protected int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->title . $this->value;
    }
}
