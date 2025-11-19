<?php

namespace ContainerC8TILeQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getConnection', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getMetadataFactory', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getExpressionBuilder', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'beginTransaction', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getCache', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'transactional', array('func' => $func), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'commit', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->commit();
    }

    public function rollback()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'rollback', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getClassMetadata', array('className' => $className), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'createQuery', array('dql' => $dql), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'createNamedQuery', array('name' => $name), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'createQueryBuilder', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'flush', array('entity' => $entity), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'clear', array('entityName' => $entityName), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->clear($entityName);
    }

    public function close()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'close', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->close();
    }

    public function persist($entity)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'persist', array('entity' => $entity), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'remove', array('entity' => $entity), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'detach', array('entity' => $entity), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'merge', array('entity' => $entity), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'contains', array('entity' => $entity), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getEventManager', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getConfiguration', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'isOpen', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getUnitOfWork', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getProxyFactory', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'initializeObject', array('obj' => $obj), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'getFilters', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'isFiltersStateClean', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, 'hasFilters', array(), $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        return $this->valueHolder2ff5f->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer26498 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder2ff5f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2ff5f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2ff5f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer26498 && ($this->initializer26498->__invoke($valueHolder2ff5f, $this, '__get', ['name' => $name], $this->initializer26498) || 1) && $this->valueHolder2ff5f = $valueHolder2ff5f;

        if (isset(self::$publicProperties8d791[$name])) {
            return $this->valueHolder2ff5f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
