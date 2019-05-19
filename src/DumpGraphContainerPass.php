<?php

namespace App;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Dumper\GraphvizDumper;

class DumpGraphContainerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $parameterEnable = 'container.dumper.graphivz.enable';
        $parameterFile = 'container.dumper.graphivz.file';

        if (!$container->hasParameter($parameterEnable)) {
            $container->setParameter($parameterEnable, false);
        }

        if (!$container->hasParameter($parameterFile)) {
            $container->setParameter($parameterFile, $container->getParameter('kernel.cache_dir').'/container.dot');
        }

        if (!$container->getParameter($parameterEnable)) {
            return;
        }

        \file_put_contents($container->getParameter($parameterFile), (new GraphvizDumper($container))->dump());
    }
}
