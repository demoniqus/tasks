<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\ValueObject\Mutable\Common;

use Demoniqus\Tasks\ValueObject\Mutable\DataInterface;
use Demoniqus\Tasks\ValueObject\Mutable\IdentityInterface;

interface TaskInterface extends DataInterface, IdentityInterface
{

}