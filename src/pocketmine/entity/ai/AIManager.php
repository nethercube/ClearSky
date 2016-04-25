<?php

namespace pocketmine\entity\ai;

abstract class AIManager{

	public function __construct(){
		// TODO: enabled from config
		// Base tick
		// Example: Having a wolf.
		// AIManager->registerEntity(Wolf);
		// registering an AI class:
		// WolfAI::class
		// AIManager->registerAI(WolfAI::class)
		// disable ai
		// AIManager->disableAI(Wolf)
	}
}