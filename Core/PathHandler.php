<?php

namespace Engine;

class PathHandler
{
    /**
     * replace all </> slashes to <\> backslashes
     *
     * @param string $string
     * @return string|null
     */
    public function revertToBackSlashes(string|array $subject): string|array
    {
        if (is_array($subject)) {
            foreach($subject as $record) {
                $record = preg_replace('/\//', '\\', $record, -1);
                $simpleArray[] = $record;
            }

            return $simpleArray;
        }

        if (is_string($subject)) {

            return preg_replace('/\//', '\\', $subject, -1);
        }

        echo __FUNCTION__ . " is get incorrect param. Param has need string or array. get:" . PHP_EOL;
        var_dump($subject);
    }

    /**
     * remove dot and all words after
     *
     * @param array|string $data
     * @return array|string|string[]|void
     */
    public function removeAfterDot(array|string $data)
    {
        $simpleArray = [];

        if (is_array($data)) {
            foreach($data as $record) {
                $record = substr_replace($record , '', strrpos($record , '.'));
                $simpleArray[] = $record;
            }

            return $simpleArray;
        }

        if (is_string($data)) {

            return substr_replace($data , '', strrpos($data , '.'));
        }
    }

    /**
     * remove first param in string and removing 1 backslash after word
     *
     * @param string|array $subject
     * @param string $word
     * @return string|array|null
     */
    public function removeWordAndBackslashAfter(string|array $subject, string $word ): string|array|null
    {
        $simpleArray = [];

        if (is_string($subject)) {

            return preg_replace("/{$word}\\\/", '', $subject, -1);
        }

        if (is_array($subject)) {
            foreach($subject as $item) {
                $simpleArray[] = preg_replace("/{$word}\\\/", '', $subject, -1);
            }

            return $simpleArray;
        }

        return null;
    }

    /**
     * return param where only first symbol with uppercase
     *
     * @param string $taskname
     * @return string
     */
    public function setFirstToUpper(string $taskname): string
    {
        $taskname = mb_strtolower($taskname);

        return ucfirst($taskname);
    }
}