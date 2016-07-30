<?php

namespace MrDoni98;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
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
  ':cloud:' => '§b☁§r',
  ':nice:' => '§4(｡◕‿‿◕｡)§r',
  ':panda:' => '§l(✪㉨✪)§r',
  ':bear:' => 'ʕ•ᴥ•ʔ',
  ':cry:' => 'ب_ب',
  ':worry:' => '◘_◘',
  ':creeper:' => '§2▔凸▔'
  );
        $smessage = str_replace(array_keys($smile), array_values($smile), $msg); 
        $event->setMessage($smessage);
 }
 
 public function cmd(PlayerCommandPreprocessEvent $e) {
  $entity = $e->getPlayer();
  $msg = $e->getMessage();
  if($msg == "smiles"){
  	$e->setCancelled();
  	$entity->sendMessage(F::YELLOW. ":smile: => ☺, <3 => §4♥§r, :grinning: => §4(°ᴥ°)§r, :wink: => §b°ᴥᵔ§r");
  	$entity->sendMessage(F::YELLOW. ":smiley: => §3ᵔᴥᵔ§r, :blush: => §6ﭢ§r, :unknow: => §a▔\▁(ヅ)▁/▔§r, :ak47: => §4︻┳デ═一§r");
  	$entity->sendMessage(F::YELLOW. ":flushed: => §d⊙.⊙§r, :cloud: => §b☁§r, :nice: => §4(｡◕‿‿◕｡)§r, :panda: => §l(✪㉨✪)§r");
  	$entity->sendMessage(F::YELLOW. ":bear: => ʕ•ᴥ•ʔ, :cry: => ب_ب, :worry: => ◘_◘, :creeper: => §2▔凸▔");
  }
  
 }
}
