<?php
/**
 * languages class by adoankim - 2013.11.30
 *
 * This class provides French language for visualcaptcha.
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
      'desktop-text' => "Glisser l'icone indiqu&eacute; (<strong>%s</strong>) dans le rond",
      'mobile-text' => "Toucher l'icone (<strong>%s</strong>) pour le faire glisser",
      'drop-here' => 'Lacher<br>ici',
      'accessibility-title' => 'Options d\'affichages: &eacute;couter la question et y r&eacute;pondre',
      'accessibility-instructions' => 'Ecouter la question et r&eacute;pondre par &eacute;crit. Nombres ou mots:',
      'accessibility-not-supported' => 'Votre navigateur ne supporte pas l\'audio.'
    );

    // Setup Accessibility Questions here: array(Answer, MP3 Audio file). You can repeat answers, but it's safer if you don't.
    // You can generate MP3 audio files easily using www.fromtexttospeech.com
    self::$accessibilityOptions = array(
      array('10', Configuration::getAudiosPath(). '5times2.mp3'),
      array('20', Configuration::getAudiosPath() . '2times10.mp3'),
      array('6', Configuration::getAudiosPath() . '5plus1.mp3'),
      array('7', Configuration::getAudiosPath() . '4plus3.mp3'),
      array('4', Configuration::getAudiosPath() . 'add3to1.mp3'),
      array('blanc', Configuration::getAudiosPath() . 'milkcolor.mp3'),
      array('non', Configuration::getAudiosPath() . 'yourobot.mp3'),
      array('12', Configuration::getAudiosPath() . '6plus6.mp3'),
      array('100', Configuration::getAudiosPath() . '99plus1.mp3'),
      array('bleu', Configuration::getAudiosPath() . 'skycolor.mp3'),
      array('24', Configuration::getAudiosPath() . '12times2.mp3'),
      array('5', Configuration::getAudiosPath() . '4plus1.mp3'),
    );

    //Setup Images Names here: stringID, array(ImagePath, ImageName/Text to show)
    self::$answers = array(
      'airplane' => array(Configuration::getImagesPath() . 'airplane.png', 'Avion'),
      'balloons' => array(Configuration::getImagesPath() . 'balloons.png', 'Balloons'),
      'camera'   => array(Configuration::getImagesPath() . 'camera.png',   'Cam&eacute;ra'),
      'car'	  => array(Configuration::getImagesPath() . 'car.png',	  'Voiture'),
      'cat'	  => array(Configuration::getImagesPath() . 'cat.png', 'Chat'),
      'chair'	=> array(Configuration::getImagesPath() . 'chair.png',	'Chaise'),
      'clip'	 => array(Configuration::getImagesPath() . 'clip.png',	 'Clip'),
      'clock'	=> array(Configuration::getImagesPath() . 'clock.png',	'Horloge'),
      'cloud'	=> array(Configuration::getImagesPath() . 'cloud.png',	'Nuage'),
      'computer' => array(Configuration::getImagesPath() . 'computer.png', 'Ordinateur'),
      'envelope' => array(Configuration::getImagesPath() . 'envelope.png', 'Enveloppe'),
      'eye'	  => array(Configuration::getImagesPath() . 'eye.png', '&#339;il'),
      'flag'	 => array(Configuration::getImagesPath() . 'flag.png', 'Drapeau'),
      'folder'   => array(Configuration::getImagesPath() . 'folder.png', 'Dossier'),
      'foot'	 => array(Configuration::getImagesPath() . 'foot.png',	'Pied'),
      'graph'	=> array(Configuration::getImagesPath() . 'graph.png',	'Graphique'),
      'house'	=> array(Configuration::getImagesPath() . 'house.png', 'Maison'),
      'key'	  => array(Configuration::getImagesPath() . 'key.png', 'Cl&eacute;'),
      'lamp'	 => array(Configuration::getImagesPath() . 'lamp.png',	'Ampoule'),
      'leaf'	 => array(Configuration::getImagesPath() . 'leaf.png',	 'Feuille'),
      'lock'	 => array(Configuration::getImagesPath() . 'lock.png',	 'Cadenas'),
      'magnifying-glass' => array(Configuration::getImagesPath() . 'magnifying-glass.png', 'Loupe'),
      'man'	  => array(Configuration::getImagesPath() . 'man.png',	 'Homme'),
      'music-note' => array(Configuration::getImagesPath() . 'music-note.png', 'Note de musique'),
      'pants'	=> array(Configuration::getImagesPath() . 'pants.png', 'Pantalon'),
      'pencil'   => array(Configuration::getImagesPath() . 'pencil.png', 'Crayon'),
      'printer'  => array(Configuration::getImagesPath() . 'printer.png', 'Imprimeur'),
      'robot'	=> array(Configuration::getImagesPath() . 'robot.png',	'Robot'),
      'scissors' => array(Configuration::getImagesPath() . 'scissors.png', 'Ciseaux'),
      'sunglasses' => array(Configuration::getImagesPath() . 'sunglasses.png', 'Lunettes de soleil'),
      'tag'	  => array(Configuration::getImagesPath() . 'tag.png',	  '&Eacute;tiquette'),
      'tree'	 => array(Configuration::getImagesPath() . 'tree.png',	 'Arbre'),
      'truck'	=> array(Configuration::getImagesPath() . 'truck.png',	'Camion'),
      'tshirt'   => array(Configuration::getImagesPath() . 'tshirt.png', 'T-Shirt'),
      'umbrella' => array(Configuration::getImagesPath() . 'umbrella.png', 'Parapluie'),
      'woman'	=> array(Configuration::getImagesPath() . 'woman.png',	'Femme'),
      'world'	=> array(Configuration::getImagesPath() . 'world.png',	'Monde'),
    );
  }
}
Language::__init__();
?>
