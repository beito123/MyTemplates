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
	use pocketmine\command\Command;
	use pocketmine\command\CommandSender;
	use pocketmine\command\PluginIdentifiableCommand;
	use pocketmine\plugin\PluginBase;
	use pocketmine\Server;

	class MainClass extends PluginBase {
		public function onEnable(){
			//Add a command
			Server::getInstance()->getCommandMap()->register("test", new TestCommand($this));
		}
	}

	class TestCommand extends Command implements PluginIdentifiableCommand {
		
		private $plugin;

		public function __construct(MainClass $plugin){
			$this->plugin = $plugin;
			parent::__construct(
				"test",//name
				"test",//description
				"/test"//usage
			);
		}

		public function getPlugin(){
			return $this->plugin;
		}

		public function execute(CommandSender $sender, $alias, array $args){
			if(!$this->testPermission($sender)){
				return true;
			}

			//codes
			
			return true;
		}
	}
}