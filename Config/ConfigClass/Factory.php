<?php

declare(strict_types=1);

/**
 * @author Amasty Team
 * @copyright Copyright (c) Amasty (https://www.amasty.com)
 * @package Import-Export Core for Magento 2 (System)
 */

namespace Amasty\ImportExportCore\Config\ConfigClass;

use Amasty\ImportExportCore\Api\Config\ConfigClass\ArgumentInterface;
use Amasty\ImportExportCore\Api\Config\ConfigClass\ConfigClassInterface;
use Magento\Framework\Data\Argument\InterpreterInterface;
use Magento\Framework\ObjectManagerInterface;

class Factory
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * @var InterpreterInterface
     */
    private $argumentInterpreter;

    public function __construct(
        ObjectManagerInterface $objectManager,
        InterpreterInterface $argumentInterpreter
    ) {
        $this->objectManager = $objectManager;
        $this->argumentInterpreter = $argumentInterpreter;
    }

    /**
     * Creates instance based on specified config class
     *
     * @param ConfigClassInterface $configClass
     * @return mixed
     */
    public function createObject(ConfigClassInterface $configClass)
    {
        return $this->objectManager->create(
            $configClass->getName(),
            [
                'config' => $this->prepareArguments(
                    $this->convertArguments($configClass->getArguments())
                )
            ]
        );
    }

    private function prepareArguments(array $arguments): array
    {
        $result = [];
        foreach ($arguments as $key => $argument) {
            $result[$key] = $this->argumentInterpreter->evaluate($argument);
        }

        return $result;
    }

    /**
     * @param ArgumentInterface[] $arguments
     * @return array
     */
    private function convertArguments(array $arguments): array
    {
        $result = [];
        foreach ($arguments as $argument) {
            $argName = $argument->getName();
            $argType = $argument->getType();

            $row = [
                'name' => $argName,
                'xsi:type' => $argType
            ];
            if ($argType === 'array') {
                $row['item'] = $this->convertArguments($argument->getItems());
            } else {
                $row['value'] = $argument->getValue();
            }

            $result[$argName] = $row;
        }

        return $result;
    }
}
