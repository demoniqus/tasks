<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Mutable;




use Demoniqus\Tasks\ValueObject\Mutable\Common\TaskInterface;

interface IdentityInterface
{
    public function setIdentity(string $identity): TaskInterface;
}