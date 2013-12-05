<?php
/**
 * languages class by adoankim - 2013.11.30
 *
 * This class handles the internationalization feature for visualcaptcha.
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

class Internationalization{
  private static $instance = null;
  private static $configurationClass = 'inc/configuration.class.php';
  private $language = 'en-EN';
  private $audioPath = 'audio/';
  private $messages;
  private $accessibilityOptions;
  public static function getInstance(){
    if(self::$instance == null){
      self::$instance = new Internationalization();
    }
    return self::$instance;
  }

  public function __construct(){
      require_once(self::$configurationClass);
 
    require_once('lang/'.Configuration::getLanguage().'.php');
    $this->messages = Language::$messages;
    $this->accessibilityOptions = Language::$accessibilityOptions; 
    $this->answers = Language::$answers;  
  }
  

  public function getAnswers(){
    return $this->answers;
  }
  
  public function getAccessibilityOptions(){
    return $this->accessibilityOptions;
  }
  
  public function getDesktopText($captchaText){
    $msg = $this->getItemFromArray('desktop-text', $this->messages);
    return sprintf($msg, $captchaText);
  }

  public function getMobileText($captchaText){
    $msg = $this->getItemFromArray('mobile-text', $this->messages);
    return sprintf($msg, $captchaText);
  }

  public function getDropHereText(){
    return $this->getItemFromArray('drop-here', $this->messages);
  }

  public function getAccessibilityTitle(){
    return $this->getItemFromArray('accessibility-title', $this->messages);
  }

  public function getAccessibilityInstructions(){
    return $this->getItemFromArray('accessibility-instructions', $this->messages);
  }

  public function getAccessibilityNotSupported(){
    return $this->getItemFromArray('accessibility-not-supported', $this->messages);
  }

  private function getItemFromArray($id, $array){
    if(array_key_exists($id, $array))
      return $array[$id];
    return '';
  }


}

?>
