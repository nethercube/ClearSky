<?php

namespace pocketmine\entity\ai;

use pocketmine\entity\Entity;

abstract class AIManager{

	public function __construct(Entity $entity){
		$this->startAI($entity);
	}

	public function startAI(Entity $entity){}

		$class = new \ReflectionClass($className);
		if(is_a($className, Entity::class, true) and !$class->isAbstract()){
			if($className::NETWORK_ID !== -1){
			}
			elseif(!$force){
				return false;
			}
			
			self::$shortNames[$className] = $class->getShortName();
			return true;
		}
		
		return false;
	}
}