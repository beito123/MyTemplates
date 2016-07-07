<?php
/**
 * (Description)
 * @name (PluginName)
 * @main (Auther)\(PluginName)\MainClass
 * @version 1.0.0
 * @api 2.0.0
 * @author (Auther)
 */
namespace Auther\PluginName {//fix
	use pocketmine\event\Listener;
	use pocketmine\event\player\PlayerInteractEvent;
	use pocketmine\plugin\PluginBase;
	use pocketmine\Server;

	class MainClass extends PluginBase {
		public function onEnable(){
			Server::getInstance()->getPluginManager()->registerEvents(new EventListener(), $this);
		}
	}

	class EventListener implements Listener {

		//Example
		public function onInteract(PlayerInteractEvent $event){
			$player = $event->getPlayer();
			$player->sendMessage("Test");
		}

		//template
		public function on(Event $event) {
			//codes
		}
	}
}