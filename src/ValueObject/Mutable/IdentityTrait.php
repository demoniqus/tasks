<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Mutable;

use Demoniqus\Tasks\ValueObject\Immutable\IdentityTrait as ImmutableIdentityTrait;
use Demoniqus\Tasks\ValueObject\Mutable\Common\TaskInterface;

trait IdentityTrait
{
    use ImmutableIdentityTrait;

    public function setIdentity(string $identity): TaskInterface
    {
        $this->identity = $identity;

        return $this;
    }

}