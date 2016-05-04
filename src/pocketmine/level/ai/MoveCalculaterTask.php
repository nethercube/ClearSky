<?php

namespace pocketmine\level\ai;

use pocketmine\Server;
use pocketmine\level\Level;
use pocketmine\scheduler\AsyncTask;
use pocketmine\entity\ai\AIManager;

class MoveCalculaterTask extends AsyncTask{
	private $server;
	private $level;
	private $levelId;
	private $entityId;
	private $entityType;

	public function __construct(Level $level, $levelId, $entityId, $entityType){
		$this->level = $level;
		$this->levelId = $levelId;
		$this->server = $level->getServer();
		$this->entityId = $entityId;
		$this->entityType = $entityType;
	}

	public function onRun(){
		#$rs = "LevelId: ".$this->levelId." EntityId: ".$this->entityId." EntityType: ".$this->entityType;
		#$entity = $this->level->getEntity($this->entityId);
		#print_r($entity);
		// AIManager::calculateMovement($entity);
		#$x = $entity->x + 1;
		#$y = $entity->y + 1;
		#$z = $entity->z + 1;
		$x = $y = $z = 0;
		$rs = "['id' => $this->entityId, 'x' => $x, 'y' => $y, 'z' => $z]";
		#$this->setResult($rs, false);
		echo $rs;
	}

	#public function onCompletion(Server $server){
		#$ai = $server->getLevel($this->levelId)->getAI();
		#if($ai instanceof AI and $this->hasResult()){
		#	$ai->moveCalculationCallback($this->getResult());
		#}
	#}
}