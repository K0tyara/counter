<?php

namespace Kotyara\Counter;

class CounterService
{
    protected string $title = 'This counter value -> ';

    protected int $value = 0;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->title . $this->value;
    }
}
