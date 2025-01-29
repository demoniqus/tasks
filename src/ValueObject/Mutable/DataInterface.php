<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Mutable;



use Demoniqus\Tasks\ValueObject\Mutable\Common\TaskInterface;

interface DataInterface
{
    public function setData($data): TaskInterface;
}