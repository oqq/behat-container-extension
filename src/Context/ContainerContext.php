<?php declare(strict_types = 1);

namespace Oqq\BehatContainerExtension\Context;

use Interop\Container\ContainerInterface;

abstract class ContainerContext implements ContainerAwareContext
{
    /** @var ContainerInterface */
    protected $container;

    final public function setContainer(ContainerInterface $container): void
    {
        $this->container = $container;
    }
}
