<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Mutable;

use Demoniqus\Tasks\ValueObject\Immutable\DataTrait as ImmutableDataTrait;
use Demoniqus\Tasks\ValueObject\Mutable\Common\TaskInterface;

trait DataTrait
{
    use ImmutableDataTrait;

    public function setData($data): TaskInterface
    {
        $this->data = $data;

        return $this;
    }

}