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

namespace Demoniqus\Tasks\ValueObject\Mutable\Common;

use Demoniqus\Tasks\ValueObject\Mutable\DataInterface;
use Demoniqus\Tasks\ValueObject\Mutable\IdentityInterface;

interface TaskInterface extends DataInterface, IdentityInterface
{
}
