<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Immutable;


trait DataTrait
{
    protected $data = null;


    public function hasData(): bool
    {
        return $this->data !== null;
    }

    public function getData()
    {
        return $this->data;
    }


}