# Kohana Mlang module

Multilanguage module for Kohana PHP Framework, version 3.2

Based on this module https://github.com/shockiii/kohana-multilang version 1.0.1
updated for Kohana 3.2 and added some features



### Configuration

	return array(
		'default'		=> 'en', // The default language code
		'cookie'		=> 'lang', // The cookie name
		/**
		 * Allowed languages
		 */
		'languages'		=>	array( 
			'en'		=> array(
				'i18n'		=> 'en',
				'locale'    => array('en_US.utf-8'),
				'label'		=> 'english',
			),
			'fr'		=>	array(
				'i18n'		=> 'fr',
				'locale'    => array('fr_FR.utf-8'),
				'label'		=> 'français',
			),
			'it'		=>	array(
				'i18n'		=> 'it',
				'locale'    => array('it_IT.utf-8'),
				'label'		=> 'italiano',
			),
		),
	);



### Access current language

i18n::$lang;
