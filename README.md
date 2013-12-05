# visualCaptcha + Internationalization

visualCaptcha fork that adds the capability of configuring new languages
to the original project.

##Configuration

###Directories and selected language
Modify the file "inc/configuration.json" in order to set the language
you want to use, the path of audio files and images.  Its important to
use double quote to delimit key items and strings values in the 
configuration file.

The audio directory must contain a sub-directory named as the selected
language. For instance:

Given the following "inc/configuration.json" definition

```
{
	"language" : "es-ES",
	"audios-path" : "audio/",
  "images-path" : "images/visualcaptcha/"
}
```

in "audio/" directory, a "audio/es-ES/" sub-directory,
containing all audio files, must exist.

###Language 
To set a new language, in "lang/" directory you've to create a new PHP 
file named as the same of selected language. For instance "lang/es-ES.php".

There is a template.php file that gives an example of the basic structure 
and required variables used by the internationalization mechanism.

It's no necessary to set the same questions and answers in order to
configure a new language, you're free to add the questions you want :). 

At this time, only the following languages are provided: 
- English
- French (France)
- Spanish (Spain)

###Thanks
Thanks to emotionLoop team for creating this amazing solution :).
