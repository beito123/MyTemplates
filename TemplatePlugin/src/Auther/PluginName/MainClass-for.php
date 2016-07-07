<?php
/*
	License Text
 */
namespace Auther\PluginName;

use pocketmine\plugin\PluginBase;

class MainClass extends PluginBase {

	public function onEnable() {
		$this->checkSupported();
	}

	public function checkSupported() {
		switch(strtolower(Server::getInstance()->getName())){
			case "pocketmine-mp"://PMMP original
				$this->getLogger()->notice("supported!");
				break;
			case "genisys"://Genisys
				$this->getLogger()->notice("supported!");
				break;
			case "clearsky"://Clearsky
				$this->getLogger()->notice("supported!");
				break;
			default:
				$this->getLogger()->notice("sorry, this pmmp is not supported.");

				Server::getInstance()->getPluginManager()->disablePlugin($this);
				break;
		}
	}
}