<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Immutable;

interface IdentityInterface
{
    public const IDENTITY = 'identity';

    public function hasIdentity(): bool;

    public function getIdentity(): string;
}