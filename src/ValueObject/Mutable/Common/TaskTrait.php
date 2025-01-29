<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Mutable\Common;

use Demoniqus\Tasks\ValueObject\Immutable\Common\TaskTrait as ImmutableTaskTrait;
use Demoniqus\Tasks\ValueObject\Mutable\DataTrait;
use Demoniqus\Tasks\ValueObject\Mutable\IdentityTrait;

trait TaskTrait
{
    use ImmutableTaskTrait;
    use DataTrait;
    use IdentityTrait;
}