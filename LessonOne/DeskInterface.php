<?php

namespace Shellpea;

interface DeskInterface
{
    const DESCRIPTION = PHP_EOL . "
         +------------------------------------------------------------+
         | здесь собраны ответы на 18 задач в рамках обучающего курса |
         | course organisation: @shellpea <https://shellpea.com>      | 
         | student: @esca7a - Pavel Tankov <pasha.esca1a@gmail.com>   |
         +------------------------------------------------------------+" . PHP_EOL;

    const HELP_MESSAGE = PHP_EOL . "
         +-----------------------------------------------------------------------+
         |   *** что бы посмотреть список задач, введите <list> или <help> ***   |
         +-----------------------------------------------------------------------+" . PHP_EOL;

    const QUIT_MESSAGE = PHP_EOL . "
         +-------------------------------------------------------------------------+
         | *** вы всегда можете закрыть программу сочетанием клавиш <ctrl + c> *** |
         +-------------------------------------------------------------------------+" . PHP_EOL;

    const MISSING_TASK_MESSAGE = PHP_EOL . "
         +------------------------------------------------------------------------------------------------------+
         | Такого задания нет. Скопируйте имя задания полностью.                                                |
         | Это выглядит примерно: 1) <ИмяЗадания>                                                               |
         | Что бы вызвать подсказку со списком задач используйте <help> или <list>                              |
         +------------------------------------------------------------------------------------------------------+" . PHP_EOL;

    const THANKS_MESSAGE = PHP_EOL . "
         +-----------------------------+
         |      THANKS MESSAGE         |
         +-----------------------------+" . PHP_EOL;

    const ERROR_INPUT = PHP_EOL . "
         +-----------------------------+
         | incorrect value. Try again  |
         +-----------------------------+" . PHP_EOL;

    const ACCEPT = PHP_EOL . "
        +---------------+
        |   ПОДХОДИТ    |
        +---------------+" . PHP_EOL;

    const ERROR = PHP_EOL . "
        +------------------+
        |   НЕ ПОДХОДИТ    |
        +------------------+" . PHP_EOL;
}