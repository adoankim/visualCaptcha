<?php
/**
 * languages class by adoankim - 2013.11.30
 *
 * This class is a template for new language.
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
      'desktop-text' => "%s",
      'mobile-text' => "%s",
      'drop-here' => '',
      'accessibility-title' => '',
      'accessibility-instructions' => '',
      'accessibility-not-supported' => ''
    );

    // Setup Accessibility Questions here: array(Answer, MP3 Audio file). You can repeat answers, but it's safer if you don't.
    // You can generate MP3 audio files easily using www.fromtexttospeech.com
    self::$accessibilityOptions = array(
      array('answer', Configuration::getAudiosPath(). 'audio.mp3'),
    );

    //Setup Images Names here: stringID, array(ImagePath, ImageName/Text to show)
    self::$answers = array(
      'item' => array(Configuration::getImagesPath() . 'item.png', 'Item'),
    );
  }
}
Language::__init__();
?>
