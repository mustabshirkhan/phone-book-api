<?php

namespace ContainerJLIUGHf;
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/SimpleLoader.php';

class SimpleLoader_4473cb1 extends \Fidry\AliceDataFixtures\Loader\SimpleLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Fidry\AliceDataFixtures\Loader\SimpleLoader|null wrapped object, if the proxy is initialized
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

    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        return $this->valueHolderaad5b->load($fixturesFiles, $parameters, $objects, $purgeMode);
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

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($instance);

        $instance->initializer44a29 = $initializer;

        return $instance;
    }

    public function __construct(\Nelmio\Alice\FilesLoaderInterface $fileLoader, ?\Psr\Log\LoggerInterface $logger = null)
    {
        static $reflection;

        if (! $this->valueHolderaad5b) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
            $this->valueHolderaad5b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);

        }

        $this->valueHolderaad5b->__construct($fileLoader, $logger);
    }

    public function & __get($name)
    {
        $this->initializer44a29 && ($this->initializer44a29->__invoke($valueHolderaad5b, $this, '__get', ['name' => $name], $this->initializer44a29) || 1) && $this->valueHolderaad5b = $valueHolderaad5b;

        if (isset(self::$publicPropertiesc905b[$name])) {
            return $this->valueHolderaad5b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');

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

        $realInstanceReflection = new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');

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
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);
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

if (!\class_exists('SimpleLoader_4473cb1', false)) {
    \class_alias(__NAMESPACE__.'\\SimpleLoader_4473cb1', 'SimpleLoader_4473cb1', false);
}
