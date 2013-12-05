<?php
/**
 * languages class by adoankim - 2013.11.30
 *
 * This class provides Spanish language for visualcaptcha.
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
      'desktop-text' => "Arrastra la imagen indicada (<strong>%s</strong>) en el c&iacute;rculo",
      'mobile-text' => "Pulsa sobre la imágen indicada (<strong>%s</strong>) para moverla al c&iacute;rculo",
      'drop-here' => 'Soltar<br>Aqu&iacute;',
      'accessibility-title' => 'Opci&oacute;n de accesibilidad:  ¡Responde la pregunta y escribe tu respuesta!',
      'accessibility-instructions' => 'Escribe la <strong>respuesta</strong> a la pregunta que has escuchado. N&uacute;meros o palabras:',
      'accessibility-not-supported' => 'Tu navegador no soporta reproducción de audio'
    );


    //Setup Images Names here: stringID, array(ImagePath, ImageName/Text to show)
    self::$answers = array(
      'airplane' => array(Configuration::getImagesPath() . 'airplane.png', 'Avi&oacute;n'),
      'balloons' => array(Configuration::getImagesPath() . 'balloons.png', 'Globos'),
      'camera'   => array(Configuration::getImagesPath() . 'camera.png',   'C&aacute;mara'),
      'car'	  => array(Configuration::getImagesPath() . 'car.png',	  'Coche'),
      'cat'	  => array(Configuration::getImagesPath() . 'cat.png', 'Gato'),
      'chair'	=> array(Configuration::getImagesPath() . 'chair.png',	'Silla'),
      'clip'	 => array(Configuration::getImagesPath() . 'clip.png',	 'Clip'),
      'clock'	=> array(Configuration::getImagesPath() . 'clock.png',	'Reloj'),
      'cloud'	=> array(Configuration::getImagesPath() . 'cloud.png',	'Nube'),
      'computer' => array(Configuration::getImagesPath() . 'computer.png', 'Ordenador'),
      'envelope' => array(Configuration::getImagesPath() . 'envelope.png', 'Sobre'),
      'eye'	  => array(Configuration::getImagesPath() . 'eye.png', 'Ojo'),
      'flag'	 => array(Configuration::getImagesPath() . 'flag.png', 'Bandera'),
      'folder'   => array(Configuration::getImagesPath() . 'folder.png', 'Carpeta'),
      'foot'	 => array(Configuration::getImagesPath() . 'foot.png',	'Pie'),
      'graph'	=> array(Configuration::getImagesPath() . 'graph.png',	'Gr&aacute;fica'),
      'house'	=> array(Configuration::getImagesPath() . 'house.png', 'Casa'),
      'key'	  => array(Configuration::getImagesPath() . 'key.png', 'Llave'),
      'lamp'	 => array(Configuration::getImagesPath() . 'lamp.png',	'L&aacute;mpara'),
      'leaf'	 => array(Configuration::getImagesPath() . 'leaf.png',	 'Hoja'),
      'lock'	 => array(Configuration::getImagesPath() . 'lock.png',	 'Candado'),
      'magnifying-glass' => array(Configuration::getImagesPath() . 'magnifying-glass.png', 'Lupa'),
      'man'	  => array(Configuration::getImagesPath() . 'man.png',	 'Hombre'),
      'music-note' => array(Configuration::getImagesPath() . 'music-note.png', 'Nota musical'),
      'pants'	=> array(Configuration::getImagesPath() . 'pants.png', 'Pantalones'),
      'pencil'   => array(Configuration::getImagesPath() . 'pencil.png', 'L&aacute;piz'),
      'printer'  => array(Configuration::getImagesPath() . 'printer.png', 'Impresora'),
      'robot'	=> array(Configuration::getImagesPath() . 'robot.png',	'Robot'),
      'scissors' => array(Configuration::getImagesPath() . 'scissors.png', 'Tijeras'),
      'sunglasses' => array(Configuration::getImagesPath() . 'sunglasses.png', 'Gafas de sol'),
      'tag'	  => array(Configuration::getImagesPath() . 'tag.png',	  'Etiqueta'),
      'tree'	 => array(Configuration::getImagesPath() . 'tree.png',	 '&Aacute;rbol'),
      'truck'	=> array(Configuration::getImagesPath() . 'truck.png',	'Cami&oacute;n'),
      'tshirt'   => array(Configuration::getImagesPath() . 'tshirt.png', 'Paraguas'),
      'umbrella' => array(Configuration::getImagesPath() . 'umbrella.png', 'Umbrella'),
      'woman'	=> array(Configuration::getImagesPath() . 'woman.png',	'Mujer'),
      'world'	=> array(Configuration::getImagesPath() . 'world.png',	'Mundo'),
    );

    // Setup Accessibility Questions here: array(Answer, MP3 Audio file). You can repeat answers, but it's safer if you don't.
    // You can generate MP3 audio files easily using www.fromtexttospeech.com
    self::$accessibilityOptions = array(
      array('10', Configuration::getAudiosPath(). '5times2.mp3'),
      array('20', Configuration::getAudiosPath() . '2times10.mp3'),
      array('6', Configuration::getAudiosPath() . '5plus1.mp3'),
      array('7', Configuration::getAudiosPath() . '4plus3.mp3'),
      array('4', Configuration::getAudiosPath() . 'add3to1.mp3'),
      array('verde', Configuration::getAudiosPath() . 'addblueandyellow.mp3'),
      array('blanco', Configuration::getAudiosPath() . 'milkcolor.mp3'),
      array('2', Configuration::getAudiosPath() . 'divide4by2.mp3'),
      array('si', Configuration::getAudiosPath() . 'sunastar.mp3'),
      array('no', Configuration::getAudiosPath() . 'yourobot.mp3'),
      array('12', Configuration::getAudiosPath() . '6plus6.mp3'),
      array('100', Configuration::getAudiosPath() . '99plus1.mp3'),
      array('azul', Configuration::getAudiosPath() . 'skycolor.mp3'),
      array('3', Configuration::getAudiosPath() . 'after2.mp3'),
      array('24', Configuration::getAudiosPath() . '12times2.mp3'),
      array('5', Configuration::getAudiosPath() . '4plus1.mp3'),
    );
  }
}
Language::__init__();
?>
