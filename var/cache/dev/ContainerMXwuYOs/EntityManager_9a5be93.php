<?php

namespace ContainerMXwuYOs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getConnection', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getMetadataFactory', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getExpressionBuilder', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'beginTransaction', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getCache', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getCache();
    }

    public function transactional($func)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'transactional', array('func' => $func), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'wrapInTransaction', array('func' => $func), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'commit', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->commit();
    }

    public function rollback()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'rollback', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getClassMetadata', array('className' => $className), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'createQuery', array('dql' => $dql), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'createNamedQuery', array('name' => $name), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'createQueryBuilder', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'flush', array('entity' => $entity), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'clear', array('entityName' => $entityName), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->clear($entityName);
    }

    public function close()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'close', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->close();
    }

    public function persist($entity)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'persist', array('entity' => $entity), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'remove', array('entity' => $entity), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'detach', array('entity' => $entity), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'merge', array('entity' => $entity), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getRepository', array('entityName' => $entityName), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'contains', array('entity' => $entity), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getEventManager', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getConfiguration', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'isOpen', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getUnitOfWork', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getProxyFactory', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'initializeObject', array('obj' => $obj), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'getFilters', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'isFiltersStateClean', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, 'hasFilters', array(), $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        return $this->valueHolderb4556->hasFilters();
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

        $instance->initializer74bae = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderb4556) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb4556 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb4556->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer74bae && ($this->initializer74bae->__invoke($valueHolderb4556, $this, '__get', ['name' => $name], $this->initializer74bae) || 1) && $this->valueHolderb4556 = $valueHolderb4556;

        if (isset(self::$publicPropertiese769a[$name])) {
            return $this->valueHolderb4556->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
