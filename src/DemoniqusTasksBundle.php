<?php

declare(strict_types=1);

namespace Demoniqus\Tasks;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DemoniqusTasksBundle extends Bundle
{
    public const BUNDLE = 'tasks';

    public function getPath()
    {
        return __DIR__;
    }

}