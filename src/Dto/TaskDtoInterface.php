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

namespace Demoniqus\Tasks\Dto;

use Demoniqus\Tasks\ValueObject\Immutable\Common\TaskInterface as ImmutableTaskInterface;
use Demoniqus\Tasks\ValueObject\Mutable\Common\TaskInterface as MutableTaskInterface;
use Evrinoma\DtoBundle\Dto\DtoInterface;

interface TaskDtoInterface extends DtoInterface, MutableTaskInterface, ImmutableTaskInterface
{
    public const TASK = 'task';
    public const TASKS = 'tasks';
}
