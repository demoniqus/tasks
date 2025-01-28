<?php

declare(strict_types=1);

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DemoniqusTasksBundle extends Bundle
{
    public function getPath()
    {
        return __DIR__;
    }

}