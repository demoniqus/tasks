<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\Factory;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\UtilsBundle\Entity\IdInterface;

interface FactoryTasksInterface
{
    /**
     * @param DtoInterface|IdInterface $object
     * @return array
     */
    public function createTasks($object): array;

}