<?php
namespace Skansing;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\CommandEvent;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PluginEvents;
use Composer\Plugin\PreFileDownloadEvent;

echo 'Plugin Loaded ' . \PHP_EOL;

class Test implements PluginInterface, EventSubscriberInterface {
  protected $composer;
  protected $io;

  public function activate(Composer $composer, IOInterface $io)
  {
    echo 'Activate event ' . \PHP_EOL;
    $this->composer = $composer;
    $this->io = $io;
  }

  public static function getSubscribedEvents()
  {
    echo 'getSubscribedEvents event ' . \PHP_EOL;
    return [
      PluginEvents::COMMAND => [
        ['onCommand', 0]
      ],
      PluginEvents::PRE_FILE_DOWNLOAD => [
        ['onPreFileDownload', 0]
      ]
    ];
  }

  public function onCommand(CommandEvent $event)
  {
    echo 'onCommandevent ' . \PHP_EOL;
    var_dump(`whoami`, $event, $event->getCommandName());
  }

  public function onPreFileDownload(PreFileDownloadEvent $event) {
    echo 'onPreFileDownload event ' . \PHP_EOL;
  }

}
