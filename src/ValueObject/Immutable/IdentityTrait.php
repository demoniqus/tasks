<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Immutable;



trait IdentityTrait
{
    protected string $identity = '';


    public function hasIdentity(): bool
    {
        return !!trim($this->identity);
    }

    public function getIdentity(): string
    {
        return $this->identity;
    }


}