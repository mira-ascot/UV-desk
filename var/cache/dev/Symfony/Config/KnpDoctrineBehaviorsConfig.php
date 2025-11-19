<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpDoctrineBehaviors'.\DIRECTORY_SEPARATOR.'UploadManagerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpDoctrineBehaviors'.\DIRECTORY_SEPARATOR.'SupportEmailConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpDoctrineBehaviors'.\DIRECTORY_SEPARATOR.'DefaultConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class KnpDoctrineBehaviorsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $siteUrl;
    private $uploadManager;
    private $supportEmail;
    private $default;
    private $_usedProperties = [];

    /**
     * @default '127.0.0.1'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function siteUrl($value): self
    {
        $this->_usedProperties['siteUrl'] = true;
        $this->siteUrl = $value;

        return $this;
    }

    public function uploadManager(array $value = []): \Symfony\Config\KnpDoctrineBehaviors\UploadManagerConfig
    {
        if (null === $this->uploadManager) {
            $this->_usedProperties['uploadManager'] = true;
            $this->uploadManager = new \Symfony\Config\KnpDoctrineBehaviors\UploadManagerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "uploadManager()" has already been initialized. You cannot pass values the second time you call uploadManager().');
        }

        return $this->uploadManager;
    }

    public function supportEmail(array $value = []): \Symfony\Config\KnpDoctrineBehaviors\SupportEmailConfig
    {
        if (null === $this->supportEmail) {
            $this->_usedProperties['supportEmail'] = true;
            $this->supportEmail = new \Symfony\Config\KnpDoctrineBehaviors\SupportEmailConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "supportEmail()" has already been initialized. You cannot pass values the second time you call supportEmail().');
        }

        return $this->supportEmail;
    }

    public function default(array $value = []): \Symfony\Config\KnpDoctrineBehaviors\DefaultConfig
    {
        if (null === $this->default) {
            $this->_usedProperties['default'] = true;
            $this->default = new \Symfony\Config\KnpDoctrineBehaviors\DefaultConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "default()" has already been initialized. You cannot pass values the second time you call default().');
        }

        return $this->default;
    }

    public function getExtensionAlias(): string
    {
        return 'knp_doctrine_behaviors';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('site_url', $value)) {
            $this->_usedProperties['siteUrl'] = true;
            $this->siteUrl = $value['site_url'];
            unset($value['site_url']);
        }

        if (array_key_exists('upload_manager', $value)) {
            $this->_usedProperties['uploadManager'] = true;
            $this->uploadManager = new \Symfony\Config\KnpDoctrineBehaviors\UploadManagerConfig($value['upload_manager']);
            unset($value['upload_manager']);
        }

        if (array_key_exists('support_email', $value)) {
            $this->_usedProperties['supportEmail'] = true;
            $this->supportEmail = new \Symfony\Config\KnpDoctrineBehaviors\SupportEmailConfig($value['support_email']);
            unset($value['support_email']);
        }

        if (array_key_exists('default', $value)) {
            $this->_usedProperties['default'] = true;
            $this->default = new \Symfony\Config\KnpDoctrineBehaviors\DefaultConfig($value['default']);
            unset($value['default']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['siteUrl'])) {
            $output['site_url'] = $this->siteUrl;
        }
        if (isset($this->_usedProperties['uploadManager'])) {
            $output['upload_manager'] = $this->uploadManager->toArray();
        }
        if (isset($this->_usedProperties['supportEmail'])) {
            $output['support_email'] = $this->supportEmail->toArray();
        }
        if (isset($this->_usedProperties['default'])) {
            $output['default'] = $this->default->toArray();
        }

        return $output;
    }

}
