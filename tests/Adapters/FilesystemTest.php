<?php

namespace MatthiasMullie\Scrapbook\Tests\Adapters;

use MatthiasMullie\Scrapbook\Exception\Exception;

class FilesystemTest implements AdapterInterface
{
    public function get()
    {
        $path = '/tmp/cache';

        if (!is_writable($path)) {
            throw new Exception($path.' is not writable.');
        }

        return new \MatthiasMullie\Scrapbook\Adapters\Filesystem($path);
    }
}
