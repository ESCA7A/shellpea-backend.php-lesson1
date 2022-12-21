<?php

namespace Engine;

use Engine\ClassReader;
use Engine\PathHandler;
use Shellpea\DeskInterface;

class ObjectManager
{
    static public function create(string $class): void
    {
        $pathHandler = new PathHandler();
        $classReader = new ClassReader($pathHandler);
        $classPath = array_search($class, $classReader->list);

        if(is_numeric($class)) {
            $reverseArray = array_flip($classReader->list);
            $reverseArray = array_values($reverseArray);
            $class = new $reverseArray[$class - 1];
            $class->magicCallMethod();

        } elseif ($classPath) {
            $class = new $classPath();
            $class->magicCallMethod();

        } else {
            echo DeskInterface::MISSING_TASK_MESSAGE;
        }
    }
}