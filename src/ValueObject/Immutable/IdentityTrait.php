<?php

declare(strict_types=1);

/*
 * This file is part of the package.
 *
 * Developer list:
 * (c) Dmitry Antipov <demoniqus@mail.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Demoniqus\Tasks\ValueObject\Immutable;

trait IdentityTrait
{
    protected string $identity = '';

    public function hasIdentity(): bool
    {
        return (bool) trim($this->identity);
    }

    public function getIdentity(): string
    {
        return $this->identity;
    }
}
