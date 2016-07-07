<?php
/*
	License Text
 */
namespace Auther\PluginName;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class MainClass extends PluginBase {//use plugin-commands.yml

	public function onEnable() {
		//codes
	}

	public function onCommand(CommandSender $sender, Command $command, $lable, array $args) {
		switch(strtolower($command->getName())){
			case "test":
				//codes
				break;
		}
	}
}