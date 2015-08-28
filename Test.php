<?php
namespace Skansing;
die('yay');

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PluginEvents;

class Test implements PluginInterface
{
  public function activate(Composer $composer, IOInterface $io)
  {

    die('you know what you did');
  }
}
