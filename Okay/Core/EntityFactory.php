<?php


namespace Okay\Core;


use Okay\Core\Entity\Entity;
use Psr\Log\LoggerInterface;

class EntityFactory
{

    /**
     * @var LoggerInterface
     */
    private $logger;
    
    private static $objects = [];
    
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function get($class)
    {
        if (!class_exists($class)) {
//prettyDump($class);
            throw new \Exception("Class \"{$class}\" чото не найден");
//prettyDump($class. " is not exists111");
        }

        if (!is_subclass_of($class, Entity::class)) {
            throw new \Exception("Class \"{$class}\" дрлжен быть subclass of \"Okay\Core\Entity\Entity\" class");
        }

        if (empty(self::$objects[$class])) {
            self::$objects[$class] = $this->create($class);
        }

        return self::$objects[$class];
    }

    private function create($class)
    {   
        if ($this->hasEntity($class)) {
            return new $class();
        }

        throw new \Exception("Entity '{$class}' not exists");
    }
    
    private function hasEntity($class) {
        if (!class_exists($class)) {
            $this->logger->critical("Entity '{$class}' not exists");
            return false;
        }
        
        return true;
    }
    
}
