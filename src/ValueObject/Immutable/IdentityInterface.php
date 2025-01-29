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

interface IdentityInterface
{
    public const IDENTITY = 'identity';

    public function hasIdentity(): bool;

    public function getIdentity(): string;
}
