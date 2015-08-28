<?php
namespace Skansing;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PluginEvents;
use Composer\Plugin\PreFileDownloadEvent;


class Test implements PluginInterface, EventSubscriberInterface {
  protected $composer;
  protected $io;

  public function activate(Composer $composer, IOInterface $io)
  {
    $this->composer = $composer;
    $this->io = $io;
  }

  public static function getSubscribedEvents()
  {
    return [
      PluginEvents::COMMAND => [
        ['onCommand', 0]
      ]
    ];
  }

  public function onCommand(CommandEvent $event)
  {
    var_dump(`whoami`, $event, $event->commandName); die;
  }

}
