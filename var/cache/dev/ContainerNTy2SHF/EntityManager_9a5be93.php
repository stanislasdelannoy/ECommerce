<?php

namespace ContainerNTy2SHF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder53583 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc6c0f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa2e7f = [
        
    ];

    public function getConnection()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getConnection', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getMetadataFactory', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getExpressionBuilder', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'beginTransaction', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getCache', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'transactional', array('func' => $func), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'commit', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->commit();
    }

    public function rollback()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'rollback', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getClassMetadata', array('className' => $className), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'createQuery', array('dql' => $dql), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'createNamedQuery', array('name' => $name), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'createQueryBuilder', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'flush', array('entity' => $entity), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'clear', array('entityName' => $entityName), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->clear($entityName);
    }

    public function close()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'close', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->close();
    }

    public function persist($entity)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'persist', array('entity' => $entity), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'remove', array('entity' => $entity), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'refresh', array('entity' => $entity), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'detach', array('entity' => $entity), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'merge', array('entity' => $entity), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'contains', array('entity' => $entity), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getEventManager', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getConfiguration', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'isOpen', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getUnitOfWork', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getProxyFactory', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'initializeObject', array('obj' => $obj), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'getFilters', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'isFiltersStateClean', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'hasFilters', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return $this->valueHolder53583->hasFilters();
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

        $instance->initializerc6c0f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder53583) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder53583 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder53583->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, '__get', ['name' => $name], $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        if (isset(self::$publicPropertiesa2e7f[$name])) {
            return $this->valueHolder53583->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53583;

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

        $targetObject = $this->valueHolder53583;
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
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53583;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder53583;
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
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, '__isset', array('name' => $name), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53583;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder53583;
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
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, '__unset', array('name' => $name), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53583;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder53583;
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
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, '__clone', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        $this->valueHolder53583 = clone $this->valueHolder53583;
    }

    public function __sleep()
    {
        $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, '__sleep', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;

        return array('valueHolder53583');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc6c0f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc6c0f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc6c0f && ($this->initializerc6c0f->__invoke($valueHolder53583, $this, 'initializeProxy', array(), $this->initializerc6c0f) || 1) && $this->valueHolder53583 = $valueHolder53583;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder53583;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder53583;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
