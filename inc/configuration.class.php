<?php
/**
 * languages class by adoankim - 2013.11.30
 *
 * This class handles the configuration for visualcaptcha.
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
  class Configuration{
    private static $instance = null;
    private static $configurationFile = 'inc/configuration.json';
    private static $language;
    private static $audiosPath;
    private static $imagesPath;

    private static $defaultLang = 'en-EN';
    private static $defaultAudiosPath = 'audio/';
    private static $defaultImagesPath = 'images/visualcaptcha/';
    
    static function __init__(){
      $content = file_get_contents(self::$configurationFile);
      $params = json_decode($content);  
      self::$language = self::getParamOrDefault($params, 'language', self::$defaultLang);
      $path = self::getParamOrDefault($params, 'audios-path', self::$defaultAudiosPath);
      self::$audiosPath = $path.'/'.self::$language.'/';
      self::$imagesPath = self::getParamOrDefault($params, 'images-path', self::$defaultImagesPath);
    }

    public static function getLanguage(){
      return self::$language;
    }

    public static function getAudiosPath(){
      return self::$audiosPath;
    }


    public static function getImagesPath(){
      return self::$imagesPath;
    }

    private static function getParamOrDefault($params, $key, $default){
        if($params != null && array_key_exists($key, $params)){
          return $params->{$key};
        } 
        return $default;
    }
  }

  Configuration::__init__();

?>
