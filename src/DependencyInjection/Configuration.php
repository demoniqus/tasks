<?php

declare(strict_types=1);

namespace Demoniqus\Tasks\DependencyInjection;

use Demoniqus\Tasks\DemoniqusTasksBundle;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(DemoniqusTasksBundle::BUNDLE);

        return $treeBuilder;
    }
}