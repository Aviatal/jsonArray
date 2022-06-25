<?php

declare(strict_types=1);

namespace App;

class File 
{
    public function getFile(string $path) :string
    {
        return file_get_contents($path, true);;
    }
}
