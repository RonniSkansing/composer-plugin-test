<?php
namespace Skansing;


exec('whoami') === 'root' && die('Aborting Sudo not allowd');


use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Test implements PluginInterface {
  public function activate(Composer $composer, IOInterface $io){}
}
