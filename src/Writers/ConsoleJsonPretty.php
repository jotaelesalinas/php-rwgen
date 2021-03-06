<?php
namespace JLSalinas\RWGen\Writers;

use JLSalinas\RWGen\Writer;

class ConsoleJson extends Writer
{
    protected function outputGenerator()
    {
        while (($data = yield) !== null) {
            echo json_encode($data, JSON_PRETTY_PRINT) . PHP_EOL;
        }
    }
}
