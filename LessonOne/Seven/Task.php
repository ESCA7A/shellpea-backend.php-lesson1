<?php

namespace Shellpea\Seven;

use Shellpea\Desc;
use Shellpea\Decorator;
use Shellpea\TaskInterface;

class Task extends Desc
{
    const CIRCLE_PHRASE = PHP_EOL . "Enter the area of the circle: ";
    const SQUAD_PHRASE = PHP_EOL . "Enter the area of the squad: ";

    public function __call($name, $arguments)
    {
        echo TaskInterface::TASK_SEVEN;
        return $this->calculate();
    }

    private function calculate(): void
    {
        echo ($this->getCircleDiameter() >= $this->getSquadDiagonal())
            ? Decorator::getAnswerBorder("квадрат поместиться в круге")
            : Decorator::getAnswerBorder("круг поместиться в квадрате");
    }

    private function getCircleDiameter(): ?int
    {
        $area = (int) readline(self::CIRCLE_PHRASE);
        return  2 * sqrt($area / M_PI);
    }

    private function getSquadDiagonal(): ?int
    {
        $squadArea =  (int) readline(self::SQUAD_PHRASE);
        return sqrt(2 * $squadArea);
    }
}