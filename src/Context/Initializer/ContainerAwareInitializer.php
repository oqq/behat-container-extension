<?php declare(strict_types = 1);

namespace Oqq\BehatContainerExtension\Context\Initializer;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\Initializer\ContextInitializer;
use Interop\Container\ContainerInterface;
use Oqq\BehatContainerExtension\Context\ContainerAwareContext;

final class ContainerAwareInitializer implements ContextInitializer
{
    private $container;

    function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function initializeContext(Context $context): void
    {
        if ($context instanceof ContainerAwareContext) {
            $context->setContainer($this->container);
        }
    }
}
