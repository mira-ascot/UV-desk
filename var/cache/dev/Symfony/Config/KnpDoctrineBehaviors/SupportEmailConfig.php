<?php

namespace Symfony\Config\KnpDoctrineBehaviors;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SupportEmailConfig 
{
    private $id;
    private $name;
    private $mailerId;
    private $mailerType;
    private $_usedProperties = [];

    /**
     * @default 'support@localhost'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function id($value): self
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;

        return $this;
    }

    /**
     * @default 'UVDesk Community'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): self
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;

        return $this;
    }

    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mailerId($value): self
    {
        $this->_usedProperties['mailerId'] = true;
        $this->mailerId = $value;

        return $this;
    }

    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mailerType($value): self
    {
        $this->_usedProperties['mailerType'] = true;
        $this->mailerType = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('id', $value)) {
            $this->_usedProperties['id'] = true;
            $this->id = $value['id'];
            unset($value['id']);
        }

        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
        }

        if (array_key_exists('mailer_id', $value)) {
            $this->_usedProperties['mailerId'] = true;
            $this->mailerId = $value['mailer_id'];
            unset($value['mailer_id']);
        }

        if (array_key_exists('mailer_type', $value)) {
            $this->_usedProperties['mailerType'] = true;
            $this->mailerType = $value['mailer_type'];
            unset($value['mailer_type']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
        if (isset($this->_usedProperties['mailerId'])) {
            $output['mailer_id'] = $this->mailerId;
        }
        if (isset($this->_usedProperties['mailerType'])) {
            $output['mailer_type'] = $this->mailerType;
        }

        return $output;
    }

}
