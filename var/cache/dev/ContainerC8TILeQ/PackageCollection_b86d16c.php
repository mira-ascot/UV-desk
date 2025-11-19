<?php

namespace ContainerC8TILeQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'uvdesk'.\DIRECTORY_SEPARATOR.'extension-framework'.\DIRECTORY_SEPARATOR.'Utils'.\DIRECTORY_SEPARATOR.'PackageCollection.php';

class PackageCollection_b86d16c extends \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2ff5f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer26498 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8d791 = [
        
    ];

    public function organizeCollection()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'organizeCollection', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->organizeCollection();
    }

    public function getQualifiedPackageReference($class) : ?string
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getQualifiedPackageReference', array('class' => $class), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getQualifiedPackageReference($class);
    }

    public function getPackageQualifiedName($id) : ?string
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getPackageQualifiedName', array('id' => $id), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getPackageQualifiedName($id);
    }

    public function getPackageReferenceByQualifiedName($name) : ?string
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getPackageReferenceByQualifiedName', array('name' => $name), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getPackageReferenceByQualifiedName($name);
    }

    public function getCollection()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getCollection', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getCollection();
    }

    public function getPackageByAttributes($vendor, $package)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getPackageByAttributes', array('vendor' => $vendor, 'package' => $package), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getPackageByAttributes($vendor, $package);
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

        $instance->initializer26498 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, \Webkul\UVDesk\ExtensionFrameworkBundle\Definition\MappingResource $mappingResource)
    {
        static $reflection;

        if (! $this->valueHolder2ff5f) {
            $reflection = $reflection ?? new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');
            $this->valueHolder2ff5f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($this);

        }

        $this->valueHolder2ff5f->__construct($container, $mappingResource);
    }

    public function & __get($name)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, '__get', ['name' => $name], $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        if (isset(self::$publicProperties8d791[$name])) {
            return $this->valueHolder2ff5f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ff5f;

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

        $targetObject = $this->valueHolder2ff5f;
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
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ff5f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2ff5f;
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
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, '__isset', array('name' => $name), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ff5f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2ff5f;
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
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, '__unset', array('name' => $name), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        $realInstanceReflection = new \ReflectionClass('Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ff5f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2ff5f;
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
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, '__clone', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        $this->valueHolder2ff5f = clone $this->valueHolder2ff5f;
    }

    public function __sleep()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, '__sleep', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return array('valueHolder2ff5f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Webkul\UVDesk\ExtensionFrameworkBundle\Utils\PackageCollection $instance) {
            unset($instance->packages, $instance->qualifiedPackageNames, $instance->packagesByBaseNamespace, $instance->packagesByQualifiedName, $instance->packagesByQualifiedVendorName, $instance->isOrganized);
        }, $this, 'Webkul\\UVDesk\\ExtensionFrameworkBundle\\Utils\\PackageCollection')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer26498 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer26498;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'initializeProxy', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2ff5f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2ff5f;
    }
}

if (!\class_exists('PackageCollection_b86d16c', false)) {
    \class_alias(__NAMESPACE__.'\\PackageCollection_b86d16c', 'PackageCollection_b86d16c', false);
}
