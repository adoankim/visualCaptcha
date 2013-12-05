<?php
/**
 * languages class by adoankim - 2013.11.30
 *
 * This class provides English language for visualcaptcha.
 *
 * This license applies to this file and others without reference to any other license.
 *
 * @author adoankim | https://github.com/adoankim
 * @link https://github.com/adoankim
 * @package visualCaptcha
 * @license GNU GPL v3
 * @version 1.0.0
 */

namespace visualCaptcha;
require_once('inc/configuration.class.php');
class Language{
  public static $messages;
  public static $answers;
  public static $accessibilityOptions;

  static function __init__(){
    //desktop-text and mobile-text must have 
    //one %s in order to show the name of the icon.  
    self::$messages = array(
      'desktop-text' => "Drag the <strong>%s</strong> to the circle on the side",
      'mobile-text' => "Touch the <strong>%s</strong> to move it to the circle on the side",
      'drop-here' => 'Drop<br>Here',
      'accessibility-title' => 'Accessibility option: listen to a question and answer it!',
      'accessibility-instructions' => 'Type below the <strong>answer</strong> to what you hear. Numbers or words:',
      'accessibility-not-supported' => 'Your browser does not support the audio element.'
    );

    //Setup Images Names here: stringID, array(ImagePath, ImageName/Text to show)
    self::$answers = array(
      'airplane' => array(Configuration::getImagesPath() . 'airplane.png', 'Airplane'),
      'balloons' => array(Configuration::getImagesPath() . 'balloons.png', 'Balloons'),
      'camera'   => array(Configuration::getImagesPath() . 'camera.png',   'Camera'),
      'car'	  => array(Configuration::getImagesPath() . 'car.png',	  'Car'),
      'cat'	  => array(Configuration::getImagesPath() . 'cat.png', 'Cat'),
      'chair'	=> array(Configuration::getImagesPath() . 'chair.png',	'Chair'),
      'clip'	 => array(Configuration::getImagesPath() . 'clip.png',	 'Clip'),
      'clock'	=> array(Configuration::getImagesPath() . 'clock.png',	'Clock'),
      'cloud'	=> array(Configuration::getImagesPath() . 'cloud.png',	'Cloud'),
      'computer' => array(Configuration::getImagesPath() . 'computer.png', 'Computer'),
      'envelope' => array(Configuration::getImagesPath() . 'envelope.png', 'Envelope'),
      'eye'	  => array(Configuration::getImagesPath() . 'eye.png', 'Eye'),
      'flag'	 => array(Configuration::getImagesPath() . 'flag.png', 'Flag'),
      'folder'   => array(Configuration::getImagesPath() . 'folder.png', 'Folder'),
      'foot'	 => array(Configuration::getImagesPath() . 'foot.png',	'Foot'),
      'graph'	=> array(Configuration::getImagesPath() . 'graph.png',	'Graph'),
      'house'	=> array(Configuration::getImagesPath() . 'house.png', 'House'),
      'key'	  => array(Configuration::getImagesPath() . 'key.png', 'Key'),
      'lamp'	 => array(Configuration::getImagesPath() . 'lamp.png',	'Lamp'),
      'leaf'	 => array(Configuration::getImagesPath() . 'leaf.png',	 'Leaf'),
      'lock'	 => array(Configuration::getImagesPath() . 'lock.png',	 'Lock'),
      'magnifying-glass' => array(Configuration::getImagesPath() . 'magnifying-glass.png', 'Magnifying Glass'),
      'man'	  => array(Configuration::getImagesPath() . 'man.png',	 'man'),
      'music-note' => array(Configuration::getImagesPath() . 'music-note.png', 'Music Note'),
      'pants'	=> array(Configuration::getImagesPath() . 'pants.png', 'Pants'),
      'pencil'   => array(Configuration::getImagesPath() . 'pencil.png', 'Pencil'),
      'printer'  => array(Configuration::getImagesPath() . 'printer.png', 'Printer'),
      'robot'	=> array(Configuration::getImagesPath() . 'robot.png',	'Robot'),
      'scissors' => array(Configuration::getImagesPath() . 'scissors.png', 'Scissors'),
      'sunglasses' => array(Configuration::getImagesPath() . 'sunglasses.png', 'Sunglasses'),
      'tag'	  => array(Configuration::getImagesPath() . 'tag.png',	  'Tag'),
      'tree'	 => array(Configuration::getImagesPath() . 'tree.png',	 'Tree'),
      'truck'	=> array(Configuration::getImagesPath() . 'truck.png',	'Truck'),
      'tshirt'   => array(Configuration::getImagesPath() . 'tshirt.png', 'T-shirt'),
      'umbrella' => array(Configuration::getImagesPath() . 'umbrella.png', 'Umbrella'),
      'woman'	=> array(Configuration::getImagesPath() . 'woman.png',	'Woman'),
      'world'	=> array(Configuration::getImagesPath() . 'world.png',	'World')
    );
      
    // Setup Accessibility Questions here: array(Answer, MP3 Audio file). You can repeat answers, but it's safer if you don't.
    // You can generate MP3 & Ogg audio files easily using http://stuffthatspins.com/stuff/php-TTS/index.php
    self::$accessibilityOptions = array(
      array('10', Configuration::getAudiosPath(). '5times2.mp3'),
      array('20', Configuration::getAudiosPath() . '2times10.mp3'),
      array('6', Configuration::getAudiosPath() . '5plus1.mp3'),
      array('7', Configuration::getAudiosPath() . '4plus3.mp3'),
      array('4', Configuration::getAudiosPath() . 'add3to1.mp3'),
      array('green', Configuration::getAudiosPath() . 'addblueandyellow.mp3'),
      array('white', Configuration::getAudiosPath() . 'milkcolor.mp3'),
      array('2', Configuration::getAudiosPath() . 'divide4by2.mp3'),
      array('yes', Configuration::getAudiosPath() . 'sunastar.mp3'),
      array('no', Configuration::getAudiosPath() . 'yourobot.mp3'),
      array('12', Configuration::getAudiosPath() . '6plus6.mp3'),
      array('100', Configuration::getAudiosPath() . '99plus1.mp3'),
      array('blue', Configuration::getAudiosPath() . 'skycolor.mp3'),
      array('3', Configuration::getAudiosPath() . 'after2.mp3'),
      array('24', Configuration::getAudiosPath() . '12times2.mp3'),
      array('5', Configuration::getAudiosPath() . '4plus1.mp3')
    );
  }
}

  Language::__init__();
?>
