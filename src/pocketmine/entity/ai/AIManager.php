<?php

namespace pocketmine\entity\ai;

use pocketmine\entity\Entity;

abstract class AIManager{
	private static $knownAIs = [];

	public function __construct(Entity $entity){
		$this->startAI($entity);
	}

	public function startAI(Entity $entity){}

	public static function registerAIs($aiclassName, $className, $force = false){
		$class = new \ReflectionClass($className);
		if(is_a($className, Entity::class, true) and !$class->isAbstract()){
			if($className::NETWORK_ID !== -1){
				self::$knownAIs[$className::NETWORK_ID] = $className;
			}
			elseif(!$force){
				return false;
			}
			
			self::$knownAIs[$class->getShortName()] = $className;
			self::$shortNames[$className] = $class->getShortName();
			return true;
		}
		
		return false;
	}
}