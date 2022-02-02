<?php

class Tyre
{
    private string $position;
    private int $condition;

    public function __construct(string $position, int $condition = 100)
    {
        $this->position = $position;
        $this->condition = $condition;
    }

    public function changeCondition(int $percent): void
    {
        $this->condition -= $percent;
    }

    public function getCondition(): int
    {
        return $this->condition;
    }
    public function getPosition(): string
    {
        return $this->position;
    }
}
