<?php

namespace ContainerKhrymj7;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder40d84 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf4bb8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf53a7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getConnection', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getMetadataFactory', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getExpressionBuilder', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'beginTransaction', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getCache', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'transactional', array('func' => $func), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'commit', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->commit();
    }

    public function rollback()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'rollback', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getClassMetadata', array('className' => $className), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'createQuery', array('dql' => $dql), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'createNamedQuery', array('name' => $name), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'createQueryBuilder', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'flush', array('entity' => $entity), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'clear', array('entityName' => $entityName), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->clear($entityName);
    }

    public function close()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'close', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->close();
    }

    public function persist($entity)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'persist', array('entity' => $entity), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'remove', array('entity' => $entity), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'refresh', array('entity' => $entity), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'detach', array('entity' => $entity), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'merge', array('entity' => $entity), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'contains', array('entity' => $entity), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getEventManager', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getConfiguration', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'isOpen', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getUnitOfWork', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getProxyFactory', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'initializeObject', array('obj' => $obj), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'getFilters', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'isFiltersStateClean', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'hasFilters', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return $this->valueHolder40d84->hasFilters();
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

        $instance->initializerf4bb8 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder40d84) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder40d84 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder40d84->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, '__get', ['name' => $name], $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        if (isset(self::$publicPropertiesf53a7[$name])) {
            return $this->valueHolder40d84->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d84;

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

        $targetObject = $this->valueHolder40d84;
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
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d84;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder40d84;
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
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, '__isset', array('name' => $name), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d84;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder40d84;
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
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, '__unset', array('name' => $name), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder40d84;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder40d84;
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
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, '__clone', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        $this->valueHolder40d84 = clone $this->valueHolder40d84;
    }

    public function __sleep()
    {
        $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, '__sleep', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;

        return array('valueHolder40d84');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf4bb8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf4bb8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf4bb8 && ($this->initializerf4bb8->__invoke($valueHolder40d84, $this, 'initializeProxy', array(), $this->initializerf4bb8) || 1) && $this->valueHolder40d84 = $valueHolder40d84;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder40d84;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder40d84;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
