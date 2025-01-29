<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\Dto;

use Demoniqus\Tasks\ValueObject\Immutable\Common\TaskInterface as ImmutableTaskInterface;
use Demoniqus\Tasks\ValueObject\Mutable\Common\TaskInterface as MutableTaskInterface;
use Evrinoma\DtoBundle\Dto\DtoInterface;

interface TaskDtoInterface extends DtoInterface, MutableTaskInterface, ImmutableTaskInterface
{
    public const TASK = 'task';
    public const TASKS = 'tasks';

}