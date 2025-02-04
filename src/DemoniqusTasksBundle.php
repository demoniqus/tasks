<?php

declare(strict_types=1);

/*
 * This file is part of the package.
 *
 * Developer list:
 * (c) Dmitry Antipov <demoniqus@mail.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
