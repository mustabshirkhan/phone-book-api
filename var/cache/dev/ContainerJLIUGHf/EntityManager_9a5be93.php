<?php

namespace ContainerJLIUGHf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaad5b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer44a29 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc905b = [
        
    ];

    public function getConnection()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getConnection', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getMetadataFactory', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getExpressionBuilder', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'beginTransaction', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getCache', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'transactional', array('func' => $func), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'commit', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->commit();
    }

    public function rollback()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'rollback', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getClassMetadata', array('className' => $className), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'createQuery', array('dql' => $dql), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'createNamedQuery', array('name' => $name), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'createQueryBuilder', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'flush', array('entity' => $entity), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'clear', array('entityName' => $entityName), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->clear($entityName);
    }

    public function close()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'close', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->close();
    }

    public function persist($entity)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'persist', array('entity' => $entity), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'remove', array('entity' => $entity), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'refresh', array('entity' => $entity), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'detach', array('entity' => $entity), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'merge', array('entity' => $entity), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'contains', array('entity' => $entity), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getEventManager', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getConfiguration', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'isOpen', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getUnitOfWork', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getProxyFactory', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'initializeObject', array('obj' => $obj), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'getFilters', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'isFiltersStateClean', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'hasFilters', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->hasFilters();
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

        $instance->initializer44a29 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaad5b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaad5b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaad5b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, '__get', ['name' => $name], $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        if (isset(self::$publicPropertiesc905b[$name])) {
            return $this->valueHolderaad5b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaad5b;

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

        $targetObject = $this->valueHolderaad5b;
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
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaad5b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaad5b;
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
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, '__isset', array('name' => $name), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaad5b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaad5b;
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
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, '__unset', array('name' => $name), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaad5b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaad5b;
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
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, '__clone', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        $this->valueHolderaad5b = clone $this->valueHolderaad5b;
    }

    public function __sleep()
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, '__sleep', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return array('valueHolderaad5b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer44a29 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer44a29;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'initializeProxy', array(), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaad5b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaad5b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
