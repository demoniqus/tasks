<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Immutable\Common;

use Demoniqus\Tasks\ValueObject\Immutable\DataInterface;
use Demoniqus\Tasks\ValueObject\Immutable\IdentityInterface;

interface TaskInterface extends DataInterface, IdentityInterface
{

}