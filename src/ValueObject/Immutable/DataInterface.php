<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Immutable;

interface DataInterface
{
    public const DATA = 'date';

    public function hasData(): bool;

    public function getData();
}