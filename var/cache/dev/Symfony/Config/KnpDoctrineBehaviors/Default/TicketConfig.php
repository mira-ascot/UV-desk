<?php

namespace Symfony\Config\KnpDoctrineBehaviors\Default;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TicketConfig 
{
    private $type;
    private $status;
    private $priority;
    private $_usedProperties = [];

    /**
     * @default 'support'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @default 'open'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function status($value): self
    {
        $this->_usedProperties['status'] = true;
        $this->status = $value;

        return $this;
    }

    /**
     * @default 'low'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function priority($value): self
    {
        $this->_usedProperties['priority'] = true;
        $this->priority = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('status', $value)) {
            $this->_usedProperties['status'] = true;
            $this->status = $value['status'];
            unset($value['status']);
        }

        if (array_key_exists('priority', $value)) {
            $this->_usedProperties['priority'] = true;
            $this->priority = $value['priority'];
            unset($value['priority']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['status'])) {
            $output['status'] = $this->status;
        }
        if (isset($this->_usedProperties['priority'])) {
            $output['priority'] = $this->priority;
        }

        return $output;
    }

}
