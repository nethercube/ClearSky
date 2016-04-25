<?php

namespace pocketmine\level\ai;

use pocketmine\Server;
use pocketmine\level\Level;
use pocketmine\scheduler\AsyncTask;
use pocketmine\entity\ai\AIManager;

class MoveCalculaterTask extends AsyncTask{
	private $server;
	private $levelId;
	private $entityId;
	private $entityType;

	public function __construct(Level $level, $levelId, $entityId, $entityType){
		$this->server = $level;
		$this->levelId = $levelId;
		$this->entityId = $entityId;
		$this->entityType = $entityType;
	}

	public function onRun(){
		// $rs = "LevelId: ".$this->levelId." EntityId: ".$this->entityId." EntityType: ".$this->entityType;
		$entity = $this->server->getEntity($this->entityId);
		// AIManager::calculateMovement($entity);
		$x = $entity->x;
		$y = $entity->y;
		$z = $entity->z;
		$yaw = $entity->yaw;
		$pitch = $entity->pitch;
		$rs = ['id' => $this->entityId, 'x' => $x, 'y' => $y, 'z' => $z, 'yaw' => $yaw, 'pitch' => $pitch];
		$this->setResult($rs, false);
	}

	public function onCompletion(Server $server){
		$ai = $server->getLevel($this->levelId)->getAI();
		if($ai instanceof AI and $this->hasResult()){
			$ai->moveCalculationCallback($this->getResult());
		}
	}
}