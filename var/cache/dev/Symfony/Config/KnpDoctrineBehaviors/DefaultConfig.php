<?php

namespace Symfony\Config\KnpDoctrineBehaviors;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Default'.\DIRECTORY_SEPARATOR.'TicketConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Default'.\DIRECTORY_SEPARATOR.'TemplatesConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefaultConfig 
{
    private $ticket;
    private $templates;
    private $_usedProperties = [];

    public function ticket(array $value = []): \Symfony\Config\KnpDoctrineBehaviors\Default\TicketConfig
    {
        if (null === $this->ticket) {
            $this->_usedProperties['ticket'] = true;
            $this->ticket = new \Symfony\Config\KnpDoctrineBehaviors\Default\TicketConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "ticket()" has already been initialized. You cannot pass values the second time you call ticket().');
        }

        return $this->ticket;
    }

    public function templates(array $value = []): \Symfony\Config\KnpDoctrineBehaviors\Default\TemplatesConfig
    {
        if (null === $this->templates) {
            $this->_usedProperties['templates'] = true;
            $this->templates = new \Symfony\Config\KnpDoctrineBehaviors\Default\TemplatesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "templates()" has already been initialized. You cannot pass values the second time you call templates().');
        }

        return $this->templates;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('ticket', $value)) {
            $this->_usedProperties['ticket'] = true;
            $this->ticket = new \Symfony\Config\KnpDoctrineBehaviors\Default\TicketConfig($value['ticket']);
            unset($value['ticket']);
        }

        if (array_key_exists('templates', $value)) {
            $this->_usedProperties['templates'] = true;
            $this->templates = new \Symfony\Config\KnpDoctrineBehaviors\Default\TemplatesConfig($value['templates']);
            unset($value['templates']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['ticket'])) {
            $output['ticket'] = $this->ticket->toArray();
        }
        if (isset($this->_usedProperties['templates'])) {
            $output['templates'] = $this->templates->toArray();
        }

        return $output;
    }

}
