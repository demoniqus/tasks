<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\Dto;

use Demoniqus\Tasks\ValueObject\Mutable\Common\TaskTrait;
use Evrinoma\DtoBundle\Dto\AbstractDto;

abstract class AbstractTaskDto extends AbstractDto implements TaskDtoInterface
{
    use TaskTrait;
}