<?php

namespace ContainerMXwuYOs;
include_once \dirname(__DIR__, 4).'/vendor/uvdesk/extension-framework/Utils/PackageCollection.php';

class PackageCollection_b86d16c extends \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb4556 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer74bae = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese769a = [
        
    ];

    public function organizeCollection()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'organizeCollection', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->organizeCollection();
    }

    public function getQualifiedPackageReference($class) : ?string
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getQualifiedPackageReference', array('class' => $class), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getQualifiedPackageReference($class);
    }

    public function getPackageQualifiedName($id) : ?string
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getPackageQualifiedName', array('id' => $id), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getPackageQualifiedName($id);
    }

    public function getPackageReferenceByQualifiedName($name) : ?string
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getPackageReferenceByQualifiedName', array('name' => $name), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getPackageReferenceByQualifiedName($name);
    }

    public function getCollection()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getCollection', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getCollection();
    }

    public function getPackageByAttributes($vendor, $package)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getPackageByAttributes', array('vendor' => $vendor, 'package' => $package), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getPackageByAttributes($vendor, $package);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $instance, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($instance);

        $instance->initializer74bae = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Webkul\UVDesk\ExtensionFrameworkBundle\Definition\MappingResource $mappingResource)
    {
        static $reflection;

        if (! $this->valueHolderb4556) {
            $reflection = $reflection ?? new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');
            $this->valueHolderb4556 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($this);

        }

        $this->valueHolderb4556->__construct($container, $mappingResource);
    }

    public function & __get($name)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, '__get', ['name' => $name], $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        if (isset(self::$publicPropertiese769a[$name])) {
            return $this->valueHolderb4556->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4556;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb4556;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4556;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb4556;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, '__isset', array('name' => $name), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4556;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb4556;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, '__unset', array('name' => $name), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb4556;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb4556;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, '__clone', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        $this->valueHolderb4556 = clone $this->valueHolderb4556;
    }

    public function __sleep()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, '__sleep', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return array('valueHolderb4556');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer74bae = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer74bae;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'initializeProxy', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb4556;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb4556;
    }
}

if (!\class_exists('PackageCollection_b86d16c', false)) {
    \class_alias(__NAMESPACE__.'\\PackageCollection_b86d16c', 'PackageCollection_b86d16c', false);
}
