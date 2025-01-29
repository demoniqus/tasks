<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\Manager\Common;

interface TasksManagerInterface
{
    public function handle(array $tasks): bool;
}