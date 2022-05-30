<?php

namespace Container8D7KTom;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Persister/ObjectManagerPersister.php';

class ObjectManagerPersister_eccc052 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfa5a8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerac4d6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaa9a7 = [
        
    ];

    public function persist(object $object) : void
    {
        $this->initializerac4d6 && ($this->initializerac4d6->__invoke($valueHolderfa5a8, $this, 'persist', array('object' => $object), $this->initializerac4d6) || 1) && $this->valueHolderfa5a8 = $valueHolderfa5a8;

        $this->valueHolderfa5a8->persist($object);
return;
    }

    public function flush() : void
    {
        $this->initializerac4d6 && ($this->initializerac4d6->__invoke($valueHolderfa5a8, $this, 'flush', array(), $this->initializerac4d6) || 1) && $this->valueHolderfa5a8 = $valueHolderfa5a8;

        $this->valueHolderfa5a8->flush();
return;
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $instance, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($instance);

        $instance->initializerac4d6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Persistence\ObjectManager $manager)
    {
        static $reflection;

        if (! $this->valueHolderfa5a8) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');
            $this->valueHolderfa5a8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);

        }

        $this->valueHolderfa5a8->__construct($manager);
    }

    public function & __get($name)
    {
        $this->initializerac4d6 && ($this->initializerac4d6->__invoke($valueHolderfa5a8, $this, '__get', ['name' => $name], $this->initializerac4d6) || 1) && $this->valueHolderfa5a8 = $valueHolderfa5a8;

        if (isset(self::$publicPropertiesaa9a7[$name])) {
            return $this->valueHolderfa5a8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa5a8;

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

        $targetObject = $this->valueHolderfa5a8;
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
        $this->initializerac4d6 && ($this->initializerac4d6->__invoke($valueHolderfa5a8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerac4d6) || 1) && $this->valueHolderfa5a8 = $valueHolderfa5a8;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa5a8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfa5a8;
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
        $this->initializerac4d6 && ($this->initializerac4d6->__invoke($valueHolderfa5a8, $this, '__isset', array('name' => $name), $this->initializerac4d6) || 1) && $this->valueHolderfa5a8 = $valueHolderfa5a8;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa5a8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfa5a8;
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
        $this->initializerac4d6 && ($this->initializerac4d6->__invoke($valueHolderfa5a8, $this, '__unset', array('name' => $name), $this->initializerac4d6) || 1) && $this->valueHolderfa5a8 = $valueHolderfa5a8;

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfa5a8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfa5a8;
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
        $this->initializerac4d6 && ($this->initializerac4d6->__invoke($valueHolderfa5a8, $this, '__clone', array(), $this->initializerac4d6) || 1) && $this->valueHolderfa5a8 = $valueHolderfa5a8;

        $this->valueHolderfa5a8 = clone $this->valueHolderfa5a8;
    }

    public function __sleep()
    {
        $this->initializerac4d6 && ($this->initializerac4d6->__invoke($valueHolderfa5a8, $this, '__sleep', array(), $this->initializerac4d6) || 1) && $this->valueHolderfa5a8 = $valueHolderfa5a8;

        return array('valueHolderfa5a8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister $instance) {
            unset($instance->objectManager, $instance->persistableClasses, $instance->metadataToRestore, $instance->objectChecked, $instance->unitOfWorkPersistersReflection);
        }, $this, 'Fidry\\AliceDataFixtures\\Bridge\\Doctrine\\Persister\\ObjectManagerPersister')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerac4d6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerac4d6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerac4d6 && ($this->initializerac4d6->__invoke($valueHolderfa5a8, $this, 'initializeProxy', array(), $this->initializerac4d6) || 1) && $this->valueHolderfa5a8 = $valueHolderfa5a8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfa5a8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfa5a8;
    }
}

if (!\class_exists('ObjectManagerPersister_eccc052', false)) {
    \class_alias(__NAMESPACE__.'\\ObjectManagerPersister_eccc052', 'ObjectManagerPersister_eccc052', false);
}
