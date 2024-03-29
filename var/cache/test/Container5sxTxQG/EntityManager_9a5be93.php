<?php

namespace Container5sxTxQG;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2857 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer641ba = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc4f78 = [
        
    ];

    public function getConnection()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getConnection', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getMetadataFactory', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getExpressionBuilder', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'beginTransaction', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getCache', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getCache();
    }

    public function transactional($func)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'transactional', array('func' => $func), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'wrapInTransaction', array('func' => $func), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'commit', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->commit();
    }

    public function rollback()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'rollback', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getClassMetadata', array('className' => $className), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'createQuery', array('dql' => $dql), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'createNamedQuery', array('name' => $name), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'createQueryBuilder', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'flush', array('entity' => $entity), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'clear', array('entityName' => $entityName), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->clear($entityName);
    }

    public function close()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'close', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->close();
    }

    public function persist($entity)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'persist', array('entity' => $entity), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'remove', array('entity' => $entity), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'refresh', array('entity' => $entity), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'detach', array('entity' => $entity), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'merge', array('entity' => $entity), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getRepository', array('entityName' => $entityName), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'contains', array('entity' => $entity), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getEventManager', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getConfiguration', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'isOpen', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getUnitOfWork', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getProxyFactory', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'initializeObject', array('obj' => $obj), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'getFilters', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'isFiltersStateClean', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'hasFilters', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return $this->valueHolderf2857->hasFilters();
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

        $instance->initializer641ba = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf2857) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf2857 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf2857->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, '__get', ['name' => $name], $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        if (isset(self::$publicPropertiesc4f78[$name])) {
            return $this->valueHolderf2857->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2857;

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

        $targetObject = $this->valueHolderf2857;
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
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2857;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2857;
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
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, '__isset', array('name' => $name), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2857;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf2857;
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
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, '__unset', array('name' => $name), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2857;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf2857;
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
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, '__clone', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        $this->valueHolderf2857 = clone $this->valueHolderf2857;
    }

    public function __sleep()
    {
        $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, '__sleep', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;

        return array('valueHolderf2857');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer641ba = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer641ba;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer641ba && ($this->initializer641ba->__invoke($valueHolderf2857, $this, 'initializeProxy', array(), $this->initializer641ba) || 1) && $this->valueHolderf2857 = $valueHolderf2857;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2857;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf2857;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
