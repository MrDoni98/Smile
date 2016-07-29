<?php

namespace MrDoni98;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\entity\Entity;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\utils\TextFormat as F;

use pocketmine\event\player\PlayerChatEvent;

class Smile extends PluginBase implements Listener {

	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	
 public function Smile(PlayerChatEvent $event){
  $msg = $event->getMessage();
        $smile = array( 
  ':smile:' => '☺',
  '<3' => '§4♥§r',
  ':grinning:' => '§4(°ᴥ°)§r',
  ':wink:' => '§b°ᴥᵔ§r',
  ':smiley:' => '§3ᵔᴥᵔ§r',
  ':blush:' => '§6ﭢ§r',
  ':unknow:' => '§a▔\▁(ヅ)▁/▔§r',
  ':ak47:' => '§4︻┳デ═一§r',
  ':flushed:' => '§d⊙.⊙§r',
  ':cloud:' => '§b☁§r'
  );
        $smessage = str_replace(array_keys($smile), array_values($smile), $msg); 
        $event->setMessage($smessage);
 }
}