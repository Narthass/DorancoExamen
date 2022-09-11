<?php

namespace ContainerEqbbFDx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0b3da = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6c66c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties22e2d = [
        
    ];

    public function getConnection()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getConnection', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getMetadataFactory', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getExpressionBuilder', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'beginTransaction', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getCache', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'transactional', array('func' => $func), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'commit', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->commit();
    }

    public function rollback()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'rollback', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getClassMetadata', array('className' => $className), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'createQuery', array('dql' => $dql), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'createNamedQuery', array('name' => $name), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'createQueryBuilder', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'flush', array('entity' => $entity), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'clear', array('entityName' => $entityName), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->clear($entityName);
    }

    public function close()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'close', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->close();
    }

    public function persist($entity)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'persist', array('entity' => $entity), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'remove', array('entity' => $entity), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'refresh', array('entity' => $entity), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'detach', array('entity' => $entity), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'merge', array('entity' => $entity), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'contains', array('entity' => $entity), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getEventManager', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getConfiguration', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'isOpen', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getUnitOfWork', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getProxyFactory', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'initializeObject', array('obj' => $obj), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'getFilters', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'isFiltersStateClean', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'hasFilters', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return $this->valueHolder0b3da->hasFilters();
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

        $instance->initializer6c66c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0b3da) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0b3da = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0b3da->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, '__get', ['name' => $name], $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        if (isset(self::$publicProperties22e2d[$name])) {
            return $this->valueHolder0b3da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b3da;

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

        $targetObject = $this->valueHolder0b3da;
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
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b3da;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0b3da;
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
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, '__isset', array('name' => $name), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b3da;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0b3da;
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
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, '__unset', array('name' => $name), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b3da;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0b3da;
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
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, '__clone', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        $this->valueHolder0b3da = clone $this->valueHolder0b3da;
    }

    public function __sleep()
    {
        $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, '__sleep', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;

        return array('valueHolder0b3da');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6c66c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6c66c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6c66c && ($this->initializer6c66c->__invoke($valueHolder0b3da, $this, 'initializeProxy', array(), $this->initializer6c66c) || 1) && $this->valueHolder0b3da = $valueHolder0b3da;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0b3da;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0b3da;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
