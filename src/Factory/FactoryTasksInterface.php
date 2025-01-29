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

namespace Demoniqus\Tasks\Factory;

use Evrinoma\DtoBundle\Dto\DtoInterface;
use Evrinoma\UtilsBundle\Entity\IdInterface;

interface FactoryTasksInterface
{
    /**
     * @param  DtoInterface|IdInterface $object
     * @return array
     */
    public function createTasks($object): array;
}
