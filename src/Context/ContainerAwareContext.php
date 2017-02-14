<?php declare(strict_types = 1);

namespace Oqq\BehatContainerExtension\Context;

use Behat\Behat\Context\Context;
use Interop\Container\ContainerInterface;

interface ContainerAwareContext extends Context
{
    public function setContainer(ContainerInterface $container): void;
}
