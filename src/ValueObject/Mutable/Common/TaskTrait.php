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

use Demoniqus\Tasks\ValueObject\Immutable\Common\TaskTrait as ImmutableTaskTrait;
use Demoniqus\Tasks\ValueObject\Mutable\DataTrait;
use Demoniqus\Tasks\ValueObject\Mutable\IdentityTrait;

trait TaskTrait
{
    use DataTrait;
    use IdentityTrait;
    use ImmutableTaskTrait;
}
