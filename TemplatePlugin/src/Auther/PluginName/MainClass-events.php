<?php
/*
	License Text
 */
namespace Auther\PluginName;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class MainClass extends PluginBase implements Listener {

	public function onEnable() {
		Server::getInstance()->getPluginManager()->registerEvents($this, $this);
	}

	public function onInteract(PlayerInteractEvent $event) {
		$player = $event->getPlayer();
		$player->sendMessage("test");
	}

	public function on(Event $event) {
		//codes
	}
}